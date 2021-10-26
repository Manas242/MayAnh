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
$sql=mysqli_query($conn,"select * from suppliers");
?>
<form method="POST" class="form" id="fromid">
<h2>Sản phẩm</h2>
<label>Username: <input type="text" value="" name="Name"></label><br/>
<label>UnitBrief: <input type="text" value="" name="UnitBrief"></label><br/>
<label>UnitPrice: <input type="text" value="" name="UnitPrice"></label><br/>
<label>Image: <input type="text" value="" name="Image"></label><br/>
<label>ProductDate: <input type="date" value="" name="ProductDate"></label><br/>
<label>Available: <input type="text" value="" name="Available"></label><br/>
<label>Description: <textarea rows="20" cols="50" name="Description"></textarea></label><br/>
<label>SupplierId: 
<?php
echo "<select name='SupplierId'>";
while ($row1 = mysqli_fetch_assoc($sql)) {
    echo "<option value='" . $row1['id'] . "'>" . $row1['id'] . "</option>";
}
echo "</select>";
?>
</label><br/>
<label>Quantity: <input type="text" value="" name="Quantity"></label><br/>
<label>Discount: <input type="text" value="" name="Discount"></label><br/>
<label>Special: <input type="text" value="" name="Special"></label><br/>
<label>Latest: <input type="text" value="" name="Latest"></label><br/>
<label>Views: <input type="text" value="" name="Views"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
$id=$_GET['id'];
$Name=$_POST['Name'];
$UnitBrief=$_POST['UnitBrief'];
$UnitPrice=$_POST['UnitPrice'];
$Image=$_POST['Image'];
$ProductDate=$_POST['ProductDate'];
$Available=$_POST['Available'];
$Description=$_POST['Description'];
$SupplierId=$_POST['SupplierId'];
$Quantity=$_POST['Quantity'];
$Discount=$_POST['Discount'];
$Special=$_POST['Special'];
$Latest=$_POST['Latest'];
$Views=$_POST['Views'];

$sql = "insert into products (id,Name,UnitBrief,UnitPrice,Image,ProductDate,Available,Description,SupplierId,Quantity,Discount,Special,Latest,Views)
values(NULL,'$Name','$UnitBrief','$UnitPrice','$Image','$ProductDate','$Available','$Description','$SupplierId','$Quantity','$Discount','$Special','$Latest','$Views')";

if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Bạn đã thêm thành công');</script>";
    echo "<script>";
    echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=products';";
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