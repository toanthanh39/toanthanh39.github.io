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
function withFetchData(Component) {
  return (props) => {
    const colRef = collection(db, "blogs");
    const GetDocs = React.useRef(null);
    const [blog, setBlog] = React.useState([]);
    console.log("🚀 ~ file: withFetchData.js ~ line 17 ~ return ~ blog", blog);
    const [data, setData] = React.useState([]);
    const GetData = React.useRef({});

    // GetData.current = async () => {
    //   try {
    //     const response = await axios.get(api);
    //     if (response.data) {
    //       setData(response.data);
    //     }
    //   } catch (error) {
    //     console.log(error);
    //   }
    // };
    // React.useEffect(() => {
    //   GetData.current();
    // }, []);
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
    }, [data]);

    const value = { blog };
    return <Component value={value} {...props}></Component>;
  };
}
export default withFetchData;
