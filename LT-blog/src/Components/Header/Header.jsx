import styled from "styled-components";
import MainMenu from "./MainMenu";
import Search from "./Search";
const HeaderOuter = styled.header`
  position: relative;
  width: 100%;
  height: 60px;
  padding: 10px 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* background-color: rgba(0, 255, 255, 0.2); */
  background-color: rgba(255, 255, 255, 0.2);
  box-shadow: 0 0px 5px rgba(0, 255, 255, 0.8);
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

const Header = ({ className }) => {
  return (
    <HeaderOuter className={className}>
      <MainMenu></MainMenu>
      <Search></Search>
    </HeaderOuter>
  );
};

export default Header;
