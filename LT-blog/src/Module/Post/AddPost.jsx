import styled from "@emotion/styled";
import React, { useState, useId } from "react";
import Field from "./../../Components/Input/Field";
import { useForm } from "react-hook-form";
import Checkbox from "../../Components/Checkbox/Checkbox";
import CheckboxList from "./../../Components/Checkbox/CheckboxList";
import Radio from "./../../Components/Input/Radio";
import SelectCustom from "../../Components/Select/SelectCustom";
import ButtonCustom from "../../Components/Button/ButtonCustom";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";
import slugify from "slugify";
import withFetchData from "./../../withFetchData";
import { ErrorBoundary } from "react-error-boundary";
const Container = styled.div`
  width: 100%;
  height: 100%;

  .form {
    width: 100%;
    margin-top: 2rem;
    &_layout {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 3rem;
      @media screen and (max-width: 768px) {
        grid-template-columns: repeat(1, 1fr);
      }
    }
    .submit {
      margin-top: 2rem;
      width: 200px;
      height: 60px;
    }
  }
`;
const FieldLayout = styled.div`
  h4 {
    margin-bottom: 1rem;
    margin-left: 1rem;
  }
  input {
    height: 50px !important;
    background-color: #c4c4c4;
    width: 100%;
  }

  .error {
    color: red;
    font-weight: 500;
  }
  .body {
    display: flex;
    align-items: center;
    gap: 1rem;
  }
`;
const schema = yup.object({
  title: yup
    .string("")
    .required("Title is empty")
    .max(50, "Title must be less than 50 character"),
  slug: yup.string("").max(20, "Slug must be less than 20 character"),
  author: yup
    .string("")
    .required("Author is empty")
    .max(20, "Author must be less than 20 character"),
  status: yup
    .string("")
    .required("Please choose status")
    .oneOf(
      ["approved", "pendding", "reject"],
      "please check status for this post"
    ),
  type: yup
    .string("")
    .required("Please choose category for this post")
    .oneOf(["blog", "study", "other"], "choose one of options"),
});
const AddPost = ({ value: { AddDoc } }) => {
  const [slugValue, setSlugValue] = useState("");

  const {
    control,
    register,
    handleSubmit,
    formState: { errors, isValid, isSubmitting },
    watch,
    reset,
    isSubmitSuccessful,
    setFocus,
  } = useForm({
    resolver: yupResolver(schema),
    mode: "onChange",
  });
  const handleAddPost = (data) => {
    data.slug = slugify(data.slug || data.title, { trim: true, lower: true });
    const NewdData = { ...data };

    AddDoc(NewdData);

    return new Promise((resolve) => {
      setTimeout(() => {
        resolve();
        // reset({
        //   title: "",
        //   slug: "",
        //   author: "",
        //   type: "",
        // });
      }, 2000);
    });
  };

  return (
    <ErrorBoundary
      FallbackComponent={ErrorBoundary}
      onReset={() => {
        // reset the state of your app so the error doesn't happen again
      }}
    >
      <Container>
        <h1>Add new post</h1>
        <div className="form">
          <form onSubmit={handleSubmit(handleAddPost)}>
            <div className="form_layout">
              <FieldLayout>
                <h4>Title *</h4>
                <Field
                  name="title"
                  control={control}
                  className=" border border-none "
                ></Field>
                {errors?.title && (
                  <p className="error">{errors.title.message}</p>
                )}
              </FieldLayout>
              <FieldLayout>
                <h4>SLug *</h4>
                <Field
                  name="slug"
                  control={control}
                  className=" border border-none "
                ></Field>
                {errors?.slug && <p className="error">{errors.slug.message}</p>}
              </FieldLayout>

              <FieldLayout>
                <h4>Status *</h4>
                <div className="body">
                  <Radio
                    name="status"
                    id="approved"
                    label="Approved"
                    value="approved"
                    control={control}
                  ></Radio>
                  <Radio
                    name="status"
                    id="pendding"
                    label="Pendding"
                    value="pendding"
                    control={control}
                  ></Radio>
                  <Radio
                    name="status"
                    id="reject"
                    label="Reject"
                    value="reject"
                    control={control}
                  ></Radio>
                </div>
                {errors?.status && (
                  <p className="error">{errors.status.message}</p>
                )}
              </FieldLayout>
              <FieldLayout>
                <h4>Author *</h4>
                <Field
                  name="author"
                  className=" border border-none  "
                  control={control}
                ></Field>
                {errors?.author && (
                  <p className="error">{errors.author.message}</p>
                )}
              </FieldLayout>
              <FieldLayout>
                <h4>Image</h4>
                <input
                  type="file"
                  name="file"
                  id="file"
                  style={{ display: "none" }}
                />
                <label
                  htmlFor="file"
                  className="w-full h-[50px] rounded-md pl-4 border border-slate-500 inline-block"
                >
                  Select file...
                </label>
              </FieldLayout>

              <FieldLayout>
                <h4>Category *</h4>
                <SelectCustom
                  opt={["blog", "study", "other"]}
                  control={control}
                  name="type"
                ></SelectCustom>
                {errors?.type && <p className="error">{errors.type.message}</p>}
              </FieldLayout>
            </div>
            <div className="submit">
              {isSubmitting ? (
                <div className="w-10 h-10 rounded-full border border-blue-600 border-t-transparent animate-spin   "></div>
              ) : (
                <ButtonCustom type="submit">Submit</ButtonCustom>
              )}
            </div>
          </form>
        </div>
      </Container>
    </ErrorBoundary>
  );
};

export default withFetchData(AddPost);
