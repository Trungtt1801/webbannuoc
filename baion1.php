<form action="baion1_funtion.php" method="post">
    <table> nhập vào số trong mảng</table>
    <input type="text" name="spt">
    <input type="submit" value="Tạo mảng" name="tao">
</form>
<h2>
    <?php  
    include_once 'baion1_funtion.php';
    echo $ch;
    ?>
</h2>