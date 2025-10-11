<!-- Thanh điều hướng (Navigation Bar) -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <!-- Logo / tên thương hiệu, bấm vào quay về index.php -->
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ HOTEL</a>
        
        <!-- Nút bấm hiển thị menu khi ở màn hình nhỏ (mobile) -->
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Khu vực menu điều hướng sẽ ẩn/hiện khi bấm nút ở trên -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Danh sách các link menu (Home, Rooms, Facilities, ...) -->
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
                    <a class="nav-link me-2" href="#">About</a>
                </li>
            </ul>

            <!-- Nhóm nút Login và Register nằm bên phải -->
            <div class="d-flex">
                <!-- Nút mở modal đăng nhập -->
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" 
                        data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>

                <!-- Nút mở modal đăng ký -->
                <button type="button" class="btn btn-outline-dark shadow-none" 
                        data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- Modal đăng nhập -->
<div class="modal fade" id="loginModal" 
     data-bs-backdrop="static"  <!-- Không cho đóng modal khi click ra ngoài -->
     data-bs-keyboard="false"   <!-- Không cho đóng modal khi nhấn phím ESC -->
     tabindex="-1"              <!-- Đặt modal ngoài luồng tab -->
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <!-- Kích thước & khung chứa modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Bọc form trong modal -->
            <form>
                
                <!-- Header của modal -->
                <div class="modal-header">
                    <!-- Tiêu đề modal kèm icon user -->
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i> <!-- Icon Bootstrap -->
                        User Login
                    </h5>
                    
                    <!-- Nút đóng modal -->
                    <button type="reset" class="btn-close shadow-none" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Nội dung chính của modal -->
                <div class="modal-body">
                    
                    <!-- Ô nhập email -->
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    
                    <!-- Ô nhập mật khẩu -->
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    
                    <!-- Hàng chứa nút login và link quên mật khẩu -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <!-- Nút đăng nhập -->
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        
                        <!-- Link quên mật khẩu -->
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">
                            Forgot Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal đăng ký -->
<div class="modal fade" id="registerModal" 
     data-bs-backdrop="static"   <!-- Không cho đóng modal khi click ra ngoài -->
     data-bs-keyboard="false"    <!-- Không cho đóng modal bằng phím ESC -->
     tabindex="-1" 
     aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <!-- Modal hộp thoại lớn (modal-lg để rộng hơn so với mặc định) -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <!-- Bọc toàn bộ trong form -->
            <form>
                
                <!-- Header của modal -->
                <div class="modal-header">
                    <!-- Tiêu đề modal kèm icon user register -->
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                    </h5>
                    <!-- Nút đóng modal -->
                    <button type="reset" class="btn-close shadow-none" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Thân modal -->
                <div class="modal-body">
                    
                    <!-- Thông báo hướng dẫn -->
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) 
                        that will be required during check-in.
                    </span>
                    
                    <!-- Form nhập dữ liệu người dùng -->
                    <div class="container-fluid">
                        <div class="row">
                            
                            <!-- Họ tên -->
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            
                            <!-- Email -->
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            
                            <!-- Số điện thoại -->
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            
                            <!-- Upload hình ảnh -->
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            
                            <!-- Địa chỉ -->
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>
                            
                            <!-- Mã bưu chính -->
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            
                            <!-- Ngày sinh -->
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            
                            <!-- Mật khẩu -->
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            
                            <!-- Nhập lại mật khẩu -->
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Nút đăng ký -->
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal đăng ký -->
<!-- End of Modal đăng nhập --> 
