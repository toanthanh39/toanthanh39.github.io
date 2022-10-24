import React from "react";
import { BsBoxArrowInLeft } from "react-icons/bs";
import { useNavigate } from "react-router-dom";
import styled, { keyframes } from "styled-components";
const move = keyframes`
  0% {
    transform: translateX(10px);
  }

  50% {
    transform: translateX(-10px);
  }
  100%{
    transform: translateX(10px);

  }
`;
const Container = styled.div`
  cursor: pointer;
  transition: all 1s;
  width: auto;
  max-width: 150px;
  :hover {
    /* animation: ${move} 2s linear infinite; */
    transform: translateX(-15px);
  }
`;

const Back = ({ className = "" }) => {
  const navigate = useNavigate();
  return (
    <Container
      className={`flex gap-1 absolute items-center text-green-600  z-[9999] cursor-pointer ${className} `}
      onClick={() => navigate("/")}
    >
      <BsBoxArrowInLeft className=" text-[24pt]   text-green-500 cursor-pointer"></BsBoxArrowInLeft>
      <h4>Back </h4>
    </Container>
  );
};

export default Back;
