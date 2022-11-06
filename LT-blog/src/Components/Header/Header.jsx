import styled from "styled-components";
import MainMenu from "./MainMenu";
import Search from "./Search";
import * as React from "react";
const HeaderOuter = styled.header`
  position: relative;
  z-index: 9999;
  width: 100%;
  height: 60px;
  padding: 10px 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* background-color: rgba(0, 255, 255, 0.2); */
  background-color: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
  transition: all 0.2s ease-in;
  &.sticky_menu {
    position: sticky !important;
    z-index: 99999999999999999999;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.4);
  }
  @media screen and (max-width: 768px) {
    padding: 10px;
  }
  nav {
    color: ${(props) => props.theme.primary};
    @media screen and (max-width: 768px) {
      gap: 8px !important;
    }

    ul {
      @media screen and (max-width: 768px) {
        gap: 16px !important;
      }
    }
  }
`;

const Header = ({ className = "" }) => {
  const [sticky, setSticky] = React.useState(false);
  React.useEffect(() => {
    function stickyMenu() {
      if (window.scrollY > 50) {
        setSticky(true);
      } else {
        setSticky(false);
      }
    }
    window.addEventListener("scroll", stickyMenu);
  }, []);
  return (
    <HeaderOuter className={`${className} ${sticky ? "sticky_menu" : ""}  `}>
      <MainMenu></MainMenu>
      <Search></Search>
    </HeaderOuter>
  );
};

export default Header;
