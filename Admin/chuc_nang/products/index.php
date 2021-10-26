<?php 
$link="?thamso=products_create";
echo "<a href='$link'>Create</a>";
?>
<table border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>UnitBrief</td>
<td>UnitPrice</td>
<td>Image</td>
<td>ProductDate</td>
<td>Available</td>
<td>Description</td>
<td>SupplierId</td>
<td>Quantity</td>
<td>Discount</td>
<td>Special</td>
<td>Latest</td>
<td>Views</td>
</tr>
<?php
include("ket_noi.php");
$query=mysqli_query($conn,"select * from products");
while($row=mysqli_fetch_array($query)){
    ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['UnitBrief']; ?></td>
<td><?php echo $row['UnitPrice']; ?></td>
<td><?php echo $row['Image']; ?></td>
<td><?php echo $row['ProductDate']; ?></td>
<td><?php echo $row['Available']; ?></td>
<td><?php echo nl2br($row['Description']); ?></td>
<td><?php echo $row['SupplierId']; ?></td>
<td><?php echo $row['Quantity']; ?></td>
<td><?php echo $row['Discount']; ?></td>
<td><?php echo $row['Special']; ?></td>
<td><?php echo $row['Latest']; ?></td>
<td><?php echo $row['Views']; ?></td>
<?php
$link="?thamso=products_edit&id=".$row['id'];
echo "<td><a href='$link'>Edit</a></td>";
$link="?thamso=products_delete&id=".$row['id'];
echo "<td><a href='$link'>Delete</a></td>";
?>
</tr>
<?php
}
?>
</table>