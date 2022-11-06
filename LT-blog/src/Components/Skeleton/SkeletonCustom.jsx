import { Box, Skeleton } from "@mui/material";
import React from "react";

const SkeletonCustom = ({ w = "100%", h = "100%" }) => {
  return (
    <Box sx={{ overflow: "hidden", width: "auto", height: h }}>
      <Skeleton width="100%" height="100%" animation="wave"></Skeleton>
    </Box>
  );
};

export default SkeletonCustom;
