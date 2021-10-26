<?php
include('ket_noi.php');
if(isset($_REQUEST['MaKH']) and $_REQUEST['MaKH']!=""){
    $MaKH=$_GET['MaKH'];
    $sql = "DELETE FROM customer WHERE MaKH='$MaKH'";
    if ($conn->query($sql) == TRUE) {
        echo "<script type='text/javascript'>alert('Bạn đã xóa thành công');</script>";
        echo "<script>";
        echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=customers';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>alert('Đã có lỗi khi xóa: ');</script>". $conn->error;
    }
    $conn->close();
}
?>