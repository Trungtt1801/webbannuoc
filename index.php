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
                <a href="register.php">Đăng kí</a>
            </div>
        </header>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="GioiThieu.php">Giới thiệu</a>
            <a href="From.php">Thông tin khách hàng</a>
            <a href="tranglienhe.php">Liên hệ</a>
            <a href="giohang.php">Giỏ hàng</a>
        </nav>
        <article>
            <img src="IMG/Screenshot 2024-01-18 215341.png" alt="">
        </article>
        <aside>
            <div class="tren">
                <img src="IMG/images.png" alt="">
            </div>
            <div class="duoi">
                <div class="trai">
                    <img src="IMG/trà sen vàng.jpeg" alt="">
                    <h3>Trà sen vàng</h3>
                </div>
                <div class="phai">
                    <img src="IMG/Trà dâu rừng thủy tinh.jpeg" alt="">
                    <h3>Trà dâu rừng thủy tinh</h3>
                </div>
            </div>
        </aside>
        <div class="loaisanpham">Các loại trà trái cây</div>
        <?php


        ?>


        <!-- include là đường dẫn tới file cần nhúng nằm trong ngoặc kép hoặc ngoặc đơn -->
        <?php
        include 'index_funtion.php';
        echo showsp_traicay($sp, 'traicay');
        ?>



        <div class="sanpham">Các loại trà sữa</div>
        <?php
        echo show($sp, 'tra');
        ?>

        <div class="loaisanpham">Các loại cà phê</div>

        <?php
        echo show($sp, 'cf');
        ?>




        <footer>Mọi thắc mắc xin liên hệ qua hostline: 12345678</footer>
</body>

</html>