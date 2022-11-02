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
        height: "100vh",
        position: "fixed",
        alignItems: "center",
        backgroundColor: "rgba(20,245,7,0.7)",
        zIndex: (theme) => theme.zIndex.drawer + 1,
      }}
      open={open}
    >
      <CircularProgress color="primary" />
    </Backdrop>
  );
};

export default BackdropCustom;
