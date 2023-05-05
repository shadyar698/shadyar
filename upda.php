<?php
@include 'config.php';

 
 if(isset($_POST['update'])){
 $id1 =  $_POST['id1'];
  $namee = $_POST['naww'];
  $nrxx = $_POST['nrxx'];
  $query = mysqli_query($conn , "UPDATE `lacost` SET `name`='$namee',`nrx`='$nrxx' where `id`='$id1'");
 if($query){
  header("location:dash.php");
}
 
 
}
?>


