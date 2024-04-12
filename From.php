<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<link rel="stylesheet" href="Css/KhungASM.css">

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
            <a href="#">Thông tin khách hàng</a>
            <a href="tranglienhe.php">Liên hệ</a>
        </nav>
        <div class="hinhnen">
            <img src="IMG/background-dep-nen-hong.jpg" alt="">

            <div class="khungfrom">
                <div class="thongtinkhach1">
                    <form>
                        <div class="dinhdang">
                            <label>Họ Tên:</label> <br>
                            <input type="text" class="rong100">
                        </div>
                        <div class="dinhdang">
                            <label>Số Điện Thoại:</label> <br>
                            <input type="text" class="rong100">
                        </div>
                        <div class="dinhdang">
                            <label>Giới tính:</label>
                            <input type="radio" checked name="gender"> Nam
                            <input type="radio" name="gender"> Nữ
                        </div>
                        <div class="dinhdang">
                            <label>Quốc tịch</label>
                            <select class="rong100">
                                <option>Việt Nam</option>
                                <option>Hoa Kì</option>
                            </select>
                        </div>
                        <div class="dinhdang">
                            <Label>Ngày sinh:</Label> <br>
                            <input type="date" class="rong100">
                        </div>
                        <div class="dinhdang">
                            <Label>Ghi chú</Label> <br>
                            <textarea cols="40" rows="5" class="rong100"></textarea>
                        </div>
                        <hr>
                        <div class="dinhdang">
                            <button class="maubt">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </aside>
        <footer>
            Mọi thông tin xin liên hệ: 12345678
        </footer>
    </div>
</body>

</html>