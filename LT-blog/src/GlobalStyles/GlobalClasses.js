import { css } from "styled-components";
export const GlobalClasses = css`
  body {
    h1,
    h2,
    h3,
    h4,
    p,
    span,
    li,
    button {
      font-family: "Montserrat", sans-serif;
      font-weight: 500;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-weight: 700;
    }
  }

  svg,
  button,
  span,
  i {
    cursor: pointer;
  }

  button {
    border-radius: 4px;
    padding: 4px 8px;
  }
  input {
    border-radius: 0.4rem;
    padding: 0 10px;
    border: 1px solid #00b4aa;
  }
  button.gradient {
    background: linear-gradient(155deg, #00b4aa 6.67%, #a4d96c 84.1%);
    color: white;
    box-shadow: 0 0 10px #00b4aa;
    transition: 0.6s;
    padding: 4px 8px;
    :hover {
      transform: scale(1.1);
    }
  }
  section {
    width: 100%;
    height: auto;
    position: relative;
    padding: 5vh;
    background-color: ${(props) => props.theme.primary};
    @media screen and (max-width: 768px) {
      padding: 2vh;
    }
  }
`;
