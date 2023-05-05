<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name_yak = mysqli_real_escape_string($conn, $_POST['name_yak']);
   $name_dw = mysqli_real_escape_string($conn, $_POST['name_dw']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['dlnya']);


   $select = " SELECT * FROM user_log WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'تــکایە خانەکان پڕبکەرۆ';

   }else{

      if($pass != $cpass){
         $error[] = 'پاسوەردەکە هەمان شت نییە';
      }else{
         $insert = "INSERT INTO user_log(name_yak ,name_dw, email, password) VALUES('$name_yak','$name_dw','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:cov.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="create.css">
<style>


</style>
</head>
<body>
   
<div class="cre">

   <form action="" method="post">
    <img src="20230422_175336.png" alt="" width="20%">
      <h2><b>دروستکردنی ئەکاونت</b></h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="masg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name_yak" placeholder="ناوی یەکەم">
      <input type="text" name="name_dw" placeholder="ناوی دووەم">
      <input type="email" name="email"  placeholder="یوزەرنەیم">
      <input type="password" name="password"  placeholder="پاسوەرد">
      <input type="password" name="dlnya" placeholder="دڵنیابونەوە">
    
      <button type="submit" name="submit" value="">نــــاردن</button>
     <br><br>
      <a href="cov.php" style=""><b>چـونـەژوورەوە</b></a>
   </form>

</div>

</body>
</html>