<?php
include 'system_files/conn.php' ;



  


$url_id=$_GET['p_id'];
$query="DELETE FROM `deal` WHERE p_id='$url_id'";
$res=mysqli_query($conn,$query);
header('location:view_deal.php');


?>