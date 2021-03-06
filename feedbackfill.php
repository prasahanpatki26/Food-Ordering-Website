<?php
	session_start();
	$_SESSION['oid'] = $_GET['oid'];
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
        <a class="navbar-brand" href="logout.php">Bon Appetit</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
             <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Add Feedback
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Add Feedback</li>
      </ol>
                  
      <!-- Signup Form -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <form action="addfeedback.php" method="POST">
            <div class="control-group form-group">
              <div class="controls">
                <label>Feedback:</label>
                <input type="text" class="form-control" id="feedback" name="feedback" placeholder="Enter Feedback" required data-validation-required-message="Please enter feeback">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Ratings:</label>
                <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Give Rating in 0-5" required data-validation-required-message="Please give your Rating">
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-danger" id="loginButton">Submit</button>
          </form>
        </div>
      </div>
      <!-- /.row -->
      
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
