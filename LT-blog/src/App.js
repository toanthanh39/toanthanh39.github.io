import "./App.css";
import React from "react";
import "./index.scss";
import AnimatedRoutes from "./AnimatedRoutes";
import BackToTop from "./Components/SmallTarget/BackToTop";

function App() {
  return (
    <main>
      <AnimatedRoutes></AnimatedRoutes>
      <BackToTop></BackToTop>
    </main>
  );
}

export default App;
