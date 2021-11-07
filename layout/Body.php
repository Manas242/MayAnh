<?php
    include("ket_noi.php");
    $so_du_lieu=8;
    $tv="select count(*) so from products";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_assoc($tv_1);
    $so_trang=ceil($tv_2['so']/$so_du_lieu);
    if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
    $current_page = isset($_GET['trang']) ? $_GET['trang'] : 1;
    $tv="select * from products order by id limit $vtbd,$so_du_lieu";
    $tv_1=mysqli_query($conn,$tv);
    if(mysqli_num_rows($tv_1)>0)
    {
    while($tv_2=mysqli_fetch_assoc($tv_1))
    {   
                echo "<div class='col-md-3' style='height:400px;'>";
                echo "<div class='nn-product-box'>";
                $link_chi_tiet="?thamso=san_pham_chi_tiet&id=".$tv_2['id'];
                echo "<a href='$link_chi_tiet'>";
                echo "<img class='img-responsive' src='Content/img/products/$tv_2[Image]'/>";
                echo "</a>";
                echo "<div class='nn-product-box-descriptions'>";
                echo "<h3 class='nn-product-box-name'>";
                echo "<a href='$link_chi_tiet' title=''>$tv_2[Name]</a>";
                echo "</h3>";
                echo "<div class='nn-product-box-price '>";
                echo "<span class=''>$tv_2[UnitPrice]</span>";
                echo "</div>";
                echo "<div class='nn-product-box-actions'>";
                echo "<button type='button' title='Add to Cart' class='btn btn-default add-to-cart' data-id='$tv_2[id]'>";
                echo "<span>Add to Cart</span>";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";                    
    } 
    echo "<tr>";
    echo "<td colspan='3' align='center' >";
    echo "<div id='phan-trang' class='col-md-3' style='float:none;'>";
    echo "<div class='phan_trang' >";
    for($i=1;$i<=$so_trang;$i++)
    {
        if ($i == $current_page){
            echo '<span>'.$i.'</span> ';
        }
        else{
            $link="?trang=".$i;
            echo "<a href='$link' >";
            echo $i;echo " ";
            echo "</a>";
        }

    }
    echo "</div>";
    echo "</div>";
    echo "</td>";
    echo "</tr>";
    }
?>