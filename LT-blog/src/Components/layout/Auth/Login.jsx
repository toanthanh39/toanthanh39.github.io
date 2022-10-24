import React, { useEffect, useEffectLayout, useState } from "react";
import styled from "styled-components";
import Field from "../../Input/Field";
import { useForm } from "react-hook-form";
import Back from "../../SmallTarget/Back";
import AnimatedPage from "../../../AnimatedPage";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";
import { BiErrorCircle } from "react-icons/bi";
import { FaFacebook } from "react-icons/fa";
import { AiFillCloseCircle } from "react-icons/ai";

import { useAuth } from "../../../Context/Auth-context";
import {
  onAuthStateChanged,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,
  updateProfile,
} from "firebase/auth";
import { auth } from "../../../Firebase/Firebase-config";
import BackdropCustom from "../../Backdrop/BackdropCustom";
import { useNavigate } from "react-router-dom";
import ButtonCustom from "../../Button/ButtonCustom";
import { toast } from "react-toastify";
import { async } from "@firebase/util";
import Register from "./Register";

const LoginContainer = styled.div`
  width: 100%;
  height: auto;
  min-height: 100vh;
  position: relative;
  @media screen and (min-width: 1280px) {
    overflow: hidden;
  }
`;

const OuterForm = styled.div`
  z-index: 10;
  position: absolute;
  top: 50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100%;
  max-width: 800px;
  @media (min-width: 325px) {
    max-width: 90%;
  }
  @media (min-width: 1080px) {
    max-width: 800px;
  }
`;

const Label = styled.label`
  display: block;
  font-weight: 600;
`;
const Shape = styled.div`
  position: absolute;
  z-index: 9;
  top: ${(props) => props.top};
  right: ${(props) => props.right};
  width: ${(props) => props.width};
  height: ${(props) => props.height};
  background: linear-gradient(
    90deg,
    rgba(232, 24, 126, 1) 0%,
    rgba(155, 32, 232, 1) 99%
  );
  /* border-radius: 50% 30% 20% 70%/ 60% 55%; */
  border-radius: 50%;
  box-shadow: 0 0 20px ${(props) => props.theme.special}; ;
`;

const ButtonContainer = styled.div`
  width: 100%;
  margin-top: 20px;
  display: flex;
  gap: 20px;
  justify-content: center;
  @media screen and (max-width: 768px) {
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
  }
`;

const schema = yup.object({
  password: yup
    .string()
    .required("Password is a require field")
    .min(6, "Min 8 characters")
    .max(20, "Max 20 characters"),
  email: yup
    .string()
    .required("Email is a require field")
    .email("Please enter valid email"),
  // userRegister: yup
  //   .string()
  //   .required("Email is a require field")
  //   .email("Please enter valid email"),
  // emailRegister: yup
  //   .string()
  //   .required("Email is a require field")
  //   .email("Please enter valid email"),
  // passwordRegister: yup
  //   .string()
  //   .required("Email is a require field")
  //   .email("Please enter valid email"),
});

const Login = () => {
  const {
    userInfor,
    setUserInfor,
    setOpenError,
    setMessage,
    ChangeMessageError,
  } = useAuth();
  const [register, setRegister] = useState(false);
  const navigate = useNavigate();
  const handleShowRegiter = () => {
    setRegister((register) => !register);
  };
  const {
    control,
    handleSubmit,
    formState: { errors, isValid, isSubmitting },
    watch,
    reset,
    unregister,
    isSubmitSuccessful,
    setFocus,
  } = useForm({
    resolver: yupResolver(schema),
    mode: "all",
  });
  const handleSignIn = async (data) => {
    if (!isValid) return;
    return new Promise(async (resolve) => {
      try {
        const cred = await signInWithEmailAndPassword(
          auth,
          data.email,
          data.password
        );
        if (cred) {
          setUserInfor(cred);
          toast("Login succsess", {
            pauseOnHover: false,
          });
          reset({
            email: "",
            password: "",
            user: "",
          });

          // setTimeout(() => {
          //   resolve();
          //   toast.success("Login success !", {
          //     position: "top-right",
          //     autoClose: 2000,
          //     hideProgressBar: false,
          //     closeOnClick: true,
          //     pauseOnHover: false,
          //     draggable: true,
          //     progress: undefined,
          //     theme: "light",
          //   });
          //   navigate("/");
          //   reset({
          //     email: "",
          //     password: "",
          //     user: "",
          //   });
          // }, 2000);
        }
      } catch (error) {
        toast.error("Email or password not correct", {
          position: "top-right",
          autoClose: 3000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: false,
          draggable: true,
          progress: undefined,
          delay: 1000,
          theme: "light",
        });
      }
      resolve();
    });
  };

  useEffect(() => {
    const arrError = Object.values(errors);
    if (arrError.length > 0) {
      arrError.forEach((error) =>
        toast.error(error.message, {
          position: "top-right",
          autoClose: 3000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: false,
          draggable: true,
          progress: undefined,
          theme: "light",
        })
      );
    }
  }, [errors]);
  useEffect(() => {
    document.title = "Login Page";
    setTimeout(() => {
      if (userInfor !== "") {
        navigate("/");
      }
    }, 1000);
  }, [userInfor]);
  useEffect(() => {
    setFocus("user");
    return () => {
      setRegister(false);
    };
  }, []);
  return (
    <AnimatedPage>
      <LoginContainer>
        {register && <Register toggle={handleShowRegiter}></Register>}
        <Shape top="-10%" right="-5%" width="300px" height="300px"></Shape>
        <Shape top="60%" right="70%" width="500px" height="500px"></Shape>
        {isSubmitting && <BackdropCustom></BackdropCustom>}
        <OuterForm>
          <Back></Back>
          <div className="Header_login mb-[20px] flex flex-col items-center relative z-10 ">
            <img
              className="w-[100px] h-[132px"
              src="/image/monkey 1.png"
              alt=""
            />
            <h1 className="text-green-400  ">LT Blogging</h1>
          </div>
          <form
            onSubmit={handleSubmit(handleSignIn)}
            className="w-full flex flex-col items-center relative z-10 "
          >
            <div className=" w-full  gap-2  mb-5">
              <Label className="block" htmlFor="email">
                Email <span className="text-red-500">*</span>
              </Label>
              <Field
                type="email"
                name="email"
                placeholder="Your email"
                control={control}
              ></Field>
              {errors?.email && (
                <p className="text-red-500 font-semibold absolute right-5 translate-y-2 flex gap-1 items-center">
                  <BiErrorCircle></BiErrorCircle> {errors.email.message}
                </p>
              )}
            </div>

            <div className="w-full  gap-2  mb-5">
              <Label className="block" htmlFor="password">
                Password <span className="text-red-500">*</span>
              </Label>
              <Field
                name="password"
                type="password"
                hasIcon={true}
                control={control}
              ></Field>
              {errors?.password && (
                <p className="text-red-500 font-semibold absolute right-5 translate-y-2 flex gap-1 items-center">
                  <BiErrorCircle></BiErrorCircle> {errors.password.message}
                </p>
              )}
            </div>

            <ButtonContainer>
              <ButtonCustom
                type="submit"
                className="gradient mr-5  lg:w-auto sm:w-full "
              >
                Sign In
              </ButtonCustom>
              <button
                type="button"
                className="border border-blue-300 flex gap-3 p-2 mr-5 w-auto items-center justify-center hover:scale-110  transition-all duration-1000 lg:bg-white lg:text-blue-500 lg:w-auto sm:w-full  sm:bg-blue-600 sm:text-white "
              >
                <FaFacebook className="text-blue-500"></FaFacebook>
                <p>Continue with facebook</p>
              </button>
              <ButtonCustom
                type="button"
                className="gradient mr-5  lg:w-auto sm:w-full"
                onClick={handleShowRegiter}
              >
                Register
              </ButtonCustom>
            </ButtonContainer>
          </form>
        </OuterForm>
      </LoginContainer>
    </AnimatedPage>
  );
};

export default Login;
