<!DOCTYPE html>
<html lang="en">

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>webku</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <!-- <script src="http://localhost:8080/ci3/assets/vendor/jquery/jquery.min.js"></script> -->

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

    <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/g3.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Pengalaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Pendidikan</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="blogger">My Blog</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"><?php echo $name['firstname']?>
            <span class="text-primary"><?php echo $name['lastname']?></span>
          </h1>
          <div class="subheading mb-5"><?php echo $address; ?>
            <a href="mailto:<?php echo $email ?>"><?php echo $email?></a>
          </div>
          <p class="mb-5"><?php echo $about?></p>
         <!--  <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul> -->

     <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Nurul Istikhomah</h1>
        <h3> Welcome To My Personal WEB &amp; Enjoy Guys</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <p align="center"><strong>Nurul Istikhomah</strong></p>
            </h4>
            <p align="center"> Balongbendo
              <br>Sidoarjo , Indonesia</p>
            <ul class="list-unstyled">
        
                <p align="center"> <i class="fa fa-phone fa-fw"></i>
                Watugong <br> Malang , Indonesia</p>
              
                <p align="center"><i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:name@example.com">nurulistik5@gmail.com</a>
              </p>
            </ul>
           <!--  <br>
            <ul class="list-inline">
              <class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              
              <class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
              </a>
              
              <class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble fa-fw fa-3x"></i>
                </a>
              
            </ul> -->
            <hr class="small">
            <p align="center" class="text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="http://localhost:8080/ci3/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8080/ci3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://localhost:8080/ci3/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="http://localhost:8080/ci3/assets/js/stylish-portfolio.js"></script>

  </body>

</html>
