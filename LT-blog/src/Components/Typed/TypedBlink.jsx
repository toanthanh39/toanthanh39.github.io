import React from "react";
import Typed from "typed.js";
const Fakedata = ["This is My First Blog", "Development by LTT"];
const TypedBlink = ({ data = Fakedata }) => {
  const el = React.useRef(null);
  const typed = React.useRef(null);
  React.useEffect(() => {
    const options = {
      strings: data,
      typeSpeed: 100,
      backSpeed: 50,
      loop: true,
      backDelay: 1500,
    };
    typed.current = new Typed(el.current, options);

    return () => {
      typed.current.destroy();
    };
  }, []);
  return (
    <>
      <span className="gradient" ref={el}></span>
    </>
  );
};

export default TypedBlink;
