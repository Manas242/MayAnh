<?php 
$link="?thamso=suppliers_create";
echo "<a href='$link'>Create</a>";
?>
<table border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Logo</td>
<td>Email</td>
<td>Phone</td>
</tr>
<?php
include("ket_noi.php");
$query=mysqli_query($conn,"select * from suppliers");
while($row=mysqli_fetch_array($query)){
    ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Logo']; ?></td>
<td><?php echo $row['Email']; ?></td>
<td><?php echo $row['Phone']; ?></td>
<?php
$link="?thamso=suppliers_edit&id=".$row['id'];
echo "<td><a href='$link'>Edit</a></td>";
$link="?thamso=suppliers_delete&id=".$row['id'];
echo "<td><a href='$link'>Delete</a></td>";
?>
</tr>
<?php
}
?>
</table>