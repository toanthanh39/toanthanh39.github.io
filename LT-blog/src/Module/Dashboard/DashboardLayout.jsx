import React from "react";
import styled from "styled-components";
import { useAuth } from "../../Context/Auth-context";
import Page404 from "./../../Components/layout/Page404/Page404";
import ButtonCustom from "./../../Components/Button/ButtonCustom";
import Sidebar from "./Sidebar";
import { Outlet } from "react-router-dom";

const Container = styled.div`
  width: 100%;
  height: auto;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  header {
    width: 100%;
    height: 100px;
    /* border-bottom: 1px solid ${(props) => props.theme.secondary}; */
    box-shadow: 0 2px 20px ${(props) => props.theme.secondary};
    text-align: center;
    button {
      @media screen and (max-width: 1080px) {
        transform: translate(0, 50%);
      }
      float: right;
      transform: translate(-5vw, 70%);
    }
  }
  .dashboard-main {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    margin-top: 2vh;
    &_content {
      position: relative;
      z-index: 10;
      width: 100%;
      height: 100%;
      padding: 1rem;
      min-height: calc(98vh - 100px);
    }
  }
`;
const DashboardLayout = () => {
  const { userInfor } = useAuth();
  if (!userInfor) return <Page404></Page404>;
  return (
    <Container>
      <header>
        <ButtonCustom>Add New Post</ButtonCustom>
      </header>
      <div className="dashboard-main">
        <Sidebar></Sidebar>
        <div className="dashboard-main_content">
          <Outlet></Outlet>
        </div>
      </div>
    </Container>
  );
};

export default DashboardLayout;
