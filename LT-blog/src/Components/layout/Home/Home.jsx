import React, { useState } from "react";
import styled, { css } from "styled-components";
import AnimatedPage from "../../../AnimatedPage";
import Header from "../../Header/Header";
import BlockBanner from "./BlockBanner";
import "swiper/css";

import NewWest from "../../Home_content/NewWest";
import Feature from "../../Home_content/Feature";
import Footer from "../Footer/Footer";
const HomeContainer = styled.div`
  background: ${(props) => props.theme.bgPrimary};
  width: 100%;
  min-height: 40vh;
  width: 100%;
  @media screen and (max-width: 567px) {
    min-height: 30vh;
  }
  @media screen and (min-width: 768px) and (max-width: 1480px) {
    min-height: 40vh;
  }
  position: relative;
`;
const ContentContainer = styled.div`
  position: relative;
  header {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 36px;
    padding: 4px 0;
    width: auto;
    height: 44px;
    color: #3a1097;
    position: relative;
    margin-bottom: 2rem;
    ::before {
      position: absolute;
      content: "";
      width: 35px;
      height: 3px;
      top: 0;
      left: 0;
      background: #00d1ed;
      border-radius: 1px;
    }
  }
`;

const Home = () => {
  return (
    <AnimatedPage className="w-full max-w-max ">
      <HomeContainer>
        <Header></Header>
        <BlockBanner></BlockBanner>
      </HomeContainer>
      <ContentContainer>
        <Feature title="Feature"></Feature>
        <NewWest></NewWest>
      </ContentContainer>
      <Footer></Footer>
    </AnimatedPage>
  );
};

export default Home;
