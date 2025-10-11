<?php
require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// SỬA ĐƯỜNG DẪN: PHPMailer → PHPMailer-master
require __DIR__ . '/../inc/PHPMailer-master/src/Exception.php';
require __DIR__ . '/../inc/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../inc/PHPMailer-master/src/SMTP.php';

function send_mail($uemail, $name, $token)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hoangtrunghieu11072002@gmail.com';      // THAY EMAIL
        $mail->Password   = 'ltjc tevh udgs tqdk';          // THAY APP PASSWORD
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('hoangtrunghieu11072002@gmail.com', 'Booking24h');
        $mail->addAddress($uemail, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Xác nhận tài khoản - Booking24h';
        $mail->Body    = "
            <h3>Xin chào $name,</h3>
            <p>Cảm ơn bạn đã đăng ký tài khoản tại Booking24h.</p>
            <p>Vui lòng nhấp vào link bên dưới để xác thực email:</p>
            <a href='" . SITE_URL . "email_confirm.php?email=$uemail&token=$token' 
               style='background:#2ec1ac; color:white; padding:10px 20px; text-decoration:none; border-radius:5px; display:inline-block;'>
                Xác nhận Email
            </a>
            <p>Link có hiệu lực trong 24 giờ.</p>
        ";

        $mail->send();
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

if (isset($_POST['register'])) {
    $data = filteration($_POST);

    if ($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    $u_exist = select(
        "SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",
        [$data['email'], $data['phonenum']],
        "ss"
    );

    if (mysqli_num_rows($u_exist) != 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    $img = uploadUserImage($_FILES['profile']);
    if ($img == 'inv_img') {
        echo 'inv_img';
        exit;
    } else if ($img == 'upd_failed') {
        echo 'upd_failed';
        exit;
    }

    $token = bin2hex(random_bytes(16));
    $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `token`) 
              VALUES (?,?,?,?,?,?,?,?,?)";
    $values = [
        $data['name'],
        $data['email'],
        $data['address'],
        $data['phonenum'],
        $data['pincode'],
        $data['dob'],
        $img,
$enc_pass,
        $token
    ];

    if (!insert($query, $values, 'sssssssss')) {
        echo 'ins_failed';
        exit;
    }

    // Gửi email (không bắt buộc phải thành công)
    send_mail($data['email'], $data['name'], $token);

    echo 1;
}
?>