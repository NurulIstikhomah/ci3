<!DOCTYPE html>
<html lang="en">

  <head>

<!--     <style>
.blog {
    background-color: red;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: black;
    min-width: 200px;
}
.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style> -->
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
<?php $this->load->helper('text'); ?>
<!-- <nav class="navbar navbar-defa">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->        
      <!-- </button> -->
      <a class="navbar-brand" href="#">Nurul Istikhomah</a>

    
    <!-- </div> -->

    <!-- <div class="collapse navbar-collapse" id="mainNavbar"> -->
      <ul class="nav navbar-nav">
        <?php echo "<li><a href='".site_url('Blogger/index/')."'>Home</a></li>"?>
        <?php echo "<li><a href='".site_url('Blogger/about/')."'>About</a></li>"?>
        <?php echo "<li><a href='".site_url('Blogger/blog/')."'>Blog</a></li>"?>
      

      <?php if(!$this->session->userdata('logged_in')) : ?>
        <?php echo "<li><a href='".site_url('User/login/')."'>Login</a></li>"?>
        <?php echo "<li><a href='".site_url('User/register/')."'>Register</a></li>"?>
      <?php endif; ?>
    </ul>
    <!-- </div> -->
  </div>
</nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>My Blog</h1>
        <h3> Welcome See My Blog</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>


    <!-- BLOG -->
    <section id="services" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>My Blog</h2>
              <p align="right">
   <!--  <button type="submit" href="Home" class="btn btn-default"><a href="home1"> Home</a></button></h3>
 
    <button type="submit" href="Blogger" class="btn btn-default"><a href="blogger/create"> Create</a></button></h3></p>
  </div> -->
            <a href="<?php echo site_url('blogger/create')?>">Artikel Baru</a>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                     <strong>What Is Framework?</strong>
                  </h4>
                  <p align="center"> Framework atau bahasa indonesianya kerangka kerja adalah sebuah software untuk memudahkan para programmer membuat aplikasi atau web yang isinya adalah berbagai fungsi, plugin, dan konsep sehingga membentuk suatu sistem tertentu. Dengan menggunakan framework, sebuah aplikasi akan tersusun dan terstruktur dengan rapi.</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
              
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>


<section id="list" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>My Blog</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>CodeIgniter</strong>
                  </h4>
                  <p>CodeIgniter adalah aplikasi Open Source yang berarti Framework  dengan Model  MVC (Model, View, Controller) untuk membuat web dinamis dengan menggunakan PHP. CodeIgniter memudahkan Devoper untuk membuat aplikasi web dengan cepat dan mudah. CodeIgniter dirilis pertama kali pada 28 Februari 2006. Versi stabili terakhir 3.0.3, 1 November 2015..</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>

                </div>
              </div>
              
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>


    <section id="bara" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>My Blog</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>What Is PHP?</strong>
                  </h4>
                  <p>adalah singkatan dari "PHP: Hypertext Prepocessor", yaitu bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan pengembangan sebuah situs web dan bisa digunakan bersamaan dengan HTML. PHP diciptakan oleh Rasmus Lerdorf pertama kali tahun 1994..</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
              
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>


            <!-- /.row (nested) -->
            <a href="#" class="btn btn-dark">View More Items</a>
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <p align="center"><strong>Nurul Istikhomah</strong>
            </h4></p>
            <p align="center">Balongbendo
              <br>Sidoarjo , Indonesia</p>
            <ul class="list-unstyled">
            
                <i class="fa fa-phone fa-fw"></i> <p align="center"> 
                085655820838</p>
             
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:name@example.com"><p align="center"> nurulistik5@gmail.com</a>
             </p>
            </ul>
            <br>
           <!--  <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble fa-fw fa-3x"></i>
                </a>
              </li>
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
