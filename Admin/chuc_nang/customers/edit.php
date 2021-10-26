<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("ket_noi.php");
$MaKH=$_GET['MaKH'];
$query=mysqli_query($conn,"select * from customer where MaKH='$MaKH'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form" id="fromid">
<h2>Khách hàng</h2>
<label>HoTen: <input type="text" value="<?php echo $row['HoTen']; ?>" name="HoTen"></label><br/>
<label>DiaChi: <input type="text" value="<?php echo $row['DiaChi']; ?>" name="DiaChi"></label><br/>
<label>SoDT: <input type="text" value="<?php echo $row['SoDT']; ?>" name="SoDT"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['Email']; ?>" name="Email"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
$MaKH=$_GET['MaKH'];
$HoTen=$_POST['HoTen'];
$DiaChi=$_POST['DiaChi'];
$SoDT=$_POST['SoDT'];
$Email=$_POST['Email'];

$sql = "UPDATE customer SET HoTen='$HoTen',DiaChi='$DiaChi',SoDT='$SoDT',Email='$Email' WHERE MaKH='$MaKH'";

if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Bạn đã sửa thành công');</script>";
    echo "<script>";
    echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=customers';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>alert('Đã có lỗi khi sửa: ');</script>". $conn->error;
}

$conn->close();
}
?>
</form>
</body>
</html>