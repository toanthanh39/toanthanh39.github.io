import React, { useEffect } from "react";
import { useLocation } from "react-router-dom";

const ScollTop = (props) => {
  const Location = useLocation();
  useEffect(() => {
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
  }, [Location]);
  return <>{props.children}</>;
};

export default ScollTop;
