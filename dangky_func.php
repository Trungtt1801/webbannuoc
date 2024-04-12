
<?php
session_start();
function dangky($pt){
    if (empty($pt['ten']) || empty($pt['phone']) || empty($pt['pass']) || empty($pt['repass'])) {
        return 'Vui lòng điền đầy đủ thông tin để đăng kí.';
    }




        $fl=0;
        if (isset($_SESSION['user']) && $_SESSION['user'] != null){
            for ($i=0; $i < count($_SESSION['user']) ; $i++){
                if($_SESSION['user'][$i]['phone']== $pt['phone']){
                    $loi=$_SESSION['user'][$i]['phone'];
                    $fl=1;
                }
         }
    }
    if($fl==0){
        if ($pt['pass'] === $pt['repass']) {
            $_SESSION['user'][] = $pt;
            header("location:dangnhap.php");
            exit();
        } else {
            return  'Mật khẩu không khớp, đăng kí không thành công';
        }
        
    }
    else {
        return 'Số điện thoại đã tồn tại, vui lòng nhập số điện thoại khác để thực hiện đăng kí tài khoảng';
    }
    
if($fl==0){
    return '<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #2ecc71; background-color: #dff0d8; color: #27ae60; border-radius: 4px; text-align: center; width: 400px; margin: auto; margin-top: 20px;">Đã đăng kí thành công</div>';
}else{
    return '<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #e74c3c; background-color: #f2dede; color: #c0392b; border-radius: 4px; width: 400px; margin: auto; margin-top: 20px;">Số điện thoại '.$loi.' đã được đăng ký trước đó</div>';
}
}

?>

