import React from "react";
import { NavLink } from "react-router-dom";
import styled from "styled-components";
import { v4 as uuidv4 } from "uuid";
const ListMenu = [
  {
    id: uuidv4(),
    to: "/",
    title: "Home",
  },
  {
    id: uuidv4(),
    to: "/blog",
    title: "Blog",
  },
  {
    id: uuidv4(),
    to: "/contact",
    title: "Contact",
  },
];
const Li = styled.li`
  font-weight: 600;
`;
const MainMenu = () => {
  return (
    <nav className="flex w-full h-full items-center gap-7">
      <img className=" h-full" src="image/monkey 1.png" alt="" />
      <ul className="flex gap-6">
        {ListMenu.map((item) => (
          <Li key={item.id}>
            <NavLink
              to={item.to}
              className={({ isActive }) => (isActive ? "gradient" : "")}
            >
              {item.title}
            </NavLink>
          </Li>
        ))}
      </ul>
    </nav>
  );
};

export default MainMenu;
