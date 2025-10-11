<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - FACILITIES</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    
    <?php require('inc/links.php'); ?>
    
    <style>
        /* Định nghĩa hiệu ứng khi di chuột (hover) vào các tiện ích (class .pop) */
        .pop:hover {
            /* Thay đổi màu border-top thành màu 'teal' (đã định nghĩa trong biến CSS --teal) */
            border-top-color: var(--teal) !important; 
            /* Phóng to đối tượng lên 3% */
            transform: scale(1.03);
            /* Áp dụng hiệu ứng chuyển động mượt mà cho tất cả thuộc tính trong 0.3 giây */
            transition: all 0.3s; 
        }
        
        /* Style cho đường kẻ ngang dưới tiêu đề */
        .h-line {
            width: 150px;
            margin: 0 auto; /* Căn giữa */
            height: 1px;
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>
    
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            <br>
            Temporibus incidunt odio quos dolore commodi repudiandae 
            <br>
            tenetur consequuntur et similique asperiores.
        </p>
    </div>

    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Facility Name 2</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Facility Name 3</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Facility Name 4</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Facility Name 5</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">Facility Name 6</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            
        </div> </div> <?php require('inc/footer.php'); ?>
    
</body>
</html>