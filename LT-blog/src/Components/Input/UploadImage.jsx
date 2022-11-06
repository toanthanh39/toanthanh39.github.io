import React from "react";
import { FcAddImage, FcRemoveImage } from "react-icons/fc";
import styled, { css } from "styled-components";
const OuterLabel = styled.label`
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  ${(props) =>
    props.url &&
    css`
      background-image: url(${props.url});
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    `};
  ::after {
    z-index: 2;
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
  }
`;
const OuterImage = styled.div`
  z-index: 3;
  svg {
    position: relative;
    z-index: 5;
    width: 50px;
    height: 50px;
  }
`;
const UploadImage = ({
  id = "",
  name = "",
  className = "",
  progress = 0,
  image = "",
  url = "",
  onDelete = () => {},
  onSelect = () => {},
  ...props
}) => {
  return (
    <OuterLabel
      url={url}
      className={`w-full  min-h-[200px]  bg-gray-100 border border-dashed rounded-lg relative overflow-hidden ${className}`}
    >
      <input
        type="file"
        name="file"
        id="id"
        className="hidden"
        onChange={onSelect}
        accept="image/png, image/jpeg , image/jpg"
        {...props}
      />
      <OuterImage>
        <div className="image">
          {url ? (
            <FcRemoveImage onClick={onDelete}></FcRemoveImage>
          ) : (
            <FcAddImage></FcAddImage>
          )}
          {url ? (
            <div
              className="absolute w-0 h-1 bg-green-400  bottom-0 left-0 transition-all image-upload-progress"
              style={{ width: `${Math.ceil(progress)}%` }}
            ></div>
          ) : (
            ""
          )}
        </div>
      </OuterImage>
    </OuterLabel>
  );
};

export default UploadImage;
