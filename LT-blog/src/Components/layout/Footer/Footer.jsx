import React from "react";
import { BsFacebook } from "react-icons/bs";
import { FaRegNewspaper } from "react-icons/fa";
import { TfiYoutube } from "react-icons/tfi";

import styled from "styled-components";
import Field from "./../../Input/Field";

const Container = styled.footer`
  width: 100%;
  height: auto;
  min-height: 100px;
  color: ${(props) => props.theme.primary};
  background: ${(props) => props.theme.bgPrimary};
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
  gap: 2rem;
  padding: 2rem;
  .footer_child {
    display: flex;
    min-width: 20vw;
    flex-direction: column;
    align-items: center;
    h3 {
      font-weight: 600;
      margin-bottom: 1rem;
      color: ${(props) => props.theme.heading};
    }
    li {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 0.5em;
    }
    img {
      width: 60px;
      height: 80px;
    }
  }
`;
const Footer = () => {
  return (
    <Container>
      <div className="footer_child">
        <h3>Category</h3>
        <li>Kiến thức</li>
        <li>Phong cách</li>
        <li>Tinh Thần</li>
        <li>Phong cách</li>
      </div>
      <div className="footer_child">
        <h3>Connect</h3>
        <li>
          <FaRegNewspaper></FaRegNewspaper> Thanh Nien Magazine
        </li>
        <li>
          <TfiYoutube></TfiYoutube> Youtube
        </li>
        <li>
          <BsFacebook></BsFacebook> Facebook
        </li>
      </div>
      <div className="footer_child">
        <h3>technologies used</h3>
        <li>ReactJs</li>
        <li>Tailwindcss , styled-component</li>
        <li>json-server</li>
        <li>Material UI</li>
      </div>
      <div className="footer_child">
        <input type="text" />
        {/* <img src="/image/monkey 1.png" alt="" /> */}
      </div>
    </Container>
  );
};

export default Footer;
