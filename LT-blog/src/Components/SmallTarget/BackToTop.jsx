import React from "react";
import { BsArrowUpCircleFill } from "react-icons/bs";
import styled, { keyframes } from "styled-components";
import ButtonCustom from "./../Button/ButtonCustom";
const animated = keyframes`
    0%{
        transform: translateY(0px);
    }
   
    50%{
        transform: translateY(-30px);
    }
    100%{
        transform: translateY(0px);
    }

`;
const Container = styled.div`
  width: auto;
  height: auto;
  padding: 0.2rem;
  position: fixed;
  bottom: 5vh;
  right: 2vw;
  z-index: 999999999999;
  text-align: center;
  transition: all 1s;
  background: ${(props) => props.theme.bgSecondary};
  border-radius: 1rem;
  color: white;
  cursor: pointer;

  animation: ${animated} 2s linear infinite;

  display: ${(props) => (props.show ? "block" : "none")};
  svg {
    width: 30px;
    height: 30px;
  }
`;

const BackToTop = () => {
  const [show, setShow] = React.useState(false);
  React.useEffect(() => {
    window.addEventListener("scroll", () => {
      if (window.scrollY >= window.innerHeight - 200) {
        setShow(true);
      } else {
        setShow(false);
      }
    });
  }, []);
  const handleBackTop = () => {
    window.scrollTo({ behavior: "smooth", top: 0, left: 0 });
  };
  return (
    <Container show={show} onClick={handleBackTop}>
      <BsArrowUpCircleFill className=""></BsArrowUpCircleFill>
    </Container>
  );
};

export default BackToTop;
