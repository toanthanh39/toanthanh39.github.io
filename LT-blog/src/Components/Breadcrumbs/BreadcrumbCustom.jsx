import { Box, Breadcrumbs, Typography } from "@mui/material";
import React from "react";
import NavigateNextIcon from "@mui/icons-material/NavigateNext";
import useBreadcrumbs from "use-react-router-breadcrumbs";

import { Link, NavLink, useLocation } from "react-router-dom";
const routes = [
  {
    path: "/Blog",
    breadcrumb: "Blog",
  },
];
const BreadcrumbCustom = () => {
  const breadcrumbs = useBreadcrumbs(routes);

  const location = useLocation();
  return (
    <Box m={10}>
      <Breadcrumbs
        aria-label="breadcrumb"
        separator={
          <NavigateNextIcon fontSize="small" color="primary"></NavigateNextIcon>
        }
        maxItems={3}
        itemsAfterCollapse={2}
      >
        {breadcrumbs.map(({ breadcrumb, match }, index) => (
          <NavLink
            className="text-white"
            onClick={() => console.log("ok")}
            to={match.pathname}
            key={index}
          >
            <Typography
              color={`${
                match.pathname === location.pathname ? "red" : " #aaa"
              }`}
            >
              {breadcrumb}
            </Typography>
          </NavLink>
        ))}
      </Breadcrumbs>
    </Box>
  );
};

export default BreadcrumbCustom;
