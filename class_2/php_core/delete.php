<?php
require_once("../config/configer.php");
 if(isset($_REQUEST['id']))
 {
     $id=$_REQUEST['id'];
     $delete="DELETE FROM `login_info` WHERE id=$id";
    if( mysqli_query($con,$delete))
    {
        header("location:../data_read.php?Deleted");
    }

 }

?>