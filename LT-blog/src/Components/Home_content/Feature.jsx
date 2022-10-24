import React, { useRef } from "react";
import styled from "styled-components";
import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay, Navigation, Pagination } from "swiper";
import Card from "./../layout/Child/Card";
import withFetchData from "./../../withFetchData";
import { dbapi } from "../../config";
import axios from "axios";
const Container = styled.section`
  header {
    font-family: "Montserrat";
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 36px;
    padding: 4px 0;
    width: auto;
    height: 44px;
    color: #3a1097;
    position: relative;
    margin-bottom: 2rem;
    ::before {
      position: absolute;
      content: "";
      width: 35px;
      height: 3px;
      top: 0;
      left: 0;
      background: #00d1ed;
      border-radius: 1px;
    }
  }
`;
const OuterSwiper = styled.div`
  width: 100%;
  height: auto;
  border-radius: 8px;
  .swiper {
    padding: 0 30px 40px 10px;
    overflow-x: hidden;
    overflow-y: auto;
    @media screen and (max-width: 768px) {
      padding: 0 0 30px 5px;
    }
    .swiper-pagination {
      transform: translate3d(0, 10px, 0) !important;
    }
  }
`;
const Feature = ({ title = "", ...props }) => {
  const arr = Array.from(new Array(10));
  const [api, setApi] = React.useState(dbapi.getFeature);
  const [data, setData] = React.useState(arr);

  const GetData = React.useRef({});
  GetData.current = async () => {
    try {
      const response = await axios.get(api);

      setData(response.data);
    } catch (error) {
      console.log(error);
    }
  };
  React.useEffect(() => {
    GetData.current();
  }, []);
  return (
    <Container>
      <header>{title}</header>

      <OuterSwiper>
        <Swiper
          modules={[Navigation, Pagination, Autoplay]}
          effect={"coverflow"}
          autoplay={{
            delay: 1500,
            disableOnInteraction: true,
          }}
          loop={true}
          navigation
          pagination={{ clickable: true }}
          spaceBetween={100}
          slidesPerView={4}
          breakpoints={{
            325: {
              slidesPerView: 1,
              spaceBetween: 5,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 10,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 15,
            },
            1530: {
              slidesPerView: 4,
              spaceBetween: 15,
            },
          }}
        >
          {data.length > 0 &&
            data.map((item, index) => (
              <SwiperSlide key={index}>
                <Card feature={item}></Card>
              </SwiperSlide>
            ))}
        </Swiper>
      </OuterSwiper>
    </Container>
  );
};
export default Feature;
