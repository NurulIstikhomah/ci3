<!DOCTYPE html>
<html lang="en">

 <!--  <head>

    <style>
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
    <!-- <div class="collapse navbar-collapse" id="mainNavbar"> -->
      <ul class="nav navbar-nav">
      
        <?php echo "<li><a href='".site_url('Blogger/index2/')."'>Home</a></li>"?>
        <!-- <?php //echo "<li><a href='".site_url('Blog/about')."'>About</a></li>"?> -->
        <?php echo "<li><a href='".site_url('Blog/blog/')."'>Blog</a></li>"?>

      <?php if(!$this->session->userdata('logged_in')) : ?>
        <!-- <?php //echo "<li><a href='".site_url('User/login/')."'>Login</a></li>"?>
        <?php //echo "<li><a href='".site_url('User/register/')."'>Register</a></li>"?> -->
      <?php endif; ?>

      <?php if($this->session->userdata('logged_in')) : ?>
          <div class="btn-group" role="group" aria-label="Data baru">              
              <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
          </div>
      <?php endif; ?>

      </ul>
    <!-- </div> -->
  </div>
</nav>


    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>My Home</h1>
        <h3> Welcome To My Personal WEB &amp; Enjoy Guys</h3>
        <br>
        <h3>Nurul Istikhomah</h3>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>


    

      

                
        <!-- </nav> -->

        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
        


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
            <br>
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
              
            </ul>
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