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
         
      }
      h1{
          color: white;
      }
      
      
      
      
      
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="spbuttons.php">Bon Appetit</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          if (!isset($_SESSION['name'])) {
            header("location: serviceprovider.html");
          } else {
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="contactsp.php">Contact</a>' .
              '</li>';
            echo '<li class="nav-item">' .
              '<a class="nav-link" href="profilesp.php">Profile</a>' .
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

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Admin Portal</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="spbuttons.php">Home</a>
      </li>
      <li class="breadcrumb-item active">My Options</li>
    </ol>
    <ol>

      <a href="logout.php" class="btn btn-default btn-lg active" role="button">Go to Customer Section</a>

      <div class="row">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">New Orders</h5>
            <p class="card-text">Check if you have any new orders.</p>
            <a href="showsporder.php" class="btn btn-danger btn-lg active" role="button">Order Status</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Completed Orders</h5>
            <p class="card-text">View your completed orders.</p>
            <a href="sporderstrack.php" class="btn btn-danger btn-lg active" role="button">Orders Completed</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Your Services</h5>
            <p class="card-text">See the Services that you provide.</p>
            <a href="viewservice.php" class="btn btn-danger btn-lg active" role="button">View services</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Add Items to Your Services</h5>
            <p class="card-text">Add new services that you intend to provide.</p>
            <a href="addservice.html" class="btn btn-danger btn-lg active" role="button">Add Items</a>
          </div>
        </div>
      </div>


    </ol>
  </div>

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-danger">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Bon Appetit</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>