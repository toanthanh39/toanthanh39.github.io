import React from "react";
import Field from "./../../Components/Input/Field";
import { useForm } from "react-hook-form";
import Radio from "./../../Components/Input/Radio";
import SelectCustom from "../../Components/Select/SelectCustom";
import ButtonCustom from "../../Components/Button/ButtonCustom";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";
import slugify from "slugify";
import withFetchData from "./../../withFetchData";
import { ErrorBoundary } from "react-error-boundary";
import UploadImage from "./../../Components/Input/UploadImage";
import useFirebaseImage from "../../hook/useFirebaseImage";
import Toggle from "../../Components/Button/Toggle";
import { collection, getDocs, query, where } from "firebase/firestore";
import { db } from "../../Firebase/Firebase-config";
import styled from "styled-components";
import { toast } from "react-toastify";
import { useAuth } from "../../Context/Auth-context";
import DropdownCustom from "./../../Components/Select/DropdownCustom";
const Container = styled.div`
  width: 100%;
  height: 100%;

  .form {
    width: 100%;
    margin-top: 2rem;
    &_layout {
      width: 100%;
      height: 100%;
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
  height: 100%;
  h4 {
    margin-bottom: 1rem;
    margin-left: 1rem;
    font-weight: 700;
    color: ${(props) => props.theme.heading};
  }
  input[type="text"] {
    height: 50px !important;
    :hover,
    :focus,
    :not(:placeholder-shown) {
      border: 1px solid ${(props) => props.theme.special};
      box-shadow: 0 0 5px #20e3b2;
    }
    &::-webkit-input-placeholder {
      color: white;
    }
    ::-moz-input-placeholder {
      color: white;
    }
  }

  input {
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
  type: yup.string("").required("Please choose category for this post"),
});
const AddPost = ({ value: { AddDoc } }) => {
  const [cat, setCat] = React.useState([]);
  const { userInfor } = useAuth();

  const {
    control,
    handleSubmit,
    formState: { errors, isValid, isSubmitting },
    setValue,
    watch,
    reset,
  } = useForm({
    resolver: yupResolver(schema),
    mode: "onChange",
    defaultValues: {
      file: "",
      type: "",
    },
  });
  const {
    handleSelectImage,
    handleUploadImage,
    handleDeleteImage,
    progress,
    image,
    urlImage,
    setUrlImage,
    setImage,
  } = useFirebaseImage(setValue);
  const handleAddPost = async (data) => {
    data.slug = slugify(data.slug || data.title, { trim: true, lower: true });
    if (data.file !== null && data.file !== "") {
      handleUploadImage(data.file);
    }
    const NewData = {
      ...data,
      file: JSON.stringify(image),
      userId: userInfor.uid,
    };

    AddDoc(NewData);
    return new Promise((resolve) => {
      setTimeout(() => {
        resolve();
        reset({
          title: "",
          slug: "",
          author: "",
          type: "",
          file: "",
          hot: false,
        });
        toast.success("ADD blog success", {
          position: "bottom-right",
          autoClose: 3000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: false,
          draggable: true,
          progress: undefined,
          theme: "light",
        });
        setUrlImage("");
        setImage("");
      }, 3000);
    });
  };
  const WatchHot = watch("hot");
  const WatchCat = watch("type");
  React.useEffect(() => {
    const GetData = async () => {
      const colRef = collection(db, "category");
      const q = query(colRef, where("status", "==", 1));
      const querysnapshot = await getDocs(q);
      let categories = [];

      querysnapshot.forEach((doc) => {
        categories.push({
          id: doc.id,
          ...doc.data(),
        });
      });
      setCat(categories);
    };
    GetData();
  }, []);
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
                  placeholder="Enter Title"
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
                  placeholder="Enter SLug"
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
                  placeholder="Enter Author"
                  control={control}
                ></Field>
                {errors?.author && (
                  <p className="error">{errors.author.message}</p>
                )}
              </FieldLayout>
              <FieldLayout>
                <h4>Image</h4>
                <UploadImage
                  progress={progress}
                  onSelect={handleSelectImage}
                  onDelete={handleDeleteImage}
                  url={urlImage}
                  image={image}
                ></UploadImage>
              </FieldLayout>
              {/* <FieldLayout>
                <h4>Category *</h4>
                <SelectCustom
                  opt={cat}
                  control={control}
                  name="type"
                ></SelectCustom>
                {errors?.type && <p className="error">{errors.type.message}</p>}
              </FieldLayout> */}
              <FieldLayout>
                <h4>Category *</h4>
                <DropdownCustom
                  control={control}
                  setValue={setValue}
                  opt={cat}
                  title="Select Category"
                  name="type"
                  errors={errors.type}
                ></DropdownCustom>
                {errors?.type && WatchCat === "" ? (
                  <p className="error">{errors.type.message}</p>
                ) : (
                  ""
                )}
              </FieldLayout>
              <FieldLayout>
                <h4>Feature</h4>
                <Toggle
                  id="hot"
                  name="hot"
                  on={WatchHot === true}
                  onClick={() => setValue("hot", !WatchHot)}
                ></Toggle>
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
