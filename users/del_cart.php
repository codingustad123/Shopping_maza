<?php
include 'conn.php' ;



  


$url_id=$_GET['id'];
$query="DELETE FROM `cart` WHERE product_id=$url_id";

$res=mysqli_query($conn,$query);
header('location:cart.php');

?>