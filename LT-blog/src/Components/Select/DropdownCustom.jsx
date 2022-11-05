import React from "react";
import { useWatch } from "react-hook-form";
import { BiDownArrow, BiUpArrow } from "react-icons/bi";
import useClickShow from "./../../hook/useClickShow";
const DropdownCustom = ({
  title,
  opt = [],
  name = "",
  setValue,
  control,
  errors,
  ...rest
}) => {
  const { show, setShow, NodeRef } = useClickShow();
  const value = useWatch({
    control,
    name: name,
    defaultValue: "",
  });
  const handleSetValue = (e) => {
    setValue(name, e.target.dataset.value);
    setShow(!show);
  };

  //   const getToggleProps = ({ onClick, ...rest } = {}) => {
  //     return {
  //       onClick: () => {
  //         onClick && onClick();
  //         handleSetValue();
  //       },
  //       ...rest,
  //     };
  //   };

  return (
    <div className="relative w-full " ref={NodeRef}>
      <div className="p-3 border border-gray-100 bg-[#c4c4c4] rounded-lg flex justify-between items-center">
        <span> {value || title}</span>
        <BiDownArrow
          className={`transition-all  ${
            show ? "rotate-[-180deg] " : "rotate-0 "
          }`}
          onClick={() => setShow(!show)}
        ></BiDownArrow>
      </div>
      <div
        className={`absolute top-full mt-1 left-0 w-full h-auto p-1 rounded-lg bg-white max-[300px] overflow-y-auto  ${
          show ? "" : "opacity-0 invisible "
        } `}
      >
        {opt.length > 0 &&
          opt.map((item, index) => (
            <div
              key={index}
              className="hover:bg-slate-300 rounded-lg p-1 cursor-pointer select-none "
              //   {...getToggleProps({
              //     onClick: () => Toggle(),
              //   })}
              onClick={(e) => handleSetValue(e)}
              data-value={item.name}
            >
              {item.name}
            </div>
          ))}
      </div>
    </div>
  );
};

export default DropdownCustom;
