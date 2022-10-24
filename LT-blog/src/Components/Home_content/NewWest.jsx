import React from "react";
import styled from "styled-components";
import { BsDot } from "react-icons/bs";

const OuterContent1 = styled.div`
  display: flex;
  gap: 8px;
  @media screen and (max-width: 768px) {
    flex-direction: column;
  }
  article {
    border-radius: 15px;
    flex: 1;
    height: auto;
    min-height: 562px;
    max-height: 562px;

    img {
      max-height: 433px;
      width: 100%;
    }
    span {
      width: 90px;
      text-align: center;
      background-color: ${(props) => props.theme.secondary};
      padding: 4px;
      border-radius: 4px;
      color: ${(props) => props.theme.span};
    }
    strong {
      /* color: ${(props) => props.theme.secondary}; */
      font-weight: 600;
    }
    svg {
      fill: ${(props) => props.theme.secondary};
      font-size: 2rem;
    }
  }
`;
const Content2 = styled.article`
  position: relative;
  background: #f3edff;
  padding: 30px 19px;
  overflow-y: scroll;
  scroll-behavior: smooth;
  display: flex;
  flex-direction: column;

  ::-webkit-scrollbar {
    background-image: ${(props) => props.theme.bgPrimary};
  }
  ::-webkit-scrollbar-thumb {
    background-color: ${(props) => props.theme.secondary};
  }
  .card {
    height: 168px;
    align-items: center;
    display: flex;
    align-items: flex-start;
    :not(:last-child) {
      border-bottom: 1px solid #e0e0e0;
      margin-bottom: 28px;
    }
    padding: 10px 0;
    img {
      width: 181px;
      height: 130px;
      float: left;
    }
    .detail {
      position: relative;
      height: 100%;
      overflow: hidden;
      strong {
      }
    }
  }
`;
const NewWest = (props) => {
  return (
    <section>
      <header>Newest Update</header>
      <OuterContent1>
        <article>
          <img src="/image/room1.png" alt="setup phòng cực chất" />
          <span>Kiến thức</span>
          <h3>
            <strong>
              Hướng dẫn setup phòng cực chill dành cho người mới toàn tập
            </strong>
          </h3>
          <strong className="flex gradient">
            March 23 <BsDot></BsDot> Andiez Le
          </strong>
        </article>
        <Content2>
          {Array.from(new Array(20)).map((item, index) => (
            <div key={index} className="card">
              <img
                src="/image/rooms1.png"
                alt="Phòng cho  người mới toàn tập"
              />
              <div className="detail">
                <details>
                  <summary>
                    <span>Kiến thức</span>
                  </summary>
                  <h4>
                    Hướng dẫn setup phòng cực chill dành cho người mới toàn tập
                  </h4>
                </details>
                <strong className="gradient flex mt-auto">
                  March 23 <BsDot></BsDot> Andiez Le
                </strong>
              </div>
            </div>
          ))}
        </Content2>
      </OuterContent1>
    </section>
  );
};

export default NewWest;
