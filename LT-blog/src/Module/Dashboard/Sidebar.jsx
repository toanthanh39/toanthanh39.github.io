import React from "react";
import { Link, NavLink } from "react-router-dom";
import styled from "styled-components";
import { signOut } from "firebase/auth";
import { auth } from "../../Firebase/Firebase-config";
const SidebarsLink = [
  {
    id: 1,
    to: "/dashboard",
    title: "DashBoard",
    icon: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        className="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
        />
      </svg>
    ),
  },
  {
    id: 2,
    to: "/post",
    title: "Posts",
    icon: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        className="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
        />
      </svg>
    ),
  },
  {
    id: 3,
    to: "/category",
    title: "Category",
    icon: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        className="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
        />
      </svg>
    ),
  },
  {
    id: 4,
    to: "/user",
    title: "User",
    icon: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        className="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
        />
      </svg>
    ),
  },
  {
    id: 5,
    onClick: () => signOut(auth),

    title: "logout",
    icon: (
      <svg
        xmlns="http://www.w3.org/2000/svg"
        className="w-6 h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
        />
      </svg>
    ),
  },
];
const Container = styled.div`
  height: 100%;
  min-height: calc(98vh - 100px);
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
  width: 20vw;
  background-color: white;
  display: flex;
  flex-direction: column;
  /* justify-content: center; */
  align-items: center;
  @media screen and (max-width: 768px) {
    width: 0;
    position: absolute;
    z-index: 100;
    display: flex;
    align-items: center;
    display: none;
  }
  .title {
    display: flex;
    align-items: center;
    gap: 1rem;
    width: 100%;
    height: 60px;
    margin-bottom: 2vh;
    justify-content: center;
    margin-top: 3rem;
    padding: 1rem;
    h3 {
      color: ${(props) => props.theme.special};
      @media screen and (max-width: 10240px) {
        display: none;
      }
    }
    img {
      transition: all 0.5s;
      :hover {
        transform: scale(1.1);
      }
      @media screen and (max-width: 768px) {
        display: none;
      }
      width: 40px;
      height: 50px;
    }
  }
  a {
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem;
    text-align: left;
    gap: 1rem;
    transition: all 0.2s;
    letter-spacing: 2pt;
    line-height: 10pt;
    padding-left: 2rem;
    &.active {
      background-color: ${(props) => props.theme.special};
      color: white;
    }
    :not(:first-child) {
      :hover {
        background-color: ${(props) => props.theme.special};
        color: white;
      }
    }
    @media screen and (max-width: 820px) {
      justify-content: center;
    }
    .title_link {
      @media screen and (max-width: 820px) {
        display: none;
      }
    }
  }
  .menu_item {
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem;
    text-align: left;
    gap: 1rem;
    transition: all 0.2s;
    letter-spacing: 2pt;
    line-height: 10pt;
    padding-left: 2rem;
    @media screen and (max-width: 768px) {
      display: none;
    }
    :hover {
      background-color: ${(props) => props.theme.special};
      color: white;
    }
  }
`;
const Sidebar = () => {
  // const navigate = Navigate();
  return (
    <Container>
      <div className="title">
        <Link to="/">
          <img src="/image/monkey 1.png" alt="" />
        </Link>
        <h3>LT DASHBOARD</h3>
      </div>

      {SidebarsLink.map((link) => {
        if (link.onClick) {
          return (
            <div key={link.id} className="menu_item" onClick={link.onClick}>
              <span>{link.icon}</span>
              <span className="title_link">{link.title}</span>
            </div>
          );
        } else {
          return (
            <NavLink
              key={link.id}
              to={link.to}
              className={({ isActive }) => (isActive ? "active" : "")}
            >
              <span>{link.icon}</span>
              <span className="title_link">{link.title}</span>
            </NavLink>
          );
        }
      })}
    </Container>
  );
};

export default Sidebar;
