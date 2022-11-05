import React, { useEffect } from "react";
import styled from "styled-components";
import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";
import { AiFillCloseCircle } from "react-icons/ai";
import Field from "../../Input/Field";
import ButtonCustom from "../../Button/ButtonCustom";
import { toast } from "react-toastify";
import { auth, db } from "../../../Firebase/Firebase-config";
import { createUserWithEmailAndPassword, updateProfile } from "firebase/auth";
import { addDoc, collection } from "firebase/firestore";
const RegisterContainer = styled.div`
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.9);
  transition: all 0.5s;
  z-index: 9999;
  color: ${(props) => props.theme.primary};
  form {
    width: 100%;
    max-width: 800px;
    @media screen and (max-width: 1080) {
      width: 90%;
      height: auto;
      padding: 5px;
    }
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
const H1 = styled.h1`
  color: ${(props) => props.theme.primary};
`;
const H4 = styled.h4`
  color: ${(props) => props.theme.special};
`;
const schema = yup.object({
  userRegister: yup
    .string()
    .required("User is a require field")
    .min(4, "Min 8 characters")
    .max(20, "User Max 20 characters"),
  passwordRegister: yup
    .string()
    .required("Password is a require field")
    .min(6, "Min 6 characters")
    .max(20, "Password Max 20 characters"),
  emailRegister: yup
    .string()
    .required("Email is a require field")
    .email("Please enter valid email"),
});
const Register = ({ toggle }) => {
  const {
    control,
    handleSubmit,
    formState: { errors, isValid, isSubmitting },
    watch,
    reset,
    isSubmitSuccessful,
    setFocus,
  } = useForm({
    resolver: yupResolver(schema),
    mode: "onSubmit",
  });
  const AddUserData = async (data) => {
    const colRef = collection(db, "users");
    const userdata = await addDoc(colRef, {
      name: data.userRegister,
      email: data.emailRegister,
      password: data.passwordRegister,
    });
    return userdata;
  };
  const handleSignUp = async (data) => {
    return new Promise(async (resolve) => {
      try {
        const user = await createUserWithEmailAndPassword(
          auth,
          data.emailRegister,
          data.passwordRegister
        );
        if (user) {
          const colRef = collection(db, "users");
          const userdata = await addDoc(colRef, {
            name: data.userRegister,
            email: data.emailRegister,
            password: data.passwordRegister,
          });
          if (userdata) {
            toast("Register succsess", {
              pauseOnHover: false,
            });
          }
        }
      } catch (error) {
        toast.error(JSON.stringify("Tài khoản đã có người sử dụng"), {
          position: "top-left",
          autoClose: 3000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: false,
          draggable: true,
          progress: undefined,
          theme: "light",
        });
      }
      updateProfile(auth.currentUser, {
        displayName: data.userRegister,
      });
      setTimeout(() => {
        resolve();
        reset({
          emailRegister: "",
          passwordRegister: "",
          userRegister: "",
        });

        toggle();
      }, 2000);
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
  return (
    <RegisterContainer>
      <OuterForm>
        <form onSubmit={handleSubmit(handleSignUp)}>
          <AiFillCloseCircle
            onClick={toggle}
            className="absolute right-0 text-[30pt] cursor-pointer "
          ></AiFillCloseCircle>

          <div className="mb-10">
            <H1>Register</H1>
          </div>
          <div className=" w-full  gap-2  mb-5">
            <Label className="block" htmlFor="emailRegister">
              <H4>
                Email <span className="text-red-500">*</span>
              </H4>
            </Label>
            <Field
              type="text"
              name="emailRegister"
              placeholder="Your email"
              control={control}
              className="text-black"
            ></Field>
          </div>

          <div className=" w-full  gap-2  mb-5">
            <Label className="block" htmlFor="passwordRegister">
              <H4>
                Password <span className="text-red-500">*</span>
              </H4>
            </Label>
            <Field
              type="password"
              name="passwordRegister"
              placeholder="Your Password"
              control={control}
              hasIcon={true}
              className="text-black"
            ></Field>
          </div>

          <div className=" w-full  gap-2  mb-5">
            <Label className="block" htmlFor="userRegister">
              <H4>
                UserName <span className="text-red-500">*</span>
              </H4>
            </Label>
            <Field
              type="text"
              name="userRegister"
              placeholder="Your UserName"
              control={control}
              className="text-black"
            ></Field>
          </div>

          <ButtonCustom type="submit">
            {isSubmitting ? (
              <div className="w-8 h-8 border border-white border-t-transparent rounded-full animate-spin"></div>
            ) : (
              "Sign Up"
            )}
          </ButtonCustom>
        </form>
      </OuterForm>
    </RegisterContainer>
  );
};

export default Register;
