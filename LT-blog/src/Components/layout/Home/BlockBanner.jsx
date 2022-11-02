import React from "react";
import { Link } from "react-router-dom";
import styled from "styled-components";
import TypedBlink from "../../Typed/TypedBlink";
const Section = styled.div`
  width: 100%;
  height: 100%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  @media screen and (min-width: 1366px) {
    margin-top: 50px;
  }
  @media screen and (max-width: 768px) {
    padding: 0 20px;
    justify-content: flex-start;
    margin-top: 50px;
  }
`;

const Content = styled.div`
  padding: 10px;

  width: 50%;
  @media screen and (max-width: 768px) {
    width: 100%;
  }
`;
const ContentSecond = styled.div`
  width: 40%;
  height: 40%;
  @media screen and (max-width: 768px) {
    display: none;
  }
`;
const Heading = styled.h1`
  /* color: ${(props) => props.theme.primary}; */
  width: 100%;
  font-size: 48px !important;
  font-weight: 700;
  margin-bottom: 20px;
  font-family: sans-serif;
  @media screen and (max-width: 1024px) {
    font-size: 36px !important;
  }
`;
const TextContainer = styled.div``;
const Text = styled.p`
  max-height: 200px;
  overflow-y: hidden;
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 28px;
  color: ${(props) => props.theme.primary};
`;

const Button = styled.button`
  background-color: white;
  width: 180px;
  height: 50px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 16px 43px;
  gap: 10px;
  font-family: "Poppins";
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 27px;
  color: ${(props) => props.theme.special};
  margin-top: 20px;
  transition: 0.5s;
  :hover {
    background: ${(props) => props.theme.bgSecondary};
    color: white;
  }
`;
const BlockBanner = () => {
  return (
    <Section>
      <Content>
        <Heading className="gradient">LT BLOGGING</Heading>

        <TextContainer>
          <Text>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, dolore
            unde! Perspiciatis vel impedit voluptas repudiandae aliquam, rerum
            deserunt nesciunt cupiditate quisquam. Aperiam id nulla vitae
            doloribus, fugit animi modi. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Nihil cumque nesciunt beatae dolore quia quod
            dolorem quae quam, quidem quas rem libero optio mollitia blanditiis
            amet quibusdam ea magni ipsum. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Exercitationem id illum reiciendis
            modi. Debitis, molestiae dolores. Reprehenderit, consectetur!
            Dolorem praesentium, nam culpa ullam at iusto incidunt quibusdam id
            aut consectetur?
          </Text>
          <TypedBlink></TypedBlink>
        </TextContainer>
        <Link className="inline-block " to="/front">
          <Button>Get Started</Button>
        </Link>
      </Content>
      <ContentSecond>
        <img className="w-full h-full" src="/image/dev1.png" alt="" />
      </ContentSecond>
    </Section>
  );
};

export default BlockBanner;
