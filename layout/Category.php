<div class="nn-block">
    <div class="nn-megamenu-sidebar-title"><i class="glyphicon glyphicon-list"></i><h2>categories</h2></div>
    <?php
    include("ket_noi.php");
    $tv="select * from suppliers order by id";
    $tv_1=mysqli_query($conn,$tv);
    echo "<div class='menu_doc' >";
    if(mysqli_num_rows($tv_1)>0)
    {
    while($tv_2=mysqli_fetch_assoc($tv_1))
    {        
        echo "<div class='nn-megamenu-sidebar'>";
        echo "<ul>";
        echo "<li>";
        $link="?thamso=xuat_san_pham&id=".$tv_2['id'];
        echo "<a href='$link'>";
        echo "<span class='col-md-3'>"."<img src='Content/img/icons/$tv_2[Logo]' class='img-responsive'/>"."</span>";
        echo "<span class='col-md-9'>"."<h5>"."<strong>".$tv_2['Name']."</strong>"."</h5>"."</span>";
        echo "</a>";
        echo "</li>";
        echo "</ul>";
        echo "</div>";
    }
    }
    echo "</div>";
    
    ?>
</div><!--end block category-->