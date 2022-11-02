import React from "react";
import styled, { keyframes } from "styled-components";
import LineChart from "../../Components/Chartjs/LineChart";
import BarChart from "./../../Components/Chartjs/BarChart";

const data = [
  { id: 2, title: "blog", watch: 1029 },
  { id: 3, title: "study", watch: 3029 },
  { id: 4, title: "math", watch: 5029 },
  { id: 5, title: "notice", watch: 7029 },
  { id: 6, title: "embed", watch: 2029 },
  { id: 7, title: "seo", watch: 1529 },
  { id: 8, title: "it", watch: 9029 },
  { id: 9, title: "showbiz", watch: 4029 },
  { id: 10, title: "infor", watch: 2029 },
  { id: 11, title: "gaming", watch: 2629 },
  { id: 12, title: "other", watch: 1829 },
];
const text = keyframes`
  from{
    background-position: 500% 200%;
  } 
  to{
  background-position:100% 500%;
  }
`;
const Container = styled.div`
  width: 100%;
  height: 100%;
  h1 {
    margin-bottom: 2rem;
  }
`;
const Content = styled.div`
  display: flex;
  flex-direction: column;
  gap: 1rem;
  .total {
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    @media screen and (max-width: 1080px) {
      flex-direction: column;
      gap: 1rem;
      align-items: center;
    }
    .box {
      width: 100%;
      height: auto;
      position: relative;
      width: 300px;
      height: 150px;
      border-radius: 8px;
      border-top-left-radius: 14%;
      background: rgb(27, 25, 25);
      cursor: pointer;
      background: linear-gradient(
        59deg,
        rgba(27, 25, 25, 1) 14%,
        rgba(74, 72, 72, 0.8970938717283788) 100%
      );
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      @media screen and (max-width: 768px) {
        width: 90%;
        height: 250px;
      }

      .circle {
        width: 50px;
        height: 50px;
        border-radius: 100rem;
        background-color: rgba(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
        p {
          font-size: 10pt;
          font-weight: 600;
        }
      }
      .title {
        position: absolute;
        right: 10%;
        top: 5%;
        font-weight: 500;
        color: whitesmoke;
      }
      .value {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 10pt;
        strong {
          font-family: cursive;
          font-size: 3em;
          animation: ${text} 20s linear infinite;
        }
      }
    }
  }
  .chart {
    width: 100%;
    display: flex;
    gap: 1rem;
    @media screen and (max-width: 1280px) {
      flex-direction: column;
    }
  }
`;
const DashboardPage = () => {
  const [blogData, setBlogData] = React.useState({
    labels: data.map((item) => item.title),
    datasets: [
      {
        label: "View",
        data: data.map((item) => item.watch),
        backgroundColor: [
          "#e8187e",
          "#24e42f",
          "#cd18e8",
          "#2075e8",
          "#e87c18",
          "#9b20e8",
          "",
          "#d7d5d2",
          "#cfe726",
          "#26e7db",
          "#fd1d1d",
        ],
        tension: 0.7,
        borderColor: "",

        pointBorderColor: "transparent",
      },
    ],
  });
  const total = data.reduce((value, index) => {
    return (value += index.watch);
  }, 0);
  console.log("🚀 ~ file: DashboardPage.jsx ~ line 125 ~ total ~ total", total);
  return (
    <Container>
      <h1>Dashboard Page</h1>
      <Content className="content">
        <div className="total">
          <div className="box">
            <div className="circle">
              <p>Blog</p>
            </div>
            <div className="title">Total blog on page</div>
            <div className="value">
              <strong className="gradient">{total}</strong>
            </div>
          </div>
          <div className="box">
            <div className="circle">
              <p>View</p>
            </div>
            <div className="title">Total viewer on page</div>
            <div className="value">
              <strong className="gradient">1.954.213</strong>
            </div>
          </div>
          <div className="box">
            <div className="circle">
              <p>Blog</p>
            </div>
            <div className="title">Total blog on page</div>
            <div className="value">
              <strong className="gradient">{total}</strong>
            </div>
          </div>
        </div>
        <div className="chart">
          <BarChart chartData={blogData}></BarChart>
          <LineChart chartData={blogData}></LineChart>
        </div>
        <div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum
            soluta tempore consequatur totam neque dolorum. Doloremque quod,
            nulla tempora dolor accusamus aliquam necessitatibus at, quia est
            sunt atque expedita quasi.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum
            soluta tempore consequatur totam neque dolorum. Doloremque quod,
            nulla tempora dolor accusamus aliquam necessitatibus at, quia est
            sunt atque expedita quasi.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum
            soluta tempore consequatur totam neque dolorum. Doloremque quod,
            nulla tempora dolor accusamus aliquam necessitatibus at, quia est
            sunt atque expedita quasi.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum
            soluta tempore consequatur totam neque dolorum. Doloremque quod,
            nulla tempora dolor accusamus aliquam necessitatibus at, quia est
            sunt atque expedita quasi.
          </p>
        </div>
      </Content>
    </Container>
  );
};

export default DashboardPage;
