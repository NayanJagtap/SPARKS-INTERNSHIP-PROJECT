<?php
$conn=mysqli_connect('localhost:3308','root','','paymentgateway');
if(!$conn){
  die('Connection failed: '.mysqli_connect_error());
}

//echo('Connected');
?>