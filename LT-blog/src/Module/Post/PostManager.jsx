import React from "react";
import styled from "styled-components";
import { MdDeleteForever, MdOpenInNew } from "react-icons/md";
import { IoIosEye } from "react-icons/io";
const Container = styled.div`
  width: 100%;
  height: auto;
  position: relative;
  h1 {
    color: ${(props) => props.theme.heading};
  }
  .post_body {
    position: relative;
    width: 100%;
    margin-top: 2rem;
    &-search {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      input {
        @media screen and (max-width: 820px) {
          width: 100%;
        }
        padding: 0.5rem;
      }
    }
    &-list {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      width: 100%;
      height: auto;
      gap: 2rem;
      margin-top: 2rem;
      .post {
        height: 150px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.1rem;
        img {
          width: 100px;
          height: 100%;
        }
        .infor {
          height: 100%;
          width: 100%;
          .action {
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            gap: 0.5rem;
            height: 100%;
            span {
              width: 25px;
              height: 25px;
              border: 1px solid black;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 0.2rem;
              :nth-child(1) {
                background-color: rgba(0, 255, 255, 0.5);
                :hover {
                  background-color: rgba(0, 255, 255);
                }
              }
              :nth-child(2) {
                background-color: rgba(0, 0, 255, 0.5);
                :hover {
                  background-color: rgba(0, 0, 255);
                }
              }
              :nth-child(3) {
                background-color: rgba(255, 0, 0, 0.5);
                :hover {
                  background-color: rgba(255, 0, 0);
                }
              }
            }
          }
        }
      }
    }
    .table {
      table {
        width: 100%;
        thead {
          background-color: #aaa;
        }

        td {
          padding: 0.5rem 1rem;
        }
        tbody {
          tr {
            border-bottom: 1px solid #aaa;
            td {
              .infor {
                width: 100%;
                min-width: 300px;
                overflow-wrap: break-word;
                display: flex;

                gap: 0.5rem;
                &_title {
                  display: flex;
                  flex-direction: column;
                  gap: 0.5rem;
                }
                img {
                  width: 60px;
                  height: 60px;
                }
              }
            }
          }

          span {
            width: 25px;
            height: 25px;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.2rem;
            :nth-child(1) {
              background-color: rgba(0, 255, 255, 0.5);
              :hover {
                background-color: rgba(0, 255, 255);
              }
            }
            :nth-child(2) {
              background-color: rgba(0, 0, 255, 0.5);
              :hover {
                background-color: rgba(0, 0, 255);
              }
            }
            :nth-child(3) {
              background-color: rgba(255, 0, 0, 0.5);
              :hover {
                background-color: rgba(255, 0, 0);
              }
            }
          }
        }
      }
    }
  }
`;

const PostManager = () => {
  return (
    <Container>
      <h1>Posts Manager</h1>
      <div className="post_body">
        <div className="post_body-search">
          <input type="text" placeholder="Search post..." />
        </div>
        {/* <div className="post_body-list">
          <div className="post">
            <img src="/image/room1.png" alt="" />
            <div className="infor">
              <h3>ID : 1</h3>
              <h5>Lorem ipsum dolor sit amet consectetur, adipisic.</h5>
              <div className="action ">
                <span>
                  <IoIosEye></IoIosEye>
                </span>
                <span>
                  <MdOpenInNew></MdOpenInNew>
                </span>
                <span>
                  <MdDeleteForever></MdDeleteForever>
                </span>
              </div>
            </div>
          </div>
        </div> */}
        <div className="w-full mt-10 table">
          <table>
            <thead>
              <tr>
                <td className="w-10">ID</td>
                <td>Title</td>
                <td>Category</td>
                <td>Author</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <div className="infor">
                    <img src="/image/room1.png" alt="" />
                    <div className="infor_title">
                      <h4>Setup phong cho nguoi moizxccccccccccccccccccccc</h4>
                      <p>23 October</p>
                    </div>
                  </div>
                </td>
                <td>kien thuc</td>
                <td>Toan Thanh</td>
                <td>
                  <div className="flex gap-1">
                    <span>
                      <IoIosEye></IoIosEye>
                    </span>
                    <span>
                      <MdOpenInNew></MdOpenInNew>
                    </span>
                    <span>
                      <MdDeleteForever></MdDeleteForever>
                    </span>
                  </div>
                </td>
              </tr>
              {/* <tr>
                <td>1</td>
                <td>
                  <div className="infor">
                    <img src="/image/room1.png" alt="" />
                    <div className="infor_title">
                      <h4>Setup phong cho nguoi moizxccccccccccccccccccccc</h4>
                      <p>23 October</p>
                    </div>
                  </div>
                </td>
                <td>kien thuc</td>
                <td>Toan Thanh</td>
                <td>
                  <div className="flex gap-1">
                    <span>
                      <IoIosEye></IoIosEye>
                    </span>
                    <span>
                      <MdOpenInNew></MdOpenInNew>
                    </span>
                    <span>
                      <MdDeleteForever></MdDeleteForever>
                    </span>
                  </div>
                </td>
              </tr> */}
            </tbody>
          </table>
        </div>
      </div>
    </Container>
  );
};
export default PostManager;
