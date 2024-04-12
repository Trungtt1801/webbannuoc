<?php
  include_once 'dangky_func.php';
?>

    <style>
  form {
    /* text-align: center; */
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="password"] {
    /* width: 100%; */
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  .dang_nhap {
      display: block;
      text-align: center;
      margin-top: 10px;
    }
</style>

    
    <body>
    <link rel="stylesheet" href="Css/KhungASM.css"> 
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
            <a href="giohang.php">Giỏ hàng</a>
        </nav>
      <form action="register.php" method="post">
          <label for="">Nhập tên:</label> <input type="ten" value="" type="text" name="ten"> <br> <br>
          <label for="">Nhập Số điện thoại:</label> <input type="phone" value="" type="text" name="phone"> <br> <br>
          <label for="">Nhập pass:</label> <input type="password" value=""  name="pass" > <br> <br>
          <label for="">Nhập lại pass:</label> <input type="password" value="" name="repass" > <br> <br>
          <input type="submit" name="dk" value="Đăng ký" onclick="return kiemtra()">
          <a href="dangnhap.php"><span class="dang_nhap">Đăng nhập</span></a>
      </form>
      <?php
        if (isset($_POST['dk']) && $_POST['dk']){
          $ten=$_POST['ten'];
          $phone=$_POST['phone'];
          $pass=$_POST['pass'];
          $repass=$_POST['repass'];
          $pt=['ten' => $ten, 'phone' => $phone, 'pass' => $pass, 'repass' => $repass];

          
          echo dangky($pt);
        }
      ?>
              <footer>Mọi thắc mắc xin liên hệ qua hostline: 12345678</footer>

  </body>
</html>




