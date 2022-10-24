import { onAuthStateChanged, signOut } from "firebase/auth";
import {
  createContext,
  useContext,
  useEffectLayout,
  useLayoutEffect,
  useState,
} from "react";
import { string } from "yup";
import { auth } from "../Firebase/Firebase-config";
import { toast } from "react-toastify";
// import useLocalStorage from "use-local-storage";
const AuthContext = createContext();
function AuthProvider(props) {
  // const [userLocal, setUserLocal] = useLocalStorage("user", "");
  const [userInfor, setUserInfor] = useState("");
  const [openError, setOpenError] = useState(false);
  const [message, setMessage] = useState([]);
  useLayoutEffect(() => {
    onAuthStateChanged(auth, (curentUser) => {
      if (curentUser) {
        setUserInfor(curentUser);
      } else {
        setUserInfor("");
      }
    });
    return () => null;
  });

  const handleSignOut = () => {
    signOut(auth);
    setUserInfor("");
    toast("Logout success", {
      position: "bottom-right",
      autoClose: 2000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: false,
      draggable: true,
      progress: undefined,
      theme: "light",
    });
  };

  const value = {
    userInfor,
    setUserInfor,
    handleSignOut,
    openError,
    setOpenError,
    message,
  };

  return <AuthContext.Provider value={value} {...props}></AuthContext.Provider>;
}

function useAuth() {
  const context = useContext(AuthContext);
  if (typeof context === "undefined")
    throw new Error("useAuth must be used within inside AuthProvider");
  return context;
}

export { useAuth, AuthProvider };
