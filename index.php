<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking 24h</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        .h-font{
            font-family: 'Merienda', cursive;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }

        input[type = number]{
            -moz-appearance: textfield;
        }
            .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
            }
            .custom-bg{
            background-color: #2ec1ac;
            }
            .custom-bg: hover{
            background-color: #279e8c;
            }
            .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
            }

            @media screen and (max-width: 575px) {
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
            }

    </style>
</head>
<body class="bg-Light">

  <?php require('inc/header.php'); ?>

  <!-- ảnh giới thiệu web -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper Swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_19589.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_81085.png" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>

  <!-- tình trạng phòng -->

  <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">BẮT ĐẦU ĐẶT PHÒNG</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Nhận Phòng</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Trả Phòng</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Người Lớn</label>
                        <select class="form-select shadow-none">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Trẻ Em</label>
                        <select class="form-select shadow-none">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-lg-3 text-end">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Đặt Phòng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <!-- Phòng -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHÒNG NGHỈ CỦA CHÚNG TÔI</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Tiêu Chuẩn</h5>
            <h6 class="mb-4">Gái từ: 400.000đ/đêm</h6>
            <div class="thông tin mb-4">
              <h6 class="mb-1">Thông Tin</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng Ngủ
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Phòng Tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ban Công
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Tiện Nghi</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                TV
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Lạnh
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Nước Nóng
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh Giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex-justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem Chi Tiết</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_67761.png" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Cao Cấp</h5>
            <h6 class="mb-4">Giá từ: 700.000đ/đêm</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Thông Tin</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng Ngủ 
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Phòng Tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Ban Công
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Tiện Ích</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                TV
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Lạnh
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Nước Nóng
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh Giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex-justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem Chi Tiết</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_87254.png" class="card-img-top">
          <div class="card-body">
            <h5>Phòng Deluxe</h5>
            <h6 class="mb-4">Gía từ: 2.000.000đ/đêm</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Thông Tin Phòng</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Phòng Ngủ 
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Phòng Tắm
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Ban Công 
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Ghế Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Tiện Ích</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                TV
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Lạnh
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Máy Nước Nóng
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Đánh Giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex-justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem Chi Tiết</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Thêm Phòng >>></a>
      </div>
    </div>
  </div>

  <!-- CS vật chất  -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">DỊCH VỤ VÀ TIỆN NGHI</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="100">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_49949.svg" width="100px">
        <h5 class="mt-3">Máy Lạnh</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_43553.svg" width="100px">
        <h5 class="mt-3">Máy Nước Nóng</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_41622.svg" width="100px">
        <h5 class="mt-3">TiVi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/IMG_47816.svg" width="100px">
        <h5 class="mt-3">Massage</h5>
      </div>
      <div class="col-log-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Nhiều Tiện Nghi Hơn >>></a>
      </div>
    </div>
  </div>

  <!-- CẢM NHẬN -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHẢN HỒI TỪ KHÁCH HÀNG</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/customers.svg" width="30px">
            <h6 class="m-0 ms-2">Phùng Lâm Dư</h6>
          </div>
          <p>
            Phòng sạch sẽ, nhân viên thân thiện, vị trí thuận tiện.
            Chắc chắn sẽ quay lại!
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/customers.svg" width="30px">
            <h6 class="m-0 ms-2">Lâm Quốc Anh</h6>
          </div>
          <p>
            Phòng sạch sẽ, nhân viên nhiệt tình, vị trí ngay trung tâm nên đi đâu cũng tiện.
            Mình đặt phòng qua web rất nhanh, không gặp lỗi gì.
            Sẽ giới thiệu cho bạn bè!
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/customers.svg" width="30px">
            <h6 class="m-0 ms-2">Shaws Mendes</h6>
          </div>
          <p>
            Peaceful atmosphere, elegant interior, and attentive service.
            I especially loved the balcony overlooking the lake and the breakfast at the restaurant.
            A truly relaxing experience.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-log-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem Thêm >>></a>
    </div>
  </div>

  <!-- liên hệ -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LIÊN HỆ VỚI CHÚNG TÔI</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.564786603647!2d106.67089100000001!3d10.800496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752928b7208c15%3A0xc7aa798b94e48f8d!2zS2jDoWNoIHPhuqFuIFTDom4gU8ahbiBOaOG6pXQ!5e0!3m2!1svi!2sus!4v1760025386407!5m2!1svi!2sus" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Liên Hệ:</h5>
          <a href="0968065187" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> 0385611929
          </a>
          <br>
          <a href="0968065187" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> 0869884725
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Theo Dõi:</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>FaceBook
            </span>
          </a>
          <br>
           <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>Twitter
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>
</html>