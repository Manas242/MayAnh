<?php
if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
switch($tham_so)
{
    case NULL:
        include("layout/Body.php");
        break;
    case "xuat_san_pham":
        include("chuc_nang/xuat.php");
        break;
    case "san_pham_chi_tiet":
        include("chuc_nang/chi_tiet_sp.php");
        break;
    case "tim_kiem":
        include("chuc_nang/tim_kiem.php");
        break;
    default:
}
?>