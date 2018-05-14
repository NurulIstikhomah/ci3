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

      <header class="header" id="top">
      <div class="text-vertical-center">
<h1><p align="center">Tambah Artikel</h1><br></p>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger">Find Out More</a>
      </div>
    </header>

<div class="container">
<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>

<?php 
	echo validation_errors();
	echo form_open_multipart('blogger/create', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
  <h2>Create Kategori</h2><br>
<tr>
<!-- <b>Judul : <input type="text" class="form-control" name="title"><br><br>
<b>Artikel : <textarea name="artikel" class="form-control" style="height:400px;"></textarea><br><br>
<b>Kategori : <div class="section_room">
  <select id="country" onchange="change_country(this.value)" class="frm-field required">
    <option value="null">Pilih Kategori</option>
    <option value="null">Fiksi</option>         
    <option value="AX">Non Fiksi</option>
    <option value="AX">Budaya</option>
  </select> 
</div> <br><br>
<b>File : <input type="file" name="gambar" id="submitBtn"><br><br> -->

<b>Judul : <input type="text" class="form-control" name="cat_name"><br><br>
<b>Deskripsi : <textarea name="cat_description" class="form-control" style="height:400px;"></textarea><br><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>


<?php 
 ?>


<!-- <?php 
	/*echo validation_errors();
	echo form_open('Blog/create')*/
?> -->
<!-- <h3 align="center">Tambah Data </h3><br>
Judul : <input type="text" class="form-control" name="judul"><br>
Tanggal : <input type="date" class="form-control" name="tgl"><br>
Author : <input type="text" class="form-control" name="author"><br>
Konten : <textarea name="konten" class="form-control" style="height:400px;"></textarea><br>
Image : <input type="file" class="form-control" name="Image"><br>
<input type="submit" class="btn btn-defaule" value="add">
</div> -->
<!-- <?php
  /*if(validation_errors()){
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong>".validation_errors()."
        </div>"*/
        ;
  
?> -->

