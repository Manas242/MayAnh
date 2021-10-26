<?php
if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
switch($tham_so)
{
    case NULL:        
        break;
        
    case "products":
        include("chuc_nang/products/index.php");
        break;
    case "customers":
        include("chuc_nang/customers/index.php");
        break;
    case "orders":
        include("chuc_nang/orders/index.php");
        break;
    case "orderdetails":
        include("chuc_nang/orderdetails/index.php");
        break;
    case "suppliers":
        include("chuc_nang/suppliers/index.php");
        break;
        
    case "products_edit":
        include("chuc_nang/products/edit.php");
        break;
    case "products_delete":
        include("chuc_nang/products/delete.php");
        break;
    case "products_create":
        include("chuc_nang/products/create.php");
        break;
    case "suppliers_edit":
        include("chuc_nang/suppliers/edit.php");
        break;
    case "suppliers_delete":
        include("chuc_nang/suppliers/delete.php");
        break;
    case "suppliers_create":
        include("chuc_nang/suppliers/create.php");
        break;
    case "customers_edit":
        include("chuc_nang/customers/edit.php");
        break;
    case "customers_delete":
        include("chuc_nang/customers/delete.php");
        break;
    default:
}
?>