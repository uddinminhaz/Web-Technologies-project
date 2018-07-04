<?php include "../../data/product_access.php"; ?>
<? php
    
    $trackid = $_GET['tr'];
    $status = $_GET['st'];
    if($status == "confirm")
    {
         orderconfirm($trackid);
        header('location:../app/admin/neworders.php');
    }
    else if($status == "cancel")
    {
        ordercancel($trackid);
        header('location:../app/admin/neworders.php');
    }
    else if($status == "shipping")
    {
        sentToshipping($trackid);
        header('location:../app/admin/neworders.php');
    }
    else
    {
        echo"asdfg";
    }
    
    
?>