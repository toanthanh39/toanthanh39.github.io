import React from "react";
import { Bar } from "react-chartjs-2";
import { Chart } from "chart.js/auto";
import styled from "@emotion/styled";

const Container = styled.div`
  height: 100%;
  flex: 1;
  canvas {
    width: 100% !important;
    height: 100% !important;
  }
`;
const BarChart = ({ chartData }) => {
  return (
    <Container className="">
      <Bar data={chartData}></Bar>
    </Container>
  );
};

export default BarChart;
