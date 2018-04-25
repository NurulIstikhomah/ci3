 <!DOCTYPE html>
<html lang="en">

  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webku</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="http://localhost:8080/ci3/assets/css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body>

<nav class="navbar navbar-defa">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar"> -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

 <a class="navbar-brand" href="#">Nurul Istikhomah</a>
    </div>
    <!-- <div class="collapse navbar-collapse" id="mainNavbar"> -->
      <ul class="nav navbar-nav">
        <?php echo "<li><a href='".site_url('Blogger/index/')."'>Home</a></li>"?>
        <?php echo "<li><a href='".site_url('Blogger/about/')."'>About</a></li>"?>
        <?php echo "<li><a href='".site_url('Blogger/blog/')."'>Blog</a></li>"?>
      </ul>


<div class="container">
<?php 
  echo validation_errors();
  echo form_open('Blog/create')
?>
<h3 align="center">Tambah Data </h3><br>
Judul : <input type="text" class="form-control" name="judul"><br>
Tanggal : <input type="date" class="form-control" name="tgl"><br>
Author : <input type="text" class="form-control" name="author"><br>
Konten : <textarea name="konten" class="form-control" style="height:400px;"></textarea><br>
Image : <input type="file" class="form-control" name="Image"><br>
<input type="submit" class="btn btn-defaule" value="add">
</div>