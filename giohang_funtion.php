<?php
session_start();
ob_start();
if (isset($_POST['themgh']) && $_POST['themgh']) {
    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];
    $pt = ['id' => $id, 'ten' => $ten, 'hinh' => $hinh, 'gia' => $gia, 'sl' => 1];
    
    $fl = 0;
    if($_SESSION['giohang'] != null){
        for($i = 0; $i < count($_SESSION['giohang']); $i++){
            if($_SESSION['giohang'][$i]['id'] == $id){
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, chỉ tăng số lượng và kết thúc vòng lặp
                $_SESSION['giohang'][$i]['sl']++;
                $fl = 1;
            }
        }
    }
    
    // Nếu sản phẩm không tồn tại trong giỏ hàng, thêm mới vào giỏ hàng
    if($fl == 0){
        $_SESSION['giohang'][] = $pt;
    }
    header('location: giohang.php');
}

if(isset($_GET['ma']) && $_GET['ma'] =='xoagiohang'){
    session_unset();
    session_destroy();
    header('location: giohang.php');
}
if(isset($_GET['ma']) && $_GET['ma'] =='xoasanpham'){
    for($i = 0; $i < count($_SESSION['giohang']); $i++){
        if($_SESSION['giohang'][$i]['id'] == $_GET['id']){
            $vitri = $i;
            break;
        }
    }
    array_splice($_SESSION['giohang'], $vitri,1);
    header('location: giohang.php');
}

function showgh()
{
    $gh = '';
    $stt = 1;
    $tong = 0;
    if (isset($_SESSION['giohang']) && $_SESSION['giohang'] != null) {
        foreach ($_SESSION['giohang'] as $thongtingh) {
            $thanhtien = $thongtingh['sl'] * $thongtingh['gia'];
            $gh.= '<tr>
        <td style="text-align: center;">' . $stt . '</td>
        <td>' . $thongtingh['ten'] . '</td>
        <td><img width="120px" src="' . $thongtingh['hinh'] . '" ></td>
        <td>' .  number_format($thongtingh['gia'], 0, '.', ',') . ' Đồng</td>
        <td style="text-align: center;">' . $thongtingh['sl'] . '</td>
        <td>' . number_format($thanhtien,0,'.',','). ' Đồng</th>
        <td style="text-align: center;"><a href="giohang_funtion.php?ma=xoasanpham&id='.$thongtingh['id'].'">Xóa</a></td>
        </tr>';
            $stt++;
            $tong+=$thanhtien;
        }
    } else {
        $gh.= 'Giỏ hàng rỗng';
    }
    $gh.=' <tr>
    <td colspan="5">Tổng tiền</td>
    <td colspan="2">'.number_format($tong ,0,'.',',').' Đồng</td>
    </tr>
    ';
    return $gh;
}
?>
 
