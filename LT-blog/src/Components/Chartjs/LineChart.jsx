import React from "react";
import { Line } from "react-chartjs-2";
import { Chart } from "chart.js/auto";
import {
  Chart as ChartJS,
  LineElement,
  CategoryScale,
  LinearScale,
  PointElement,
} from "chart.js";
import styled from "@emotion/styled";

ChartJS.register(LineElement, CategoryScale, LinearScale, PointElement);
const Container = styled.div`
  height: 100%;
  width: 100%;
  flex: 1;
  canvas {
    height: 100% !important;

    width: 100% !important;
  }
`;
const LineChart = ({ chartData }) => {
  const options = {
    plugin: {
      legend: false,
    },
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        min: 500,
        tick: {
          callback: (value) => value + "V",
        },
      },
    },
  };
  return (
    <Container>
      <Line data={chartData} options={options}></Line>
    </Container>
  );
};

export default LineChart;
