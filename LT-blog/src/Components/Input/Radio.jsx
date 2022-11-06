import React from "react";
import styled from "styled-components";
import { useController } from "react-hook-form";
import DropdownCustom from "./../Select/DropdownCustom";

const Container = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
  input {
    width: 20px;
    height: 20px;
    background-color: ${(props) => props.theme.secondary};
    color: #aaa;
  }
`;
const Radio = ({ name, label = "", control, ...props }) => {
  const { field } = useController({
    name: name,
    control,
  });
  return (
    <Container>
      <label>
        <input type="radio" name={name} {...field} {...props} />
        <span>{label}</span>
      </label>
    </Container>
  );
};

export default Radio;
