import { Alert, Snackbar } from "@mui/material";
import React, { useEffect, useState } from "react";
import { useAuth } from "../../Context/Auth-context";

const SnackBarCustom = ({ children = "", severity = "error", index }) => {
  const { openError, setOpenError, message } = useAuth();
  const [open, setOpen] = useState(openError);

  const handleClose = (event, reason) => {
    if (reason === "clickaway") {
      return;
    }

    setOpen(false);
  };
  useEffect(() => {
    setOpen((open) => true);
  }, [openError]);
  console.log(open);
  return (
    <>
      <Snackbar
        open={open}
        autoHideDuration={2000}
        onClose={handleClose}
        sx={{
          marginBottom: index * 10,
        }}
      >
        <Alert onClose={handleClose} severity={severity} sx={{ width: "100%" }}>
          {children}
        </Alert>
      </Snackbar>
    </>
  );
};

export default SnackBarCustom;
