<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bon Appetit</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">
  <style>
      body{
          background-color: black;
          color: white;
      }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Bon Appetit</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="services.php?input=All">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php
          if (!isset($_SESSION['name'])) {
          
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="login.html">Login</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="signup.html">Signup</a>' .
              '</li>';
          } else {
            $name = $_SESSION['name'];

            echo "<li class='nav-item'>" .
              "<a class='nav-link' href='profile.php'> {$name}</a>" .
              "</li>";
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="customerorderstrack.php">My Order</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="logout.php">Logout</a>' .
              '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/food3.jpg'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/food2.png'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/food1.jpg'); background-size: 100% 100%;">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h2 class="my-4">Welcome to Bon Appetit</h2>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Dominos"><img class="card-img-top" src="images/dominos.png" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Dominos">Dominos</a>
            </h4>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Pizza Hut"><img class="card-img-top" src="images/pizzahut.png" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Pizza Hut">Pizza Hut</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Burger King"><img class="card-img-top" src="images/burgerking.png" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Burger King">Burger King</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Mcdonalds"><img class="card-img-top" src="images/mcd.png" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Mcdonalds">Mcdonald's</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Cafe Coffe Day"><img class="card-img-top" src="images/ccd.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Cafe Coffe Day">Cafe Coffe Day</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="/services.php?input=Indian"><img class="card-img-top" src="images/indian.jpg" alt="" width="300" height="200"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/services.php?input=Indian">Indian</a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Key Features Of Bon Appetit ?</h2>
        <p>The Bon Appetit includes:</p>
        <ul>
          <li>Best of all Food Provider.</li>
          <li>Safe And most preffered Service in COVID-19.</li>
          
        </ul>
        <p>Fast, efficient, and honest, Bon Appetit has become a reputable and well-known Food provider. Our team is up for every job. We want our customers to be satisfied with our work.</p>
        <p>Enjoy Your Meal And have a Great Day ahead....... </p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="images/food4.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Become a Service Provider at Bon Appetit today.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-danger btn-block" href="serviceprovider.html">Admin Portal</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Bon Appetit.</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>