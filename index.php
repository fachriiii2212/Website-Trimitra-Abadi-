<?php
  session_start();
  include('koneksi/koneksi.php');
  if(isset($_GET["include"])){
    $include = $_GET["include"];
    if ($include=="konfirmasi-tambah-recruitment"){
      include("include/konfirmasitambahrecruitment.php");
    
    } 
  }
?>
<!doctype html>
<html lang="en">
<head>
  <?php include("includes/head.php");?>
</head>
  <body>
  <?php
  //pemanggilan konten halaman index

  if(isset($_GET["include"])){
  $include = $_GET["include"];
    if($include=="detail-blog"){
      include("include/blog-details.php");
    }else{
      include("include/index.php");
    }
  }else{
  include("include/index.php");
  }
  ?>
  <?php include("includes/footer.php");?>
  <?php include("includes/script.php");?>
  </body>
</html>