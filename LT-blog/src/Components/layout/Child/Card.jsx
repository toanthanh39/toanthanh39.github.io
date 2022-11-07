import React from "react";
import styled, { css } from "styled-components";
import { BsDot } from "react-icons/bs";
import { Link } from "react-router-dom";
const CardOuter = styled.div`
  position: relative;
  z-index: 1;
  cursor: pointer;
  width: ${(props) => props.width && props.width};
  height: ${(props) => props.height && props.height + "px"};
  background: linear-gradient(270deg, #6e33f1 0%, #e833cb 100%);
  ${(props) =>
    props.url &&
    css`
      background-image: url(${JSON.stringify(props.url)}) !important;
    `};

  border-radius: 10px;
  background-size: 100% auto !important;
  background-repeat: no-repeat !important;
  background-position: center;
  position: relative;
  padding: 1rem;
  font-family: "Montserrat";
  box-shadow: -10px 10px 10px rgba(0, 0, 0, 0.9);
  overflow: hidden;
  transition: all 0.5s linear !important;
  :hover {
    @media screen and (min-width: 1080px) {
      background-size: 110% auto !important;
    }
  }
  ::after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 2;
  }
  @media screen and (max-width: 768px) {
    width: 100%;
    height: 220px;
    background-size: cover;
  }
`;
const OuterContent = styled.div`
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 3;
`;
const ContentFirst = styled.div`
  display: flex;
  justify-content: space-between;
  svg {
    width: 32px;
    height: 32px;
  }
`;
const ContentSecond = styled.div`
  margin-top: 1rem;
  color: ${(props) => props.theme.primary};
  font-weight: 600;
  p {
    font-weight: 700;
  }
`;
const Card = ({ feature = {}, height = 222, width = "auto" }) => {
  const { title, image: imageUrl, type: cat, id, author } = feature;
  React.useEffect(() => {}, [feature]);
  return (
    <Link to={`/${id}`}>
      <CardOuter
        url={imageUrl === "A" ? "/image/room1.png" : imageUrl}
        height={height}
        width={width}
      >
        <OuterContent>
          <ContentFirst>
            <span className="rounded-lg bg-white p-1 ">{cat}</span>
            <span className="flex text-white">
              March 24 <BsDot></BsDot>
              {author}
            </span>
          </ContentFirst>
          <ContentSecond>
            <p>{title}</p>
          </ContentSecond>
        </OuterContent>
      </CardOuter>
    </Link>
  );
};

export default Card;
