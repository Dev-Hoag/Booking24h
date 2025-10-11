<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
    .custom-bg: hover
    {
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

  <!-- liên hệ -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LIÊN HỆ VỚI CHÚNG TÔI</h2>

<div class="container">
    <div class="row">
        
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <h5 class="mb-3">Tìm chúng tôi trên bản đồ</h5>
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454035.37214924424!2d106.36555703781772!3d10.755292870470326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1759742635972!5m2!1svi!2s" loading="lazy"></iframe>

            <div class="p-3 bg-light rounded">
                <h5 class="mb-3">Gửi Lời Nhắn Nhanh</h5>
                <form method="POST" action="submit_contact.php"> 
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input name="name" type="text" class="form-control shadow-none" placeholder="Họ và Tên" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input name="email" type="email" class="form-control shadow-none" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input name="subject" type="text" class="form-control shadow-none" placeholder="Tiêu Đề/Vấn đề" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control shadow-none" rows="3" placeholder="Nội Dung Chi Tiết" style="resize: none;" required></textarea>
                    </div>
                    <button type="submit" name="send" class="btn btn-sm text-white custom-bg shadow-none">
                        Gửi
                    </button>
                </form>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-4">
            
            <div class="bg-white p-4 rounded mb-4">
                <h5>Địa Chỉ Chính</h5>
                <a href="https://www.google.com/maps/place/Viet+Nam" target="_blank" class="d-inline-block text-decoration-none text-dark mb-3">
                    <i class="bi bi-geo-alt-fill"></i> Tên đường, Thành phố, Quốc gia
                </a>
                
                <h5>Email</h5>
                <a href="mailto:booking24h@example.com" class="d-inline-block text-decoration-none text-dark mb-3">
                    <i class="bi bi-envelope-fill"></i> booking24h@example.com
                </a>

                <h5>Hotline</h5>
                <a href="tel: +84385611929" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0385611929
                </a>
                <br>
                <a href="tel: +84869884725" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0869884725
                </a>
            </div>

            <div class="bg-white p-4 rounded mb-4">
                <h5>Theo Dõi Chúng Tôi</h5>
                <a href="#" class="d-inline-block mb-3 me-2">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>FaceBook
                    </span>
                </a>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i>Twitter
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
      <div class="col-lg-8 p-4">
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
