<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
include("ket_noi.php");
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from suppliers where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form" id="fromid">
<h2>Thương hiệu</h2>
<label>Name: <input type="text" value="<?php echo $row['Name']; ?>" name="Name"></label><br/>
<label>Logo: <input type="text" value="<?php echo $row['Logo']; ?>" name="Logo"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['Email']; ?>" name="Email"></label><br/>
<label>Phone: <input type="text" value="<?php echo $row['Phone']; ?>" name="Phone"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
$id=$_GET['id'];
$Name=$_POST['Name'];
$Logo=$_POST['Logo'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];

$sql = "UPDATE suppliers SET Name='$Name',Logo='$Logo',Email='$Email',Phone='$Phone' WHERE id='$id'";

if ($conn->query($sql) == TRUE) {
echo "<script type='text/javascript'>alert('Bạn đã sửa thành công');</script>";
echo "<script>";
echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=suppliers';";
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