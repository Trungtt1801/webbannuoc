<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASM test</title>
</head>
<link rel="stylesheet" href="Css/KhungASM.css">

<body>
    <div class="container">
        <header>
            <img src="IMG/logo.jpg" alt="">
            <div class="khungdangnhap">
                <a href="dangnhap.php">Đăng nhập</a>
                <a href="#">Đăng kí</a>
            </div>
        </header>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="GioiThieu.php">Giới thiệu</a>
            <a href="From.php">Thông tin khách hàng</a>
            <a href="tranglienhe.php">Liên hệ</a>
        </nav>
        <a href="giohang_funtion.php?ma=xoagiohang"><button>Xóa giỏ hàng</button></a> <br>
    <table border="1px solid black">
        <tr>
        <th>STT</th>
        <th>Tên hàng</th>
        <th>Hình</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Chức năng</th>
        </tr>
        <?php 
        include_once 'giohang_funtion.php';
        $kq = showgh();
        echo $kq;
        ?>


       
    </table>
    </div>
</body>
</html>