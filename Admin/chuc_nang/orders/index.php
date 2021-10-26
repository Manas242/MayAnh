<table border="1">
<tr>
<td>SoHD</td>
<td>MaKH</td>
<td>NgayLapHD</td>
<td>DiaChiGiaoHang</td>
<td>GhiChu</td>
<td>TongTien</td>
</tr>
<?php
include("ket_noi.php");
$query=mysqli_query($conn,"select * from hoadon");
while($row=mysqli_fetch_array($query)){
    ?>
<tr>
<td><?php echo $row['SoHD']; ?></td>
<td><?php echo $row['MaKH']; ?></td>
<td><?php echo $row['NgayLapHD']; ?></td>
<td><?php echo $row['DiaChiGiaoHang']; ?></td>
<td><?php echo $row['GhiChu']; ?></td>
<td><?php echo $row['TongTien']; ?></td>
</tr>
<?php
}
?>
</table>