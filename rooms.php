<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phòng</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="rooms.css">
</head>

<body class="bg-light">

  <!-- Tiêu đề -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CÁC HẠNG PHÒNG</h2>

  <div class="container">
    <div class="row">

      <!-- 🔹 CỘT BỘ LỌC -->
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <div id="filterBox" class="collapse d-lg-block">
          <div class="bg-white rounded shadow p-3">
            <h4 class="mt-2 fw-bold">Bộ lọc</h4>

            <label class="form-label mt-3">Ngày nhận phòng</label>
            <input type="date" class="form-control shadow-none mb-3" id="checkIn">  

            <label class="form-label">Ngày trả phòng</label>
            <input type="date" class="form-control shadow-none mb-3" id="checkOut">  

            <h5 class="mb-3" style="font-size: 18px;">Tiện nghi</h5>
            <div class="mb-2">
              <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
              <label for="f1" class="form-label">Hồ bơi</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
              <label for="f2" class="form-label">Bữa sáng miễn phí</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
              <label for="f3" class="form-label">Dịch vụ đưa đón sân bay</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
              <label for="f3" class="form-label">Khu vui chơi trẻ em</label>
            </div>
            <div class="mb-2">
              <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
              <label for="f3" class="form-label">Spa & Massage</label>
            </div>


            <h5 class="mb-3 mt-4" style="font-size: 18px;">Khách lưu trú</h5>
            <div class="d-flex">
              <div class="me-3">
                <label class="form-label">Người lớn</label>
                <input type="number" class="form-control shadow-none">
              </div>
              <div>
                <label class="form-label">Trẻ em</label>
                <input type="number" class="form-control shadow-none">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 🔹 DANH SÁCH PHÒNG -->
      <div class="col-lg-9 col-md-12 px-4">

        <!-- 🔸 PHÒNG 1 -->
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="Phòng Tiêu chuẩn">
            </div>
            <div class="col-md-5 px-3">
              <h5 class="mb-1 fw-bold">Phòng Tiêu Chuẩn</h5>
              <p class="text-muted small mb-2">Không gian ấm cúng, đầy đủ tiện nghi cơ bản dành cho 2 người.</p>

              <div class="features mb-3">
                <h6 class="mb-1 text-muted">Đặc điểm</h6>
                <span class="badge bg-light text-dark text-wrap">1 Giường đôi</span>
                <span class="badge bg-light text-dark text-wrap">Phòng tắm riêng</span>
                <span class="badge bg-light text-dark text-wrap">Ban công</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1 text-muted">Tiện nghi</h6>
                <span class="badge bg-light text-dark text-wrap">Wifi miễn phí</span>
                <span class="badge bg-light text-dark text-wrap">TV màn hình phẳng</span>
                <span class="badge bg-light text-dark text-wrap">Điều hòa</span>
              </div>

              <div class="guests mb-3">
                <h6 class="mb-1 text-muted">Sức chứa</h6>
                <span class="badge bg-light text-dark text-wrap">2 Người lớn</span>
                <span class="badge bg-light text-dark text-wrap">1 Trẻ em</span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4 fw-bold text-success">1.200.000đ / đêm</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow-none mb-2" style="background-color: #2faf98; border: none;">Đặt ngay</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
          </div>
        </div>

        <!-- 🔸 PHÒNG 2 -->
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-3">
              <img src="images/rooms/2.jpg" class="img-fluid rounded" alt="Phòng Cao cấp">
            </div>
            <div class="col-md-5 px-3">
              <h5 class="mb-1 fw-bold">Phòng Cao Cấp</h5>
              <p class="text-muted small mb-2">Không gian hiện đại, có cửa sổ hướng vườn và khu làm việc riêng.</p>

              <div class="features mb-3">
                <h6 class="mb-1 text-muted">Đặc điểm</h6>
                <span class="badge bg-light text-dark text-wrap">1 Giường King</span>
                <span class="badge bg-light text-dark text-wrap">Phòng tắm riêng</span>
                <span class="badge bg-light text-dark text-wrap">Ban công</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1 text-muted">Tiện nghi</h6>
                <span class="badge bg-light text-dark text-wrap">Wifi tốc độ cao</span>
                <span class="badge bg-light text-dark text-wrap">Smart TV</span>
                <span class="badge bg-light text-dark text-wrap">Điều hòa</span>
              </div>

              <div class="guests mb-3">
                <h6 class="mb-1 text-muted">Sức chứa</h6>
                <span class="badge bg-light text-dark text-wrap">2 Người lớn</span>
                <span class="badge bg-light text-dark text-wrap">2 Trẻ em</span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4 fw-bold text-success">1.800.000đ / đêm</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow-none mb-2" style="background-color: #2faf98; border: none;">Đặt ngay</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
          </div>
        </div>

        <!-- 🔸 PHÒNG 3 -->
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-3">
              <img src="images/rooms/3.jpg" class="img-fluid rounded" alt="Phòng Hạng Sang">
            </div>
            <div class="col-md-5 px-3">
              <h5 class="mb-1 fw-bold">Phòng Hạng Sang</h5>
              <p class="text-muted small mb-2">Không gian rộng rãi, nội thất cao cấp, có bồn tắm và view thành phố.</p>

              <div class="features mb-3">
                <h6 class="mb-1 text-muted">Đặc điểm</h6>
                <span class="badge bg-light text-dark text-wrap">1 Giường King</span>
                <span class="badge bg-light text-dark text-wrap">Phòng tắm lớn</span>
                <span class="badge bg-light text-dark text-wrap">Ban công rộng</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1 text-muted">Tiện nghi</h6>
                <span class="badge bg-light text-dark text-wrap">Wifi miễn phí</span>
                <span class="badge bg-light text-dark text-wrap">Bồn tắm Jacuzzi</span>
                <span class="badge bg-light text-dark text-wrap">Mini Bar</span>
              </div>

              <div class="guests mb-3">
                <h6 class="mb-1 text-muted">Sức chứa</h6>
                <span class="badge bg-light text-dark text-wrap">3 Người lớn</span>
                <span class="badge bg-light text-dark text-wrap">2 Trẻ em</span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4 fw-bold text-success">2.400.000đ / đêm</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow-none mb-2" style="background-color: #2faf98; border: none;">Đặt ngay</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
          </div>
        </div>

        <!-- 🔸 PHÒNG 4 -->
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-3">
              <img src="images/rooms/4.jpg" class="img-fluid rounded" alt="Phòng Gia đình">
            </div>
            <div class="col-md-5 px-3">
              <h5 class="mb-1 fw-bold">Phòng Gia Đình</h5>
              <p class="text-muted small mb-2">Phòng rộng rãi, 2 giường đôi, phù hợp cho nhóm hoặc gia đình.</p>

              <div class="features mb-3">
                <h6 class="mb-1 text-muted">Đặc điểm</h6>
                <span class="badge bg-light text-dark text-wrap">2 Giường đôi</span>
                <span class="badge bg-light text-dark text-wrap">2 Phòng tắm</span>
                <span class="badge bg-light text-dark text-wrap">Ban công</span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1 text-muted">Tiện nghi</h6>
                <span class="badge bg-light text-dark text-wrap">Wifi miễn phí</span>
                <span class="badge bg-light text-dark text-wrap">Tivi</span>
                <span class="badge bg-light text-dark text-wrap">Điều hòa</span>
                <span class="badge bg-light text-dark text-wrap">Máy sưởi</span>
              </div>

              <div class="guests mb-3">
                <h6 class="mb-1 text-muted">Sức chứa</h6>
                <span class="badge bg-light text-dark text-wrap">4 Người lớn</span>
                <span class="badge bg-light text-dark text-wrap">3 Trẻ em</span>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4 fw-bold text-success">2.800.000đ / đêm</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow-none mb-2" style="background-color: #2faf98; border: none;">Đặt ngay</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Xem chi tiết</a>
            </div>
          </div>
        </div>

      </div> <!-- end col-lg-9 -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</body>
</html>
