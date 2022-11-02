// @ts-nocheck
import React from "react";
import styled from "styled-components";
import {
  BsArrowUpCircleFill,
  BsArrowDownCircleFill,
  BsFacebook,
} from "react-icons/bs";
import { FcGoogle, FcStart } from "react-icons/fc";
import "./Blog.scss";
import BreadcrumbCustom from "./../../Breadcrumbs/BreadcrumbCustom";
import Card from "./../Child/Card";
import Masonry from "react-masonry-css";
import Back from "../../SmallTarget/Back";
import withFetchData from "./../../../withFetchData";
import { dbapi } from "./../../../config";
import SkeletonCustom from "../../Skeleton/SkeletonCustom";
import CardGlobal from "../Child/CardGlobal";
import AnimatedPage from "../../../AnimatedPage";
import Footer from "./../Footer/Footer";

const OuterBlog = styled.div`
  position: relative;
  width: 100%;
  height: auto;
`;
const Nav = styled.nav`
  position: absolute;
  top: 0;
  left: 0;
  height: auto;
  z-index: 9999999999;
  width: 100%;

  .menu {
    position: relative;
    z-index: 9999999999;

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      @media screen and (max-width: 768px) {
        display: none;
      }
      img {
        width: 50px;
        height: 60px;
      }
    }
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    background-color: rgb(18, 20, 45, 0.9);
    /* background-color: rgba(255, 0, 0, 0.1); */
    min-height: 500px;
    transform: translate(0, -90%);
    transition: all 1s;
    @media screen and (max-width: 768px) {
      min-height: 250px;
    }
    #direction {
      z-index: 10;
      position: absolute;
      bottom: 0.2rem;
      left: 50%;
      fill: white;
      font-size: 20pt;
      transform: translateX(-50%);

      svg {
        transition: 1s;
        animation-delay: 0.5s;
        fill: ${(props) => props.theme.special};
      }
    }
  }
`;
const Ul = styled.ul`
  position: absolute;
  height: 100%;
  width: 100%;
  padding: 5vh 15% 0 15%;
  @media screen and (max-width: 768px) {
    padding: 2vh 2% 0 5%;
  }
  /* background-color: black; */
  list-style: none;
  li {
    opacity: 0;
    color: ${(props) => props.theme.primary};
  }
`;
const Li = styled.li`
  float: left;
  ul {
    li {
      margin: 1rem 0;
      cursor: pointer;
      text-align: center;
      :hover {
        color: cyan;
      }
      :nth-child(1) {
        color: cyan;
        font-weight: 600;
        font-size: 1.2rem;
        @media screen and (max-width: 768px) {
          font-size: 1rem;
        }
      }
    }
  }
`;

const Blog = ({ value }) => {
  const [infor, setInfor] = React.useState([]);
  const breakpointColumnsObj = {
    default: 4,
    1280: 3,
    768: 2,
    500: 1,
  };
  const heights = [
    250, 300, 390, 270, 110, 350, 430, 310, 250, 290, 190, 150, 430, 350, 380,
  ];
  React.useEffect(() => {
    const Nav = document.getElementById("nav");
    const Dir = document.getElementById("direction");
    Dir.addEventListener("click", () => {
      Nav.classList.toggle("active");
    });
  }, []);

  return (
    <AnimatedPage>
      <OuterBlog>
        <Nav id="nav" className="">
          <div className="menu">
            <div className="logo">
              <img src="/image/monkey 1.png" alt="monkey blog" />
            </div>
            <Ul>
              <Li id="feature">
                <ul>
                  <li>kiến thức lập trình</li>
                  <li>kiến thức lập trình</li>
                  <li>kiến thức lập trình</li>
                  <li>kiến thức lập trình</li>
                </ul>
              </Li>
              <Li id="newest">
                <ul>
                  <li>Setup khu vực học tập </li>
                  <li>Setup khu vực học tập </li>
                  <li>Setup khu vực học tập </li>
                  <li>Setup khu vực học tập </li>
                </ul>
              </Li>
              <Li id="other">
                <ul>
                  <li>
                    <BsFacebook></BsFacebook>
                  </li>
                  <li>
                    <FcGoogle></FcGoogle>
                  </li>
                  <li>
                    <FcStart></FcStart>
                  </li>
                </ul>
              </Li>
            </Ul>
            <div id="direction">
              <BsArrowDownCircleFill></BsArrowDownCircleFill>
            </div>
          </div>
        </Nav>
        <div className="w-full h-auto  bg-black relative z-[5] p-5 ">
          <div className="h-[100px] w-full">
            <Back className="relative  w-auto pt-5 pl-5"></Back>
          </div>
          <div className="w-full relative z-10 h-auto flex justify-center ">
            <Masonry
              breakpointCols={breakpointColumnsObj}
              className="my-masonry-grid"
              columnClassName="my-masonry-grid_column"
            >
              {infor.length > 0
                ? infor.map((item, index) => (
                    <CardGlobal
                      key={index}
                      data={item}
                      h={heights[index]}
                    ></CardGlobal>
                  ))
                : heights.map((item, index) => (
                    <SkeletonCustom
                      key={index}
                      h={`${item}px`}
                    ></SkeletonCustom>
                  ))}
            </Masonry>
          </div>
        </div>
      </OuterBlog>
      <Footer></Footer>
    </AnimatedPage>
  );
};

export default withFetchData(Blog);
