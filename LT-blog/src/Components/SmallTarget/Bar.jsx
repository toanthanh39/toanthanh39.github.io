import React from "react";
import styled from "styled-components";

const BarContainer = styled.div`
  color: #000000;
  font-size: 18pt;
  display: none;
  @media screen and (max-width: 1024px) {
    display: block;
  }
`;
const Bar = ({ onClick }) => {
  return (
    <BarContainer onClick={onClick}>
      <i className="fa-solid fa-bars"></i>
    </BarContainer>
  );
};

export default Bar;
