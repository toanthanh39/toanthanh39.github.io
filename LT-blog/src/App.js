import "./App.css";
import React, { Suspense, lazy } from "react";

import { GlobalProvider } from "./Context/GlobalState";
import { Routes } from "react-router-dom";
import { Route } from "react-router-dom";

import "./index.scss";
import { AuthProvider } from "./Context/Auth-context";
import Home from "./Components/layout/Home";

// const FireBaseApp = lazy(() => import("./Firebase/FirebaseApp"));
function App() {
  return (
    <div>
      <AuthProvider>
        <Routes>
          <Route path="/" element={<Home />}></Route>
        </Routes>
      </AuthProvider>
    </div>
  );
}

export default App;
