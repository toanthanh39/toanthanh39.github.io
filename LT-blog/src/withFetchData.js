import * as React from "react";
import axios from "axios";
import useLocalStorage from "use-local-storage";
import { dbapi } from "./config";
import {
  addDoc,
  collection,
  onSnapshot,
  serverTimestamp,
} from "firebase/firestore";
import { db } from "./Firebase/Firebase-config";
function withFetchData(Component, api = "") {
  return (props) => {
    const colRef = collection(db, "blogs");
    const GetDocs = React.useRef(null);
    const [blog, setBlog] = React.useState([]);
    const [data, setData] = React.useState([]);
    const GetData = React.useRef({});

    GetData.current = async () => {
      try {
        const response = await axios.get(api);
        if (response.data) {
          setData(response.data);
        }
      } catch (error) {
        console.log(error);
      }
    };
    React.useEffect(() => {
      GetData.current();
    }, []);
    GetDocs.current = async function () {
      onSnapshot(colRef, (snapshot) => {
        let NewData = [];
        snapshot.forEach((item) => {
          NewData.push({
            ...item.data(),
          });
          setBlog(NewData);
        });
      });
    };
    React.useEffect(() => {
      GetDocs.current();
    }, []);
    async function AddDoc(data = {}) {
      try {
        const docRef = await addDoc(colRef, {
          ...data,
          createAt: serverTimestamp(),
        });
        console.log("Add Blog success with ID :", docRef);
      } catch (e) {
        console.error("Error adding document: ", e);
      }
    }
    const value = { AddDoc, blog, data };
    return <Component value={value} {...props}></Component>;
  };
}
export default withFetchData;
