import { createGlobalStyle } from "styled-components";
import { GlobalClasses } from "./GlobalClasses";

export const GlobalStyles = createGlobalStyle`
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,500&display=swap');
        ${GlobalClasses}

        
`;
