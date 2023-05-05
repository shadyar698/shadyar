<?php
@include 'config.php';


if(isset($_POST['submit'])){
$name = htmlspecialchars($_POST['name']);
$rasm = htmlspecialchars($_POST['rasm']);
$nrx = htmlspecialchars($_POST['nrx']);
$query = mysqli_query($conn , "INSERT INTO `lacost`(`name`,`nrx`,`rasm`) VALUES ('$name','$nrx','$rasm') ");
if($query){
  header("location: dash.php");
}


}

?>