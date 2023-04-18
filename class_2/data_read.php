<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataread</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>SERIAL</th>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
           
                <?php
                require_once("config/configer.php");
                $data="SELECT * FROM `login_info`";
                $query=mysqli_query($con,$data);
                $count=0;
                while($row=mysqli_fetch_assoc($query))
                {
                
                 $id=$row['id'];    
                 $username=$row['username'];
                 $email=$row['email'];
                 $pass=$row['password'];
                 $count++;
                 ?>
                  <tr>
                  <td><?php echo $count?></td>
                  <td><?php echo $id?></td>
                  <td><?php echo $username?></td>
                  <td><?php echo $email?></td>
                  <td><?php echo $pass?></td>
                  <td><a href="php_core/delete.php?id=<?php echo $id?>">DELETE</a></td>
                 <?php

                }

                 
                ?>
               
            </tr>
        </tbody>
    </table>
</body>
</html>