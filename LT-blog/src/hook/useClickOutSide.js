import { useEffect, useRef, useState } from "react";

export default function useClickOutSide() {
  const [show, setShow] = useState(false);
  const NodeRef = useRef(null);
  useEffect(() => {
    function handleClickOut(e) {
      if (NodeRef.current && !NodeRef.current.contains(e.target)) {
        setShow(false);
      } else {
        setShow(true);
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
  };
}
