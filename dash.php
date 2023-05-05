<?php

@include 'config.php';


@include 'insert.php';
@include 'upda.php';



session_start();

if(!empty($_SESSION["id"])){
   $id=$_SESSION["id"];
   $result=mysqli_query($conn,"SELECT * FROM admin_log WHERE id =$id");
  $row= mysqli_fetch_array($result);
}  
else{

   header('location: admin_log.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="dash.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




<style>
    .box1  a{
        float: right;
        background-color: #c22626;
        color: #f2e5e5;
        padding: 6px;
        font-size: 27px;
       font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin: 10px;
        position: relative;
        left: 10px;
        bottom: 82px;
        height: 69px;
        text-decoration: none;
        width: 130px;
        text-align: center;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;

    }

  
.inse input{
        background-color: #f2e5e5;
        color: #3b3a55;
        margin: 20px;
        border: none;
        padding: 10px;
        height: 45px;
        width: 150px;
        margin-top: 35px;
        font-weight: bold;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 20px;
        }





::placeholder{
color:black;
  text-align: center;
}</style>


</head>

<body>


<div class="chap">
   <img src="acount.png" alt="" width="40%">
  <h1 ><?php echo $row["name"]  ?></h1>
  
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
  <h5><a href="">Setting</a> <br><a href="lacos.php">Help</a> <br><a href="admin_log.php">Logout</a></h5>
</div>




<div class="r"><div class="nus">
<div style="background-color: #eaeaea; width:100%;  height: 400px;">














      <div class="inse" >
<form action="dash.php"method="POST">
  <h1>زیـادکـردنی کـاڵـاکـان</h1>
      <input type="text" name="name" placeholder="نـاوی کـاڵا"  required>
      <input type="text" name="rasm" placeholder="image" required >

      <input type="text" name="nrx" placeholder="نـرخـی کـاڵا" required >
        <button  name="submit">زیـادکـردن</button>
</form>
</div>


<?php

if(isset($_GET['delete'])){   // ankar tag   get bakar   agar ankar tage deletw krd amaw bo bka
$id = htmlspecialchars($_GET['delete']);   // bo wargrtne idyaka
$query =  mysqli_query($conn, "delete from `lacost` where  `id` = '$id' ");
if($query){
    header("location: dash.php");
  }

}

?>





<div class="box1">
  <?php

   









$query=mysqli_query($conn, "SELECT * from `lacost` ");
while($row = mysqli_fetch_assoc($query)){?>

<form action="">
<h2 id="naw"><?php echo $row['name']; ?></h2>
<h3 id="nrx"><?php echo $row['nrx']; ?></h3>


<a href="dash.php?delete=<?php echo $row['id']; //ba pey id delete akaen ?>">شۆردنەوە</a>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#post<?php echo $row['id']; ?>" style="background-color:red; float:right;  position: relative;
        bottom:75px; background-color: #0b56c7;
        font-size: 26px;
        padding: 15px;
        font-weight: bold;
        border: none; ">
ئـەبـدەیـت
</button>
<form action="dash.php"method="POST">
<!-- Modal -->
<div class="modal fade" id="post<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>ئەبدەتکردنی کـاڵا</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body" >
       <input type="text" value="<?php echo $row['id'];?>" name="id1" hidden >
       
  <input type="text" name="naww" placeholder="نـاوی کـاڵا"     
       style=" background-color: #f2e5e5;
        color: #3b3a55;
        padding: 5px;
        font-size: 20px;
        width: 400px;
        margin: 20px;
        font-weight: bold;"  value="<?php echo $row['name'];?>"><br>
    <input type="text" name="nrxx" placeholder="نـرخـی کـاڵا"     
      style=" background-color: #f2e5e5;
        color: #3b3a55;
        padding: 5px;
        font-size: 20px;
        width: 400px;
        margin: 20px;
        font-weight: bold;"  value="<?php echo $row['nrx'];?>">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">هەڵوەشایەوە</button>
        <button  name="update" type="submit" class="btn btn-primary">ئـەبـدەیـت</button>
      </div>

    </div>
  </div>
</div>
</form>


</form>
<?php } ?>
</div>









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
</html><?php
?>