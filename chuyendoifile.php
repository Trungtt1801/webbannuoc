<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- gửi hình lên  -->
    <form action="form.php" method="post" enctype="multipart/form-data">
        <input type="file" name="taptin">
        <input type="submit" onclick="lay" name="guifile" value="Gửi file đi"> 
    </form>
    <?php
// function lay(){
    if(isset($_FILES['taptin'])){
    $d = 'hinh/' . $_FILES['taptin']['name'];
    move_uploaded_file($_FILES['taptin']['tmp_name'],$d);
}

    ?>
</body>
</html>
<!-- $_FILES["taptin"]["tmp_name"] // đường dẫn tạm đang lưu trên sever
$_FILES["taptin"]["size"]
$_FILES["taptin"]["type"] -->