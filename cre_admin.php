
<?php
include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM admin_log WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'تــکایە خانەکان پڕبکەرۆ';

   }

     else{
         $insert = "INSERT INTO admin_log(name , email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:admin_log.php');
      }
   };


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cre_admin.css">

 
</head>
<body>
    
<div class="cre">

<form action="" method="POST">
<?php
echo "<br>";
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="masg">'.$error.'</span>';
         };
      };
      ?>


        <h1 ><b>زیـادکـردنی ئەکاونت</b></h1>
      <input type="text" name="name" placeholder="نــاو"><br>
      <input type="text" name="email" placeholder="یوزەرنەیم" ><br>
        <input type="password" name="password" placeholder="پاسوەرد" ><br>
          <button  name="submit">نــــاردن</button> <br><br>
          <a href="admin_log.php"> چـونـەژوورەوە</a> 
</form>
</div>

</body>
</html>