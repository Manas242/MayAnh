<table border="1">
<tr>
<td>MaKH</td>
<td>HoTen</td>
<td>DiaChi</td>
<td>SoDT</td>
<td>Email</td>
</tr>
<?php
include("ket_noi.php");
$query=mysqli_query($conn,"select * from customer");
while($row=mysqli_fetch_array($query)){
    ?>
<tr>
<td><?php echo $row['MaKH']; ?></td>
<td><?php echo $row['HoTen']; ?></td>
<td><?php echo $row['DiaChi']; ?></td>
<td><?php echo $row['SoDT']; ?></td>
<td><?php echo $row['Email']; ?></td>
<?php
$link="?thamso=customers_edit&MaKH=".$row['MaKH'];
echo "<td><a href='$link'>Edit</a></td>";
$link="?thamso=customers_delete&MaKH=".$row['MaKH'];
echo "<td><a href='$link'>Delete</a></td>";
?>
</tr>
<?php
}
?>
</table>