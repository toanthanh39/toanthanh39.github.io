import "./App.css";
import React from "react";
import "./index.scss";
import AnimatedRoutes from "./AnimatedRoutes";
import BackToTop from "./Components/SmallTarget/BackToTop";
import "react-toastify/dist/ReactToastify.css";
import { ToastContainer } from "react-toastify";
function App() {
  return (
    <main>
      <AnimatedRoutes></AnimatedRoutes>
      <BackToTop></BackToTop>
    </main>
  );
}

export default App;
