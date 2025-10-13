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
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
      <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Theo dõi</h5>
      <?php
      if ($contact_r['tw'] != '') {
        echo <<<data
                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>Twitter
                  </span>
                </a>
              data;
      }
      ?>
      <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>FaceBook
      </a><br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by BooKing24h WEBDEV</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  function alert(type, msg, position = 'body') {
    let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

    if (position === 'body') {
      document.body.append(element);

      element.classList.add('custom-alert');
      document.body.append(element);
    } else {
      // Hiển thị trong container cụ thể (như image-alert)
      let container = document.getElementById(position);
      if (container) {
        // Xóa alert cũ nếu có
        container.innerHTML = '';
        // Thêm alert mới
        container.appendChild(element);
      } else {
        console.error(`Container with id "${position}" not found.`);
        return;
      }
    }

    // Tự động ẩn sau 5 giây
    setTimeout(() => {
      if (element && element.classList.contains('show')) {
        element.classList.remove('show');
        setTimeout(() => {
          element.remove();
        }, 150);
      }
    }, 5000);
  }

  function setActive() {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementsByTagName('a');

    for (i = 0; i < a_tags; i++) {
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if (document.location.href.indexOf(file_name) >= 0) {
        a_tags[i].classList.add('active');
      }
    }
  }

  let register_form = document.getElementById('register-form');
  register_form.addEventListener('submit', (e) => {
    e.preventDefault();

    let data = new FormData();

    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('pincode', register_form.elements['pincode'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);
    data.append('profile', register_form.elements['profile'].files[0]);
    data.append('register', '');

    var myModal = document.getElementById('registerModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function() {
      if (this.responseText == 'pass_mismatch') {
        alert('Có lỗi xảy ra', "Mật khẩu không khớp");
      }
      else if(this.responseText == 'email_already'){
        alert('Có lỗi xảy ra', "Email đã tồn tại!");
      }
      else if(this.responseText == 'phone_already'){
        alert('Có lỗi xảy ra', "Số điện thoại đã tồn tại!");
      }
      else if(this.responseText == 'inv_img'){
        alert('Có lỗi xảy ra', "Chỉ cho phép ảnh có định dạng JPG, WEBP và PNG!");
      }
      else if(this.responseText == 'mail_failed'){
        alert('Có lỗi xảy ra', "Không thể gửi xác nhận email! Kết nối máy chủ thất bại");
      }
      else if(this.responseText == 'ins_failed'){
        alert('Có lỗi xảy ra', "Đăng ký thất bại! Lỗi khi kết nối đến máy chủ");
      }
      else{
        alert('Thành công', "Đăng ký thành công. Xác nhận email trong đường link đã gửi!");
        register_form.reset();
      }
    }

    xhr.send(data);
  })
  setActive();
</script>