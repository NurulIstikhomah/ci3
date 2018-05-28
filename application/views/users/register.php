<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webkuuuu</title>

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
      <!-- </button> -->
      <a class="navbar-brand" href="#">Nurul Istikhomah</a>
    </div>
        <!-- </div> -->
  </div>
</nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Registrasi User</h1>
        <h3> Scroll Ke Bawah! :)</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>

<!-- Begin page content -->
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"><?php	echo $page_title ?></h1>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<?php
						$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
					?>
					<?php echo validation_errors(); ?>
					<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
					<div class="form-group">
						<label>Nama Lengkap</label><br>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
					</div>
						<br>
							
					<div class="form-group">
						<label>Kodepos</label><br>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
					</div>
						<br>
							
					
					<div class="form-group">
						<label>Email</label><bR>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
						<br>
							
					<div class="form-group">
						<label>Username</label><br>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
						<br>
							
					<div class="form-group">
						<label>Password</label><br>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
						<br>
							
					<div class="form-group">
						<label>Konfirmasi Password</label><br>
						<input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
					</div>
						<br>
							<br>
					<button type="submit" class="btn btn-primary btn-block">Register</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>
</main>

