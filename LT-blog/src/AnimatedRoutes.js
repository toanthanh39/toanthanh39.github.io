import React from "react";
import { Suspense } from "react";
import ScollTop from "./Action/ScollTop";
import { AnimatePresence } from "framer-motion";
import { Route, Routes, useLocation } from "react-router-dom";
// import UserManger from "./Module/Users/UserManger";
import BackdropCustom from "./Components/Backdrop/BackdropCustom";

const CategoryManager = React.lazy(() =>
  import("./Module/Category/CategoryManager")
);

const UserManager = React.lazy(() => import("./Module/Users/UserManger"));

const DashboardLayout = React.lazy(() =>
  import("./Module/Dashboard/DashboardLayout")
);
const DashboardPage = React.lazy(() =>
  import("./Module/Dashboard/DashboardPage")
);
const PostManager = React.lazy(() => import("./Module/Post/PostManager"));
const AddPost = React.lazy(() => import("./Module/Post/AddPost"));

const Detail = React.lazy(() =>
  import("./Components/layout/DetailPage/Detail")
);
const Home = React.lazy(() => import("./Components/layout/Home/Home"));
const Frontpage = React.lazy(() =>
  import("./Components/layout/Home/Frontpage")
);
const Login = React.lazy(() => import("./Components/layout/Auth/Login"));
const Blog = React.lazy(() => import("./Components/layout/Blog/Blog"));
const Contact = React.lazy(() => import("./Components/layout/Contact/Contact"));
const Page404 = React.lazy(() => import("./Components/layout/Page404/Page404"));
const AnimatedRoutes = () => {
  const location = useLocation();
  return (
    <Suspense fallback={<BackdropCustom></BackdropCustom>}>
      <ScollTop>
        <AnimatePresence exitBeforeEnter>
          <Routes location={location} key={location.pathname}>
            <Route path="/" element={<Home />}>
              <Route path="front" element={<Frontpage />}></Route>
            </Route>
            <Route path="/blog" element={<Blog />}></Route>
            <Route path="/contact" element={<Contact />}></Route>
            <Route path="/login" element={<Login />}></Route>
            <Route path="/:slug" element={<Detail />}></Route>
            <Route element={<DashboardLayout />}>
              <Route
                index
                path="/dashboard"
                element={<DashboardPage />}
              ></Route>
              <Route path="/post" element={<PostManager />}></Route>
              <Route path="/addpost" element={<AddPost />}></Route>

              <Route path="/user" element={<UserManager />}></Route>

              <Route path="/category" element={<CategoryManager />}></Route>
              <Route></Route>
            </Route>
            <Route path="*" element={<Page404 />}></Route>
          </Routes>
        </AnimatePresence>
      </ScollTop>
    </Suspense>
  );
};

export default AnimatedRoutes;
