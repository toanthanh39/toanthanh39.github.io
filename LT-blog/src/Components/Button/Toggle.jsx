import React from "react";
import PropTypes from "prop-types";
const Toggle = ({ id = "", name = "", onClick = {}, on = false }) => {
  return (
    <label>
      <input
        type="checkbox"
        checked={on}
        readOnly
        className="hidden"
        id={id}
        name="name"
      />
      <div
        className={`inline-block  w-[100px] h-[52px] rounded-full transition-all  p-1 ${
          on ? "bg-green-400" : "bg-slate-100"
        }`}
      >
        <div
          onClick={onClick}
          className={`h-full w-[50%] rounded-full  transition-all ease-in-out cursor-pointer select-none   ${
            on
              ? "translate-x-[100%] bg-slate-200 "
              : "translate-x-0 bg-green-400"
          } `}
        ></div>
      </div>
    </label>
  );
};
Toggle.propTypes = {
  on: PropTypes.bool,
  onClick: PropTypes.func,
};
export default Toggle;
