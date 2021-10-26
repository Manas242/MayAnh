<?php
    include("ket_noi.php");
    $search = addslashes($_GET['tu_khoa']);
    if(empty($search))
    {
          echo "<script type='text/javascript'>alert('Bạn chưa nhập từ khóa vào ô tìm kiếm');</script>";
    }
    else 
    {
    $tv="select * from products where Name like '%$search%'";
    $tv_1=mysqli_query($conn,$tv);
    if(mysqli_num_rows($tv_1)>0)
    {
    while($tv_2=mysqli_fetch_assoc($tv_1))
    {   
                echo "<div>";
                echo "<div class='col-md-3'>";
                echo "<div class='nn-product-box'>";
                $link_chi_tiet="?thamso=san_pham_chi_tiet&id=".$tv_2['id'];
                echo "<a href='$link_chi_tiet'>";
                echo "<img class='img-responsive' src='Content/img/products/$tv_2[Image]'/>";
                echo "</a>";
                echo "<div class='nn-product-box-descriptions'>";
                echo "<h3 class='nn-product-box-name'>";
                echo "<a href='' title=''>$tv_2[Name]</a>";
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
                echo "</div>";             
    }                
    }
    else {
        echo "<script type='text/javascript'>alert('Không tìm thấy kết quả');</script>";
    }
    }
    echo  "</div>";
?>