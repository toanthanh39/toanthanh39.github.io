import React, { useState } from "react";
import MainMenu from "./../../Header/MainMenu";
import Search from "./../../Header/Search";
import AnimatedPage from "./../../../AnimatedPage";
import styled from "styled-components";
import { BsDot } from "react-icons/bs";
import Feature from "../../Home_content/Feature";
import Card from "./../Child/Card";
import axios from "axios";
import { useParams } from "react-router-dom";
import Page404 from "./../Page404/Page404";
import Footer from "../Footer/Footer";
import BackdropCustom from "./../../Backdrop/BackdropCustom";

const Container = styled.div`
  position: relative;
  height: 100%;
  width: 100%;
  .introduce {
    display: flex;
    gap: 2rem;
    flex-direction: row;
    @media screen and (max-width: 567px) {
      flex-direction: column;
    }
    img {
      width: 100%;
      height: 100%;

      max-width: 50%;
      @media screen and (max-width: 678px) {
        max-width: 100%;
      }
      @media screen and (min-width: 1080) {
        max-width: 50%;
      }
    }
    ._title {
      @media screen and (min-width: 1080px) {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      padding: 0 1rem;
      h1 {
        color: ${(props) => props.theme.special};
      }
    }
  }
  .content {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    width: 55%;
    height: 100%;
    text-align: left;
    padding: 1rem;
    @media screen and (max-width: 768px) {
      width: 100%;
      margin-top: 1rem;
    }
    p {
      line-height: 2rem;
      word-break: break-word;
    }
    img {
      border-radius: 1rem;
      margin: 1rem 0;
      width: 100%;
      height: 100%;
      max-width: 700px;
      max-height: 499px;
    }
  }
`;
const Detail = () => {
  const { slug } = useParams();
  const [item, setItem] = useState("");
  const [loading, setLoangding] = useState(false);
  console.log("🚀 ~ file: Detail.jsx ~ line 70 ~ Detail ~ item", item);
  React.useEffect(() => {
    const getItem = async () => {
      setLoangding(true);
      try {
        const response = await axios.get(
          `http://localhost:3002/feature?id=${slug}`
        );
        if (response.data) {
          setItem(response.data);
          setLoangding(false);
        }
      } catch (error) {
        console.log("🚀 ~ file: Detail.jsx ~ line 51 ~ getItem ~ error", error);
      }
    };
    getItem();
  }, [slug]);
  if (item.length > 0) {
    var [{ cat, title, content, imageUrl, author }] = item;
  }
  if (item.length === 0) return <Page404></Page404>;
  return (
    <AnimatedPage className="w-full h-full relative">
      {loading ? (
        <BackdropCustom></BackdropCustom>
      ) : (
        <>
          <div className="flex justify-between  p-7 items-center h-[100px]">
            <MainMenu></MainMenu>
            <Search></Search>
          </div>
          <Container>
            <div className="introduce">
              <img src="/image/room1.png" alt="" />
              <div className="_title">
                <div>
                  <span>{cat}</span>
                  <h1>{title}</h1>
                  <span className="flex items-center">
                    Mar 23 <BsDot></BsDot> {author}
                  </span>
                </div>
              </div>
            </div>
            <article className="content">
              <h2>Title</h2>
              <p>{content}</p>
              <img src={imageUrl} alt="" />
            </article>

            <div className="w-full h-auto relative">
              <Feature title="Bài viết liên quan"></Feature>
            </div>
          </Container>
          <Footer></Footer>
        </>
      )}
    </AnimatedPage>
  );
};

export default Detail;
