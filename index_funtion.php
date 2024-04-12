<?php
// đầu tiên phải có mảng dữ liệu trước 
// tạo một mảng sản phẩm chúng ta sẽ làm mảng trong mảng
$sp = [
  [
    'id' => 1,
    'loai' => 'traicay',
    'ten' => 'Trà chanh hoa quả nhiệt đới',
    'hinh' => 'IMG/Trà chanh hoa quả nhiệt đới.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 2,
    'loai' => 'traicay',
    'ten' => 'Trà chanh nhãn lài',
    'hinh' => 'IMG/Trà chanh nhãn lài.jpeg',
    'gia' => 30000,
    'giam' => 129000
  ],

  [
    'id' => 3,
    'loai' => 'traicay',
    'ten' => 'Trà dâu rừng',
    'hinh' => 'IMG/Trà dâu rừng thủy tinh.jpeg',
    'gia' => 35000,
    'giam' => 799000
  ],

  [
    'id' => 4,
    'loai' => 'traicay',
    'ten' => 'Trà dâu đông du',
    'hinh' => 'IMG/Trà dâu đông du.jpeg',
    'gia' => 30000,
    'giam' => 39000
  ],

  [
    'id' => 5,
    'loai' => 'traicay',
    'ten' => 'Trà chanh dưa lưới',
    'hinh' => 'IMG/Trà dưa lưới thạch chanh.jpeg',
    'gia' => 30000,
    'giam' => 899000
  ],

  [
    'id' => 6,
    'loai' => 'traicay',
    'ten' => 'Trà đào cam sả',
    'hinh' => 'IMG/Trà đào cam sả.jpeg',
    'gia' => 35000,
    'giam' => 990000
  ],

  [
    'id' => 7,
    'loai' => 'traicay',
    'ten' => 'Trà ổi hồng',
    'hinh' => 'IMG/Trà ổi hồng2.jpeg',
    'gia' => 35000,
    'giam' => 1350000
  ],

  [
    'id' => 8,
    'loai' => 'traicay',
    'ten' => 'Trà sen vàng',
    'hinh' => 'IMG/trà sen vàng.jpeg',
    'gia' => 35000,
    'giam' => 99000
  ],

  [
    'id' => 9,
    'loai' => 'tra',
    'ten' => 'Trà sữa truyền thống',
    'hinh' => 'IMG/Trà Sữa Truyền Thống.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 10,
    'loai' => 'tra',
    'ten' => 'Trà sữa trân châu đường đen',
    'hinh' => 'IMG/Trà sữa trân châu đường đen.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 11,
    'loai' => 'tra',
    'ten' => 'Trà sữa thái xanh',
    'hinh' => 'IMG/481310ee-27f7-4bf9-9db8-3f071295-078fcfdc-210622212615.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 12,
    'loai' => 'tra',
    'ten' => 'Trà sữa thái đỏ',
    'hinh' => 'IMG/Trà sữa thái đỏ.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 13,
    'loai' => 'tra',
    'ten' => 'Trà sữa khoai môn',
    'hinh' => 'IMG/Trà sữa khoai môn.jpeg',
    'gia' => 30000,
    'giam' => 159000
  ],

  [
    'id' => 14,
    'loai' => 'tra',
    'ten' => 'Trà sữa kem trứng',
    'hinh' => 'IMG/trà sữa kem trứng.jpg',
    'gia' => 35000,
    'giam' => 159000
  ],
  [
    'id' => 15,
    'loai' => 'cf',
    'ten' => 'Cà Phê Đá',
    'hinh' => 'IMG/cafe đen.jpeg',
    'gia' => 18000,
    'giam' => 159000
  ],

  [
    'id' => 16,
    'loai' => 'cf',
    'ten' => 'Bạc Xỉu Đá',
    'hinh' => 'IMG/bạc xỉu.jpg',
    'gia' => 22000,
    'giam' => 159000
  ],

  [
    'id' => 17,
    'loai' => 'cf',
    'ten' => 'Cà Phê Sữa Đá',
    'hinh' => 'IMG/cfsua.jpg',
    'gia' => 20000,
    'giam' => 159000
  ],
  
];
// đầu tiên tạo biến kết quả chuỗi rỗng
// .= là nối chuỗi
function showsp_traicay($sp, $l)
{
  $kq = '';
  foreach ($sp as $thongtin) {
    if ($l == $thongtin['loai']) {

      $kq .= '<div class="khung">
             <div class="hinhts">
             <a href="trangchitiet.php?id=' . $thongtin['id']. '"><img src="' . $thongtin['hinh'] . '"></a>
             </div>
             <div class="chuts"> ' . $thongtin['ten'] . '
               <br>
                ' . number_format($thongtin['gia'], 0, '.', ',') . " đồng" . '
               
             
             </div>
             <form action="giohang_funtion.php" method="post">
             <input type="hidden" name="id" value="'.$thongtin['id'].'">
             <input type="hidden" name="hinh" value="'.$thongtin['hinh'].'">
             <input type="hidden" name="ten" value="'.$thongtin['ten'].'">
             <input type="hidden" name="gia" value="'.$thongtin['gia'].'">  
             <input type="submit" name="themgh" value="Thêm vào giỏ hàng">
           </form>
         </div>';
    }

  }
  return $kq;
  // number_format( số cần định dạng , kỷ số thập phân(số nguyên), )
}

function show($sp, $l)
{
  $kqts = '';
  foreach ($sp as $thongtin1) {
    if ($l == $thongtin1['loai']) {

      $kqts .= '<div class="khung3dai">
            <div class="hinhcf">
            <a href="trangchitiet.php?id='. $thongtin1['id'] . '"><img src="' . $thongtin1['hinh'] . '"></a>
            </div>
            <div class="chucf">
             ' . $thongtin1['ten'] . '
             <br>
             ' . number_format($thongtin1['gia'], 0, '.', ',') . " đồng" . '
             <form action="giohang_funtion.php" method="post">
             <input type="hidden" name="id" value="'.$thongtin1['id'].'">
             <input type="hidden" name="hinh" value="'.$thongtin1['hinh'].'">
             <input type="hidden" name="ten" value="'.$thongtin1['ten'].'">
             <input type="hidden" name="gia" value="'.$thongtin1['gia'].'">  
             <input type="submit" name="themgh" value="Thêm vào giỏ hàng">
           </form>
             </div>
            </div>';
    }
  }
  return $kqts;
}
?>