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
      <ToastContainer
        position="bottom-right"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
        theme="light"
      />
      <AnimatedRoutes></AnimatedRoutes>
      <BackToTop></BackToTop>
    </main>
  );
}

export default App;
