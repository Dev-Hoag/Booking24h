<?php
// Một số biến PHP
$title = "Trang PHP đơn giản";
$today = date("d/m/Y");
$message = "Xin chào, đây là PHP!";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Hôm nay là ngày: <?php echo $today; ?></p>
    <p><?php echo $message; ?></p>

    <ul>
        <?php
        // In danh sách bằng vòng lặp
        $colors = ["Đỏ", "Xanh", "Vàng", "Tím"];
        foreach ($colors as $c) {
            echo "<li>$c</li>";
        }
        ?>
    </ul>
</body>
</html>
