import React, { useEffect } from "react";
import { createPortal } from "react-dom";
import { RiCloseCircleFill } from "react-icons/ri";
function createPortalWrapper() {
  const element = document.createElement("div");
  element.id = "wrapper";
  return element;
}
const PortalWrapperElement = createPortalWrapper();

const Portal = ({
  bodyClassName = "",
  OuterClassName = "",
  show,
  onClose,
  coord,
  children,
  ...props
}) => {
  useEffect(() => {
    document.body.appendChild(PortalWrapperElement);
  }, []);
  const ElementRender = (
    <div
      className={`fixed ${OuterClassName}  overplay visible bg-slate-800 z-[9999999999] bg-opacity-60  "
      }  `}
      style={{ top: coord.top + 30, left: coord.left }}
    >
      <div onClick={onClose} className="absolute top-0 right-0 text-lg ">
        <RiCloseCircleFill></RiCloseCircleFill>
      </div>
      <div className={` content absolute inset-0 ${bodyClassName}`}>
        {children}
      </div>
    </div>
  );
  return createPortal(ElementRender, PortalWrapperElement);
};

export default Portal;
