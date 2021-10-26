<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("ket_noi.php");
// $query=mysqli_query($conn,"select * from products");
// $row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form" id="fromid">
<h2>Thương hiệu</h2>
<label>Name: <input type="text" value="" name="Name"></label><br/>
<label>Logo: <input type="text" value="" name="Logo"></label><br/>
<label>Email: <input type="text" value="" name="Email"></label><br/>
<label>Phone: <input type="text" value="" name="Phone"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
$id=$_GET['id'];
$Name=$_POST['Name'];
$Logo=$_POST['Logo'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];

$sql = "insert into suppliers (id,Name,Logo,Email,Phone)
values(NULL,'$Name','$Logo','$Email','$Phone')";

if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Bạn đã thêm thành công');</script>";
    echo "<script>";
    echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=suppliers';";
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