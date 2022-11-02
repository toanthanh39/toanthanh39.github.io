import React from "react";
import styled from "styled-components";

const Container = styled.div`
  label {
    display: flex;
    gap: 0.5rem;
    align-items: center;
    input {
      width: 2rem;
      border-radius: 50%;
      height: 2rem;
    }
  }
`;
const Checkbox = ({
  onClick,
  control,
  name = "",
  label = "",
  id = "",
  ...props
}) => {
  return (
    <Container>
      <label>
        <input type="checkbox" name={name} id={id} onClick={onClick} />
        <p>{label}</p>
      </label>
    </Container>
  );
};

export default Checkbox;
