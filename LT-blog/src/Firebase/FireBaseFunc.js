import {
  signInWithEmailAndPassword,
  updateProfile,
  signOut,
} from "firebase/auth";
import { useAuth } from "../Context/Auth-context";
import { auth } from "./Firebase-config";

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
export { SignIn, LogOut };
