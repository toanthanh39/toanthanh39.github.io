import React, { useState } from "react";
import styled, { css } from "styled-components";
import { useAuth } from "../../Context/Auth-context";
import useClickOutSide from "../../hook/useClickOutSide";
import { BiLogOut, BiUserCircle } from "react-icons/bi";
import { Link } from "react-router-dom";
import Bar from "../SmallTarget/Bar";

const Searching = styled.div`
  display: flex;
  width: auto;
  height: auto;
  gap: 12px;
  align-items: center;
  transition: all 1s;
  @media screen and (max-width: 1024px) {
    align-items: center;
    width: 0;
    visibility: hidden;
    position: absolute;
    right: 0;
    top: 60px;
    z-index: 10;
    padding-right: 1rem;
    height: auto !important;
    background-color: rgba(255, 255, 255, 0.9);
    ${(props) =>
      props.show === true &&
      css`
        visibility: visible;
        width: 300px;
        height: 100%;
      `}

    @keyframes show {
      from {
        width: 0;
      }
      to {
        width: 400px;
      }
    }
  }
`;

const SearchItem = styled.div`
  display: flex;
  gap: 4px;
  position: relative;
  align-items: center;
  justify-content: center;
  height: auto;
  @media screen and (max-width: 1024px) {
    display: flex;
    flex-direction: column;

    width: 100%;
    padding: 10px;
  }
`;

const ButtonLogin = styled.button`
  width: 120px;
  height: 40px;
  text-align: center;
  font-size: 18px;
  line-height: 27px;
  color: ${(props) => props.theme.primary};
  font-weight: 700;
  background: ${(props) => props.theme.bgPrimary};
  transition: 0.5s;
  :hover {
    background: linear-gradient(
      90deg,
      rgba(232, 24, 126, 1) 0%,
      rgba(155, 32, 232, 1) 99%
    );
  }
`;
const Input = styled.input`
  height: 100%;
  padding: 4px 25px 4px 8px;
  ::-webkit-input-placeholder {
    color: ${(props) => props.theme.secondary};
  }
  @media screen and (max-width: 1024px) {
    height: auto;
    width: 100%;

    :hover {
      width: 100%;
    }
  }
`;
const Profile = styled.div`
  position: relative;
  width: 70px;
  height: 40px;
  border-radius: 8px;
  background-color: ${(props) => props.theme.special};
  padding: 4px 8px;
  ul {
    position: absolute;
    right: 0;
    z-index: 30;
    background-color: rgba(255, 255, 255);
    transform: translateY(10px);
    padding: 10px;
    width: 150px;
    max-width: 200px;
    height: auto;
    border-radius: 8px;
    text-align: center;

    ::after {
      position: absolute;
      content: "";
      width: 10px;
      height: 10px;
      /* background-color: black; */
      border-top: 7px solid rgba(255, 255, 255);
      border-right: 7px solid rgba(255, 255, 255);
      border-left: 7px solid transparent;
      border-bottom: 7px solid transparent;
      top: 0;

      transform: rotate(-45deg) translateY(-50%);
      /* transform: rotate(-45deg) translate(2px, -50%); */

      right: 0;
    }
    li {
      text-align: center;
      padding: 4px;
      border-radius: 8px;
      cursor: pointer;
      display: flex;
      gap: 8px;
      justify-items: center;
      align-items: center;
      width: 100%;
      height: auto;
      margin: 2px;
      padding: 2px;
      transition: all 0.2s;
      :hover {
        color: ${(props) => props.theme.primary};
        background-color: red;
      }
      :nth-child(1) {
        color: ${(props) => props.theme.special};
      }
    }
  }
`;
const Search = () => {
  const [showMenu, setShowMenu] = useState(false);
  const { NodeRef, show } = useClickOutSide();
  const { userInfor } = useAuth();
  const { handleSignOut } = useAuth();
  function getFirstName(name) {
    const length = name.split(" ").length;
    return name.split(" ")[length - 1];
  }
  return (
    <>
      <Bar onClick={() => setShowMenu((show) => !showMenu)}></Bar>
      <Searching show={showMenu}>
        <SearchItem>
          <Input type="text" placeholder="Search" />
          <i className="fa-solid fa-magnifying-glass absolute lg:right-2 right-4 "></i>
        </SearchItem>

        {userInfor !== "" ? (
          <Profile ref={NodeRef}>
            <BiUserCircle className="w-full h-full text-white"></BiUserCircle>
            {show && (
              <ul>
                <li>{getFirstName(userInfor.displayName)}</li>
                <li>Profile</li>
                <li>Setting</li>
                <li onClick={handleSignOut}>
                  <BiLogOut></BiLogOut>
                  <p>Logout</p>
                </li>
              </ul>
            )}
          </Profile>
        ) : (
          <ButtonLogin>
            <Link to="/login">Login</Link>
          </ButtonLogin>
        )}
      </Searching>
    </>
  );
};

export default Search;
