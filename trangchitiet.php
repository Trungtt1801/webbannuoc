<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chi tiết</title>
</head>
<link rel="stylesheet" href="Css/KhungASM.css   ">

<body>
    <div class="container">
        <header>
            <img src="IMG/logo.jpg" alt="">
            <div class="khungdangnhap">
                <a href="dangnhap.php">Đăng nhập</a>
                <a href="#">Đăng kí</a>
        </header>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="GioiThieu.php">Giới thiệu</a>
            <a href="From.php">Thông tin khách hàng</a>
            <a href="#">Liên hệ</a>
        </nav>
<?php
include 'trangchitiet_funtion.php';
        echo  $chitiet;   
?>
<div class="sanphamkhac">
    Các sản phẩm khác
</div>
<div class="khungsp1">
    <div class="khungdai">
        <div class="hinhtrongkhungdai">
        <img src="IMG/sữa tươi phúc bồn tử.jpeg" alt="">
        <div class="chukhungdai">
            Sữa tươi phúc bồn tử <br>
            35.000 đồng
        </div>
    </div>
    </div>
    <div class="khungngan">
        <div class="khungtren">
            <div class="khungtrongngan">
                <img src="IMG/tiênsữa tươitiên tử.jpeg" alt="">
                Sữa tươi tiên tử <br>
                35.000 đồng
            </div>
            <div class="khungtrongngan">
                <img src="IMG/Trà dâu đông du.jpeg" alt="">
                Trà dâu đông du <br>
                30.000 đồng
            </div>
            <div class="khungtrongngan">
                <img src="IMG/Trà dâu rừng thủy tinh.jpeg" alt="">
                Trà dâu rừng thủy tinh <br>
                30.000 đồng
            </div>
            <div class="khungtrongngan">
                <img src="IMG/Cà phê sữa.jpeg" alt="">
                Cà phê sữa <br>
                20.000 đồng
            </div>
            <div class="khungtrongngan">
                <img src="IMG/cafe đen.jpeg" alt="">
                Cà phê đen <br>
                18.000 đồng
            </div>
            <div class="khungtrongngan">
                <img src="IMG/bạc xỉu.jpg" alt="">
                Bạc xỉu <br>
                22.000 đồng
            </div>
        </div>

           
</div>
        <footer>
            Mọi thông tin xin liên hệ: 12345678
        </footer>
    </div>
</body>

</html>


