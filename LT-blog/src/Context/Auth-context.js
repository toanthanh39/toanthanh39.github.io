import { createContext, useContext, useState } from "react";

const AuthContext = createContext();

function AuthProvider(props) {
  const { auth, setAuth } = useState({});
  const value = { auth, setAuth };

  return <AuthContext.Provider value={value} {...props}></AuthContext.Provider>;
}

function useAuth() {
  const context = useContext(AuthContext);
  if (typeof context === "undefined")
    throw new Error("useAuth must be used within inside AuthProvider");
  return context;
}

export { useAuth, AuthProvider };
