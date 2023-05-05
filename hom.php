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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="hom.css">

<style>


</style>

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
          <a class="nav-link" href="#">گـشـتی</a>
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
<img id="img" src="bb.png" width="100%" height="50%" alt="">
<div style="background-color: #eaeaea; width:100%;  height: 400px;">


<div class="fast">
<form action="">
<img  src="qu.png"width="50%" alt="">
<h3>باشترین کوالێتی</h3>
</form>
</div>



<div class="fast">
<form action="">
<img src="mo.png"width="50%" alt="">
<h3>هەرزانترین نرخ</h3>
</form>
</div>


<div class="fast">
<form action="">
<img src="fast.png"width="80%" alt="">
<h3>خێراترین گەیاندن</h3>
</form>
</div>



<div class="fast">
<form action="">
<img src="fr.png"width="50%" alt="">
<h3>گەیاندن بێ بەرامبەر</h3>
</form>
</div>



<div class="box1">
<form action="lacos.php">
<img src="lacos.png" alt=""width="80%">
<p> کۆمپانیایەکی جلوبەرگی فەرەنسییە
 بابەتی جلوبەرگی وەک تیشێرت و بلوز و کراس و پانتۆڵیش پێشکەش دەکات</p>
<button>LACOSTE</button>

</form>
</div>

<div class="box1">
<form action="">
<img src="za.png" alt=""width="80%">
<p>براندێکی مۆدەی خێرا و ئیسپانییە و بە جلوبەرگی مۆدێرن و گونجاو بۆ پیاوان و ئافرەتان و منداڵان ناسراوە</p>
<button>ZARA</button>

</form>
</div>
<div class="box1">
<form action="">
<img src="hm.png" alt=""width="80%">
<p> مارکەیەکی جلوبەرگی سویدییە کە جلوبەرگی گونجاو و مۆدێرن بۆ پیاوان و ئافرەتان و منداڵان پێشکەش دەکات</p>
<button>H&M</button>

</form>
</div>
<div class="box1">
<form action="">
<img src="le.png" alt=""width="80%">
<p>مارکەیەکی جلوبەرگی ئەمریکییە و تایبەتە بە جینزی جینز و کەلوپەلی تری جلوبەرگە</p>
<button>LEVIS</button>

</form>
</div>




<div class="box1">
<form action="">
<img src="ni.png" alt=""width="70%" style="margin:0px 50px;">
<p> کۆمپانیایەکی فرەنەتەوەیی ئەمریکییە کە دیزاین و پەرەپێدان و فرۆشتنی پێڵاو و جلوبەرگ و ئیکسسواراتە وەرزشییەکان دەکات</p>
<button style="position: relative;
   bottom: 13px;">NIKE</button>

</form>
</div>

<div class="box1">
<form action="">
<img src="ad.png" alt=""width="60%" style="margin:0px 50px;">
<p> براندێکی جلوبەرگی وەرزشی ئەڵمانییە و پێڵاو و جلوبەرگ و ئیکسسوارات بۆ وەرزشوانان و ئارەزومەندانی وەرزش بەرهەم دەهێنێت</p>
<button style="position: relative;
   bottom: 18px;">ADIDAS</button>

</form>
</div>
<div class="box1">
<form action="">
<img src="ck.png" alt=""width="80%">
<p>مارکەیەکی مۆدە و چەندین جۆری جلوبەرگ پێشکەش دەکات، لەوانە و کراس و عەزی و جلی ژێرەوە و ئیکسسوارات </p>
<button style="position: relative;
   bottom: 25px;">CK</button>

</form>
</div>
<div class="box1">
<form action="">
<img src="un.png" alt=""width="80%">
<p> مارکەیەکی ئەمریکییە بۆ جلوبەرگی وەرزشی کە جل و بەرگی نمایشی و پێڵاو و ئیکسسوارات بۆ وەرزشوانان بەرهەم دەهێنێت</p>
<button style="position: relative;
   bottom: 25px;">UNDER</button>

</form>
</div>









</div>



</div></div>



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