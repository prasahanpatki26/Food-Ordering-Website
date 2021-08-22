<?php
Session_start();
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
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>    
            <?php
            if(!isset($_SESSION['name']))
            {
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="login.html">Login</a>'.
                          '</li>';
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="signup.html">Signup</a>'.
                          '</li>';
            }
            else
            {
                
              $name = $_SESSION['name'];

            echo "<li class='nav-item'>" .
              "<a class='nav-link' href='profile.php'> {$name}</a>" .
              "</li>";
              echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="customerorderstrack.php">My Order</a>'.
                          '</li>';
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="logout.php">Logout</a>'.
                          '</li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
<h1 class="mt-4 mb-3">
      </h1>
      <ol class="breadcrumb">
          <h2>YOUR ORDER IS SUCCESSFUL!!!</h2>
        </ol>
      <ol>
         <a class="btn btn-danger btn-lg active" href="index.php" role="button">Home</a>
     <a class="btn danger btn-lg active" href="services.php?input=All" role="button">Request Another Service</a>
        <a class="btn btn-default btn-lg active" href="customerorderstrack.php" role="button">My Previous Orders</a>
      </ol>
   
    
    </div>
   
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-danger">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Bon Appetit</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
