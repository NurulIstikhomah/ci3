<!DOCTYPE html>
<html>
<head>
	<title>Blog Saya</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

	<style>
   
    .row.content {height: 1500px}
    
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
   
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
   
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>  	
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h4> Istikomah Blog</h4>
    <ul class="nav nav-pills nav-stacked">
    <li><a href="<?php echo base_url().'blogger'?>">Home</a></li>
    <li><a href="<?php echo site_url('blogger/create')?>">New Artikel</a></li>
    <li><a href="<?php echo base_url().'personal'?>">About Me</a></li>
    </ul><br>
    </div>
