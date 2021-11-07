<?php
include("ket_noi.php");
$id=$_GET['id'];
$tv="select * from products where id='$id'";
$km="select * from products where id='$id' and Discount>0";
$th="select suppliers.Name name from suppliers,products where products.id=$id and suppliers.id=products.SupplierId";
$th_1=mysqli_query($conn, $th);
$km_1=mysqli_query($conn,$km);
$tv_1=mysqli_query($conn,$tv);
$tv_2=mysqli_fetch_assoc($tv_1);
$km_2=mysqli_fetch_assoc($km_1);
$th_2=mysqli_fetch_assoc($th_1);
$link_anh="Content/img/products/".$tv_2['Image'];
echo "<div class='chi-tiet' style='margin-top:50px'>";
echo "<table>";
echo "<tr>";
echo "<td width='250px' align='center' >";
echo "<img src='$link_anh' width='150px' >";
echo "</td>";
echo "<td valign='top' >";
echo "<p style='font-weight: bold;font-size:16px;'>$tv_2[Name]</p>";
echo "<br>";
echo nl2br($tv_2['Description']);
echo "<br>";
echo "<br>";
echo "Số lượng: ";
echo $tv_2['Quantity'];
echo " sản phẩm";
echo "<br>";
echo "<br>";
if(mysqli_num_rows($km_1)>0)
{
    echo "Giá bán: ";
    echo "<del>";
    echo $tv_2['UnitPrice'];
    echo "$";
    echo "</del>";
    echo " (tiết kiệm ".$tv_2['Discount']*100;
    echo "%)";
    echo "<br>";
    echo "<br>";
    echo "Giá khuyến mãi: ";
    echo "<n style='color:red;font-weight:bold;'>";
    $giakm=$tv_2['UnitPrice']*(1-$tv_2['Discount']);
    echo $giakm;
    echo "$";
    echo "</n>";
    echo "<br>";
    echo "<br>";
}
else {
    echo "Giá bán: ";
    echo "<n style='color:red;font-weight:bold;'>";
    echo $tv_2['UnitPrice'];
    echo "$";
    echo "</n>";
    echo "<br>";
    echo "<br>";
}
echo "Thương hiệu: ".$th_2['name'];
echo "<br>";
echo "<br>";
echo "<div class='nn-product-box-actions'>";
echo "<button type='button' title='Add to Cart' class='btn btn-default add-to-cart' data-id='$tv_2[id]'>";
echo "<span>Add to Cart</span>";
echo "</button>";
echo "</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
?>