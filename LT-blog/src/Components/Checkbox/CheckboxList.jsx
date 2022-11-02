import React from "react";
import styled from "styled-components";

const Container = styled.div`
  h5 {
    margin-top: 1rem;
  }
  .body {
    display: flex;
    gap: 16px;
  }
`;
const CheckboxList = ({ name = "", children }) => {
  React.useEffect(() => {
    const Checkbox = document.getElementsByName(name);
    Checkbox.forEach((item) => {
      item.addEventListener("change", function () {
        if (this.checked === true) {
          Checkbox.forEach((item) => {
            item.checked = null;
          });
          this.checked = true;
          //   console.log(Checkbox);
        }
      });
    });
  });
  return (
    <Container>
      <h5>Status</h5>
      <div className="body">{children}</div>
    </Container>
  );
};

export default CheckboxList;
