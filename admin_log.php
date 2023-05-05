
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   
   

   $select = " SELECT * FROM admin_log WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);  
 $_SESSION["login"]=true;
 $_SESSION["id"]=$row["id"];
 header("location: dash.php ");
   
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
   

<style>

body{
   background:linear-gradient(0deg,#f2e5e5,#ce7777);
}
h1{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color:#3b3a55;
    width:600px;
    color: #f2e5e5;
    font-size: 45px;
    
text-align: center;
    margin: 40px auto;

}
.fo form{
    background-color: #3b3a55;
    float: right;
    width: 320px;
    height: 400px;
    margin-right: 150px;
    margin-top: 60px;
    box-shadow: 2px 3px 0px #959494;
}
.fo h2{
    text-align: center;
    color: #f2e5e5;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 30px;


}
.fo input{
    margin: 13px;
    padding: 10px;
    width: 250px;
   border: none;
   background-color: #e8c4c4;
   color: #3b3a55;
   font-size: 17px;
   position: relative;
   left: 12px;
   
}
::placeholder{
    font-size: 20px;
    color: #3b3a55;
}
.fo button{
    width: 270px;
    margin-left: 25px;
    padding: 8px;
    font-size: 22px;
    font-family: 'Times New Roman', Times, serif;
    background-color: #ce7777;
border: none;
cursor: pointer;
color: #3b3a55;

}
.fo button:hover{
   background-color: #f2e5e5;
}
.fo a{
    text-decoration: none;
    font-size: 18px;
    color: #f2e5e5;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
margin-left: 80px;
}
.fo a:hover{
    text-decoration:underline;
    color: #ce7777;
}
img{
margin: 0px 100px;

}
footer{
    height:  30px;
    text-align: center;
    font-size: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: #f2e5e5;
letter-spacing: 4px;
margin-top: 26px;

}




   .masg{
      background-color:#d91539; 
      color:#f2f2f2;
   
      margin-left:50px;
      font-size:20px;
      padding: 5px;
   }
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
<button type="submit" name="submit" value="login now"><b>چـونـەژوورەوە</b></button><br><br><br>
<a href="cre_admin.php"><b>دروستکردنی ئەکاونتی نوێ</b></a>

</form>

    </div>
<img src="ddw.png" alt="" width="35%">

</body>

<footer style="clear: both; background-color: #3b3a55; width: 100%;"><b>2020-2023</b></footer>
</html>