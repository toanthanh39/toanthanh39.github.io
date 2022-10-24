import React from "react";
import Portal from "./Portal";
import { CSSTransition } from "react-transition-group";
const PortalBase = ({
  show,
  children,
  onClose,
  OuterClassName,
  coord,
  ...props
}) => {
  return (
    <>
      <CSSTransition in={show} classNames="fade" unmountOnExit timeout={250}>
        {(status) => (
          <Portal
            onClose={onClose}
            OuterClassName={OuterClassName}
            show={status !== "exited"}
            coord={coord}
          ></Portal>
        )}
      </CSSTransition>
    </>
  );
};

export default PortalBase;
