<?php


$username = "root";
$password = "";
$server = 'localhost';
$db = 'crudlogin';


$con = mysqli_connect($server,$username,$password,$db);

if($con){
   // echo "connection Successful";
   ?>
   <script>
    alert('coonnection Successful');
   </script>
   <?php
}else{
    echo "no connection";
}

 
?>