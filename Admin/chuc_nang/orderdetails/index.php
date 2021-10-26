<table border="1">
<tr>
<td>ID</td>
<td>SoHD</td>
<td>MaSP</td>
<td>SoLuong</td>
</tr>
<?php
include("ket_noi.php");
$query=mysqli_query($conn,"select * from chitiethd");
while($row=mysqli_fetch_array($query)){
    ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['SoHD']; ?></td>
<td><?php echo $row['MaSP']; ?></td>
<td><?php echo $row['SoLuong']; ?></td>
</tr>
<?php
}
?>
</table>