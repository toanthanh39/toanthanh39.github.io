import React from "react";
import styled from "styled-components";
import PropTypes from "prop-types";
const Button = styled.button`
  color: ${(props) => props.theme.primary};
  background: ${(props) => props.theme.bgPrimary};
  min-width: 70px;
  height: auto;
  min-height: 40px;
  padding: 4px 8px;
  font-weight: 600;
  transition: all 0.5s;
  :hover {
    background: ${(props) => props.theme.bgSecondary};
  }
  @media screen and (max-width: 768px) {
    width: 100%;
  }
`;
const ButtonCustom = ({ children, className, type = "text", ...props }) => {
  return (
    <Button type={type} {...props} className={`${className}`}>
      {children}
    </Button>
  );
};
ButtonCustom.propTypes = {
  type: PropTypes.string.isRequired,
  className: PropTypes.string,
};
export default ButtonCustom;
