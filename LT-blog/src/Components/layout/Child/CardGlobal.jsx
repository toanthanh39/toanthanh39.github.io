import React from "react";
import { Link } from "react-router-dom";
import styled from "styled-components";

const CardOuter = styled.div`
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 210px;
  /* width: ${(props) => props.width}; */
  width: auto;
  height: ${(props) => props.height};
  background-color: black !important;
  padding: 5px;
  cursor: pointer;
  border-radius: 1rem;
  transition: all 0.5s;
  :hover {
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    transform: scale(1.03);
  }
  img {
    width: 100%;
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;

    height: ${(props) => props.height + "px"};
  }
  p {
    color: white;
    padding: 1em;
  }
  span {
    position: absolute;
    top: 0.5rem;
    left: 0.5rem;
    padding: 2px;
    border-radius: 0.5rem;
    background-color: ${(props) => props.theme.secondary};
  }
  h4 {
    padding: 0.2rem;
    border-radius: 0.5rem;
    /* position: relative; */
    margin-left: auto;
  }
`;
const CardGlobal = ({ data, h = "100%", w = "auto" }) => {
  let { title, imageUrl, cat, id, author } = data;

  return (
    <Link to={`/${id}`}>
      <CardOuter width={w} height={h}>
        <span>{cat}</span>
        <img src={imageUrl} alt="" />
        <p>{title}</p>
        <h4 className="gradient">{author}</h4>
      </CardOuter>
    </Link>
  );
};

export default CardGlobal;
