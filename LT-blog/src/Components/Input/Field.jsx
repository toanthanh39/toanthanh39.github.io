import React, { useState } from "react";
import { useController } from "react-hook-form";
import styled from "styled-components";
import Eye from "../Icon/Eye";

const FieldStyle = styled.div`
  position: relative;
  width: 100%;
  input {
    width: 100%;
    height: 40px;

    padding: ${(props) => (props.hasIcon ? "2px 50px 2px 8px" : "2px 8px")};
    ::-webkit-input-placeholder {
      color: ${(props) => props.theme.secondary};
    }
  }
  .icon-eye {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    user-select: none;
  }
`;
const Field = ({
  name = "",
  type = "text",
  children,
  hasIcon = false,
  control = null,
  placeholder = "",
  className,
  onChange = {},
  ...props
}) => {
  const [show, setShow] = useState(false);
  const handleShowPassword = (e) => {
    setShow((show) => !show);
  };
  const { field } = useController({
    control,
    name: name,
    defaultValue: "",
  });
  return (
    <FieldStyle hasIcon={hasIcon}>
      {children}
      <input
        className={className}
        id={name}
        type={show ? "text" : type}
        placeholder={placeholder}
        onChange={onChange}
        {...field}
        {...props}
      />
      {hasIcon ? (
        <Eye
          className="icon-eye"
          show={show}
          onClick={handleShowPassword}
        ></Eye>
      ) : (
        ""
      )}
    </FieldStyle>
  );
};

export default Field;
