<?php
include('ket_noi.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";
    if ($conn->query($sql) == TRUE) {
        echo "<script type='text/javascript'>alert('Bạn đã xóa thành công');</script>";
        echo "<script>";
        echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=products';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>alert('Đã có lỗi khi xóa: ');</script>". $conn->error;
    }    
    $conn->close();
}
?>