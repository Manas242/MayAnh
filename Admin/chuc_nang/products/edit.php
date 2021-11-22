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
$query=mysqli_query($conn,"select * from products where id='$id'");
$row=mysqli_fetch_assoc($query);
$sql=mysqli_query($conn,"select * from suppliers");
?>
<form method="POST" class="form" id="fromid">
<h2>Sản phẩm</h2>
<label>Username: <input type="text" value="<?php echo $row['Name']; ?>" name="Name"></label><br/>
<label>UnitPrice: <input type="text" value="<?php echo $row['UnitPrice']; ?>" name="UnitPrice"></label><br/>
<label>Image: <input type="text" value="<?php echo $row['Image']; ?>" name="Image"></label><br/>
<label>ProductDate: <input type="date" value="<?php echo $row['ProductDate']; ?>" name="ProductDate"></label><br/>
<label>Available: <input type="text" value="<?php echo $row['Available']; ?>" name="Available"></label><br/>
<label>Description: <textarea rows="20" cols="50" name="Description"><?php echo $row['Description']; ?></textarea></label><br/>
<!--<label>SupplierId: <input type="text" value="<?php echo $row['SupplierId']; ?>" name="SupplierId"></label><br/> -->
<label>SupplierId: 
<?php
echo "<select name='SupplierId'>";
while ($row1 = mysqli_fetch_assoc($sql)) {
    echo "<option value='" . $row1['id'] . "'>" . $row1['id'] . "</option>";
}
echo "</select>";
?>
</label><br/>
<label>Quantity: <input type="text" value="<?php echo $row['Quantity']; ?>" name="Quantity"></label><br/>
<label>Discount: <input type="text" value="<?php echo $row['Discount']; ?>" name="Discount"></label><br/>
<label>Special: <input type="text" value="<?php echo $row['Special']; ?>" name="Special"></label><br/>
<label>Latest: <input type="text" value="<?php echo $row['Latest']; ?>" name="Latest"></label><br/>
<label>Views: <input type="text" value="<?php echo $row['Views']; ?>" name="Views"></label><br/>
<input type="submit" value="Update" name="update">
<?php
if (isset($_POST['update'])){
$id=$_GET['id'];
$Name=$_POST['Name'];
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

$sql = "UPDATE products SET Name='$Name',UnitPrice='$UnitPrice',Image='$Image',ProductDate='$ProductDate',Available='$Available',Description='$Description',SupplierId='$SupplierId',Discount='$Discount',Special='$Special',Latest='$Latest',Quantity='$Quantity',Views='$Views' WHERE id='$id'";

if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'>alert('Bạn đã sửa thành công');</script>";
    echo "<script>";
    echo "location.href = 'http://localhost:81/CNPM/MayAnh/Admin/layout.php?thamso=products';";
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