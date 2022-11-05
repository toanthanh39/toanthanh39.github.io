import React from "react";
import styled from "styled-components";
import { useController } from "react-hook-form";

const Container = styled.div`
  height: 50px;
  background-color: ${(props) => props.theme.secondary};
  border-radius: 8px;
  select {
    width: 100%;
    height: 100%;
    background: transparent;
    padding: 0.2rem;
    option {
    }
  }
`;
const SelectCustom = ({ name = "", opt = [], control = null, ...props }) => {
  const { field } = useController({
    name: name,
    control,
  });
  return (
    <Container>
      <select name={name} id={name} {...field} {...props}>
        <option selected disabled>
          Select category
        </option>
        {opt.length > 0 &&
          opt.map((item, index) => (
            <option key={index} value={item.name}>
              {item.name}
            </option>
          ))}
      </select>
    </Container>
  );
};

export default SelectCustom;
