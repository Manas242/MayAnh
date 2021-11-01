<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("ket_noi.php");
$sql=mysqli_query($conn,"select * from customer");
?>
<form method="POST" class="form" id="fromid">
<h2>Khách hàng</h2>
<label>HoTen: <input type="text" value="" name="HoTen"></label><br/>
<label>DiaChi: <input type="text" value="" name="DiaChi"></label><br/>
<label>SoDT: <input type="text" value="" name="SoDT"></label><br/>
<label>Email: <input type="text" value="" name="Email"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
    $MaKH=$_GET['MaKH'];
    $HoTen=$_POST['HoTen'];
    $DiaChi=$_POST['DiaChi'];
    $SoDT=$_POST['SoDT'];
    $Email=$_POST['Email'];

$sql = "insert into customer (MaKH,HoTen,DiaChi,SoDT,Email)
values(NULL,'$HoTen','$DiaChi','$SoDT','$Email')";

if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Bạn đã thêm thành công');</script>";
    echo "<script>";
    echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=customers';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>alert('Đã có lỗi khi thêm: . $conn->error');</script>";
}

$conn->close();
}
?>
</form>
</body>
</html>