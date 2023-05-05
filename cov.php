
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   
   

   $select = " SELECT * FROM user_log WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_array($result);  
 $_SESSION["login"]=true;
 $_SESSION["id"]=$row["id"];
 header("location: hom.php ");
   
    } else{
      $error[] = 'یوزەرنەیم یان پاسوەرد هەڵەیە';
   }
};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cov.css">

   

<style>


</style>

</head>
<body>
    <h1>ئـۆنـلایـن شـۆپـیـنـگـی عـەنـەب</b></b></h1>
    <div class="fo">
<form action="" method="post">
<h2>چـونـەژوورەوە</h2>

<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="masg">'.$error.'</span>';
         };
      };
      ?>
<input type="email" name="email" placeholder="یوزەرنەیم" required>
<input type="password" name="password" placeholder="پاسوەرد" required><br><br>
<button type="submit" name="submit"><b>چـونـەژوورەوە</b></button><br><br><br>
<a href="create.php"><b>دروستکردنی ئەکاونتی نوێ</b></a>

</form>

    </div>
<img src="ddw.png" alt="" width="35%">

</body>

<footer style="clear: both; background-color: #3b3a55; width: 100%;"><b>2020-2023</b></footer>
</html>