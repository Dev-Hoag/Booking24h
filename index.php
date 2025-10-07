<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
<link rel="stylesheet" href="css/common.css">
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

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
     <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">BooKing24h</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon "></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>       
      </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Đăng Nhập
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
          Đăng Ký
          </button>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs -3 me-2"></i> Người Dùng Đăng Nhập
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4 ">
              <label class="form-label">Mật Khẩu</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">ĐĂNG NHẬP</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Quên Mật Khẩu?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs -3 me-2"></i>
               Đăng Ký Người Dùng
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              LƯU Ý: Thông tin bạn cung cấp phải trùng khớp với giấy tờ tùy thân
              (CMND/CCCD, hộ chiếu, bằng lái xe, v.v.) sẽ được kiểm tra khi nhận phòng.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="Password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ảnh giới thiệu web -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper Swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block">
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
            <div class="col-lg-3 mb-3">
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
            <div class="col-lg-1 mb-lg-3 mt-2">
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
          <img src="images/rooms/2.png" class="card-img-top">
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
          <img src="images/rooms/3.png" class="card-img-top">
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

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">DỊCH VỤ VS TIỆN NGHI</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/wifi.svg" width="100">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/airconditioner.svg" width="100px">
        <h5 class="mt-3">Máy Lạnh</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/waterheater.svg" width="100px">
        <h5 class="mt-3">Máy Nước Nóng</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/tv.svg" width="100px">
        <h5 class="mt-3">TV</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/massage.svg" width="100px">
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
            <img src="images/facilities/star.svg" width="30px">
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
            <img src="images/facilities/star.svg" width="30px">
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
            <img src="images/facilities/star.svg" width="30px">
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
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454035.37214924424!2d106.36555703781772!3d10.755292870470326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1759742635972!5m2!1svi!2s" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Liên Hệ:</h5>
          <a href="0968065187" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> 0968065187
          </a>
          <br>
          <a href="0968065187" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> 0968551005
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
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">Booking24h</h3>
        <p>
          Chúng tôi là điểm đến lý tưởng cho những ai đang tìm kiếm sự thoải mái,
          tiện nghi và trải nghiệm đáng nhớ. Với đội ngũ thân thiện và dịch vụ chuyên nghiệp,
          chúng tôi cam kết mang đến cho bạn kỳ nghỉ tuyệt vời nhất.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class ="mb-3">Theo dõi</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i>FaceBook
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i>Instagram
        </a><br>
      </div>
    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by BooKing24h WEBDEV</h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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