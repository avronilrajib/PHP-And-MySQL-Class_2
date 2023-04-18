<?php
 
    require_once("../config/configer.php");
    if(isset($_REQUEST['submit']))
    {
       echo $user=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        $query="INSERT INTO `login_info`(`username`, `email`, `password`) VALUES ('$user','$email','$pass')";
        if(mysqli_query($con,$query))
        {
            header("location:../data_read.php?inserted");
        }
    }



?>