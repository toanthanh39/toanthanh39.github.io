import React from "react";
import styled from "styled-components";
import { useAuth } from "../../Context/Auth-context";
import Page404 from "./../../Components/layout/Page404/Page404";
import ButtonCustom from "./../../Components/Button/ButtonCustom";
import Sidebar from "./Sidebar";
import { Link, Outlet } from "react-router-dom";

const Container = styled.div`
  width: 100%;
  height: auto;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  /* @media screen and (min-width: 1280px) {
    min-width: 100vw;
  } */
  header {
    position: relative;
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: space-between;
    padding: 0 10%;
    align-items: center;
    /* border-bottom: 1px solid ${(props) => props.theme.secondary}; */
    box-shadow: 0 2px 20px ${(props) => props.theme.secondary};
    text-align: center;
    .admin {
      width: 60px;
      height: 60px;
      border-radius: 100rem;
      background-color: #aaa;
      img {
        width: 100%;
        height: 100%;
        border-radius: inherit;
      }
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
      max-height: calc(98vh - 100px);

      background-color: rgba(0, 0, 0, 0.1);
      overflow-y: scroll;
      scroll-behavior: smooth;
    }
  }
`;
const DashboardLayout = () => {
  const { userInfor } = useAuth();
  const [role, setRole] = React.useState("user");
  React.useEffect(() => {
    if (userInfor) {
      setRole("admin");
    } else {
      setRole("user");
    }
  }, [userInfor]);

  if (role === "admin") {
    return (
      <Container>
        <header>
          <div className="admin">
            <img src="/image/imgdev.png" alt="admin" />
          </div>
          <ButtonCustom>
            <Link className="h-full w-full" to="/addpost">
              Add new post
            </Link>
          </ButtonCustom>
        </header>
        <div className="dashboard-main">
          <Sidebar></Sidebar>
          <div className="dashboard-main_content">
            <Outlet></Outlet>
          </div>
        </div>
      </Container>
    );
  }
  return <Page404></Page404>;
};

export default DashboardLayout;
