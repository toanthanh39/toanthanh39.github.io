import * as React from "react";

export default function useClickShow() {
  const [show, setShow] = React.useState(false);
  const NodeRef = React.useRef(null);
  React.useEffect(() => {
    function handleClickOut(e) {
      if (NodeRef.current && !NodeRef.current.contains(e.target)) {
        setShow(false);
      }
    }
    if (NodeRef) {
      window.addEventListener("click", handleClickOut);
    }
    return () => {
      window.removeEventListener("click", handleClickOut);
    };
  }, []);
  return {
    show,
    NodeRef,
    setShow,
  };
}
