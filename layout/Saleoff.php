<div class="nn-block">
    <div class="nn-megamenu-sidebar-title"><i class="glyphicon glyphicon-tags"></i><h2>Sale off</h2></div>
    <?php 
    include("ket_noi.php");
    $tv="select * from products where Discount>0 order by id limit 2";
    $tv_1=mysqli_query($conn,$tv);
    if(mysqli_num_rows($tv_1)>0)
    {
        while($tv_2=mysqli_fetch_assoc($tv_1))
        {   
    {
        echo "<div class='nn-product-box'>";
                $link_chi_tiet="?thamso=san_pham_chi_tiet&id=".$tv_2['id'];
                echo "<a href='$link_chi_tiet'>";
                echo "<img class='img-responsive' src='Content/img/products/$tv_2[Image]' />";
                echo "</a>";
            echo "<div class='nn-product-box-descriptions'>";
                echo "<h3 class='nn-product-box-name'>";
                    $link_chi_tiet="?thamso=san_pham_chi_tiet&id=".$tv_2['id'];
                    echo "<a href='$link_chi_tiet' title='$tv_2[Name]'>$tv_2[Name]";
                    echo "</a>";
                echo "</h3>";
                echo "<div class='nn-product-box-price '>";
                    echo "<span class=''>$tv_2[UnitPrice]</span>";
                echo "</div>";
                echo "<div class='nn-product-box-actions'>";
                    echo "<button type='button' title='Add to Cart' class='btn btn-default add-to-cart' data-id='@p.Id'>";
                        echo "<span>Add to Cart</span>";
                    echo "</button>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
        }
    }
    ?>
</div><!--end block sale off-->