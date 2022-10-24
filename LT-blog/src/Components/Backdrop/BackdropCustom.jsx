import { Backdrop, CircularProgress } from "@mui/material";
import React from "react";

const BackdropCustom = ({ open = true }) => {
  return (
    <Backdrop
      sx={{
        color: "#fff",
        display: "flex",
        justifyContent: "center",
        width: "100%",
        height: "100%",
        position: "fixed",
        alignItems: "center",
        zIndex: (theme) => theme.zIndex.drawer + 1,
      }}
      open={open}
    >
      <CircularProgress color="secondary" />
    </Backdrop>
  );
};

export default BackdropCustom;
