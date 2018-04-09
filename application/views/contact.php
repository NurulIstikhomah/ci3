<!DOCTYPE html>
<html lang="en">

  <head>

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
</style>
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
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#top">Nurul Istikhomah</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#top">Home</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
 

        <div class="dropdown">
          <li><a class="mainmenubtn" href="#services">Blog</a></li>

          <div class="dropdown-child">
            <a href="#services"> Framework</a>
            <a href="#list"> Codeigniter</a>
            <a href="#bara"> PHP</a>
          </div>
        </div>
        <li>
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#contact" onclick=$( "#menu-close").click();>Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Nurul Istikhomah</h1>
        <h3> Welcome At My Personal WEB &amp; Enjoy Guys</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>

    <!-- Contact -->
    <aside class="call-to-action bg-primary text-white">
      <div class="container text-center">
        <h3>My Profile.</h3>
         <section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="http://localhost:8080/ci3/assets/img/g2.jpg">
                  </a>
                </div>
              </div>
          <div class="person-content">
            <h4>Nurul Istikhomah</h4>
            <h5 class="role">The Programmer</h5>
            <p>Name : Nurul Istikhomah <br> TTL : Sidoarjo, 18 September 1997 <br> Address : Balongbendo, Sidoarjo | Kertoasri , Malang <br> Email : nurulistik5@gmail.com<br>  </p>
          </div>
        
      </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <strong>Nurul Istikhomah</strong>
            </h4>
            <p>Balongbendo
              <br>Sidoarjo , Indonesia</p>
            <ul class="list-unstyled">
              <li>
                <i class="fa fa-phone fa-fw"></i>
                085655820838</li>
              <li>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:name@example.com">nurulistik5@gmail.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
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
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; Your Website 2018</p>
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
