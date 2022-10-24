import React from "react";
import styled from "styled-components";
import { Link } from "react-router-dom";
const NotFoundPage = styled.div`
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  margin-top: 10vh;
  align-items: center;
  min-height: 100vh;
  text-align: center;
  img {
    max-width: 30vw;
    max-height: 30vh;
  }
  a {
    padding: 10px;
    text-align: center;
    border-radius: 8px;
    color: ${(props) => props.theme.primary};
    background-color: ${(props) => props.theme.special};
    font-size: 16pt;
    font-weight: 700;
    transition: all 0.5s linear;
    margin-top: 2vh;
    :hover {
      transform: scale(1.2);
    }
  }
`;
const Page404 = () => {
  return (
    <NotFoundPage>
      <img src="/image/monkey 1.png" alt="MonkeyBLog" />
      <h1>Oops! Page not found !</h1>
      <Link to="/">Back to home</Link>
    </NotFoundPage>
  );
};

export default Page404;
