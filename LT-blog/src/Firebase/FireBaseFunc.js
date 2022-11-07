import {
  signInWithEmailAndPassword,
  updateProfile,
  signOut,
} from "firebase/auth";
import {
  addDoc,
  collection,
  deleteDoc,
  doc,
  serverTimestamp,
} from "firebase/firestore";
import { useAuth } from "../Context/Auth-context";
import { auth, db } from "./Firebase-config";
import { toast } from "react-toastify";
const colRef = collection(db, "blogs");

async function SignIn({ user, email, password }) {
  try {
    await signInWithEmailAndPassword(auth, email, password);
  } catch (error) {
    console.log(error);
  }
  updateProfile(auth.currentUser, {
    displayName: user,
  });
}

function LogOut() {
  const { setUserInfor } = useAuth();
  signOut(auth);
  setUserInfor("");
  window.reload();
}
async function DeleteBlog(id) {
  const colRefdelete = doc(db, "blogs", id);
  await deleteDoc(colRefdelete);
  toast.success("Delete blog success", {
    position: "bottom-right",
    autoClose: 3000,
    hideProgressBar: false,
    closeOnClick: true,
    pauseOnHover: false,
    draggable: true,
    progress: undefined,
    theme: "light",
  });
}
async function addDocs(data) {
  try {
    const blogRef = await addDoc(colRef, {
      ...data,
      createAt: serverTimestamp(),
    });
    if (blogRef) {
      return blogRef;
    }
  } catch (e) {
    console.error("Error adding document: ", e);
  }
}
export { SignIn, LogOut, DeleteBlog, addDocs };
