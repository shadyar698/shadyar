




<?php

@include 'config.php';

session_start();

if(!empty($_SESSION["id"])){
   $id=$_SESSION["id"];
   $result=mysqli_query($conn,"SELECT * FROM user_log WHERE id =$id");
  $row= mysqli_fetch_array($result);
}  
else{

   header('location: cov.php');
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="zhn.css">



</head>
<body>
    


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>تۆپ فاشیۆن</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item">
          <a class="nav-link" href="#">کـڕیـن</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="hom.php">گـشـتی</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">دەربـارە</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">کارتی بانک</a>
        </li>
       
      
      </ul>
      <form class="d-flex" >
        <input  type="search" placeholder="گەڕان" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><b>گەڕان</b></button>
      </form>
    </div>
  </div>
</nav>
      
    
 

<div class="chap">
   <img src="acount.png" alt="" width="40%">
  <h1 ><?php echo $row["name_yak"]." " .$row["name_dw"]  ?></h1>
  
  <h1 id="xat">ـــــــــــــــــــــــــــــــــــــ</h1>
  <br>
  <div class="ull"><h3>پـۆشـاک و کـاڵـاکـان</h3>
<ul>
   
<li><a href="">تـیـشـێـڕت</a></li>
<li><a href="">پـانـتـۆڵ</a></li>
<li><a href="">عـایـنـەک</a></li>
<li><a href="">کـاتـژمـێـر</a></li>
<li><a href="">پـاڵـتـاو</a></li>

</ul>
</div>
  <h5><a href="">Setting</a> <br><a href="">Help</a> <br><a href="cov.php">Logout</a></h5>
</div>


<div class="r"><div class="nus">
<div style="background-color: #eaeaea; width:100%;  height: 400px;">

<div class="bu">
    <form action="lacos.php">
<button id="pyaw">پــیــاوان</button>
<button id="zhn">ژنــان</button>
<h3>ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</h3>
</form></div>

</div>
</div>
</div>






<footer>
<div class="fot">
<form action="">
<img src="fac.png" alt="" width="3%">
<img src="ins.png" alt="" width="3%">
<img src="vi.png" alt="" width="3%">
<h2>Ahmad - Bashir - Mohammed <br><br>
2020 - 2023</h2>

</form>
</div>

</footer>


</body>
</html>