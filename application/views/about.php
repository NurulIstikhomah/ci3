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
    <!-- <div class="collapse navbar-collapse" id="mainNavbar"> -->
      <ul class="nav navbar-nav">
        <?php echo "<li><a href='".site_url('Blog/index/')."'>Home</a></li>"?>
        <?php echo "<li><a href='".site_url('Blog/about/')."'>About</a></li>"?>
        <?php echo "<li><a href='".site_url('Blog/blog/')."'>Blog</a></li>"?>
      </ul>
    <!-- </div> -->
  </div>
</nav>

    <!-- Header -->
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Nurul Istikhomah</h1>
        <h3> Welcome To My Personal WEB &amp; Enjoy Guys</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger" >Find Out More</a>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
        <h1>About Me !!!</h1>
        <p class="lead"> Call Me Nurul ! <br> I'm From Sidoarjo , Indonesia <br> I'm live at Malang </br>
          <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox">My Email</a>.</p>
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

    <!-- Call to Action -->
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
