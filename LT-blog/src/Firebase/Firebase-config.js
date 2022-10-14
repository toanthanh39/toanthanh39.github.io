import { initializeApp } from "firebase/app";
import { getFirestore } from "firebase/firestore";
import { getAuth } from "firebase/auth";
const firebaseConfig = {
  apiKey: "AIzaSyDzJq6RhhEJko7A54h5rtnGMEvZaKd0c2U",
  authDomain: "lt-blogging.firebaseapp.com",
  projectId: "lt-blogging",
  storageBucket: "lt-blogging.appspot.com",
  messagingSenderId: "982034370891",
  appId: "1:982034370891:web:0976f5dd42b30bf5fcd8ce",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
export const db = getFirestore(app);
export const auth = getAuth();
