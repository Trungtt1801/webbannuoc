<?php 
ob_start();
$mang =[];
$ch= '';
if(isset($_POST['tao']) && $_POST['tao'] ){
    $spt =$_POST['spt'];
    for($i = 0; $i < $spt; $i++){
        $mang = rand(0 , 50);
    }
    $ch='mảng được tạo là: ';
    for($i = 0; $i < count($mang); $i++){
        $ch.= $mang[$i].' , ';
    }
    $ch.='Các phần tử chia hết cho 3 là: ';
    for($i = 0; $i < count($mang); $i++){
        if($mang[$i]%3 == 0){
            $ch.= $m[$i]. ',';
        }
    }
    header(' location: baion1.php');
}   
?>