import {
  getDownloadURL,
  getStorage,
  ref,
  uploadBytesResumable,
} from "firebase/storage";
import { useState } from "react";

export default function useFirebaseImage(setValue = () => {}) {
  const [progress, setProgress] = useState(0);
  const [image, setImage] = useState("A");

  const [urlImage, setUrlImage] = useState("");
  const handleUploadImage = (file) => {
    const storage = getStorage();
    const storageRef = ref(storage, "images/" + file.name);
    const uploadTask = uploadBytesResumable(storageRef, file);
    uploadTask.on(
      "state_changed",
      (snapshot) => {
        // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
        const progressCurrent =
          (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log("Upload is " + progressCurrent + "% done");
        setProgress(progressCurrent);
        switch (snapshot.state) {
          case "paused":
            console.log("Upload is paused");
            break;
          case "running":
            console.log("Upload is running");
            break;
          default:
            console.log("empty");
        }
      },
      (error) => {
        console.log(error);
      },
      () => {
        // Upload completed successfully, now we can get the download URL
        getDownloadURL(uploadTask.snapshot.ref).then((downloadURL) => {
          console.log("File available at", downloadURL);
          setImage(downloadURL);
        });
      }
    );
  };

  const handleSelectImage = (e) => {
    const file = e.target.files[0];
    if (!file) return;
    setValue("file", file);
    const url = URL.createObjectURL(e.target.files[0]);
    setUrlImage(url);
  };
  const handleDeleteImage = () => {
    setValue("file", null);
    setUrlImage("");
    setImage("");
  };
  return {
    handleSelectImage,
    handleUploadImage,
    handleDeleteImage,
    progress,
    image,
    urlImage,
    setUrlImage,
    setImage,
  };
}
