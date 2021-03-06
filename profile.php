<?php
session_start();

include("connection.php");

if (mysqli_connect_error()) {

  die("Database Connection Error");
} else {
  $query2 = "SELECT * FROM `customer` WHERE email = '" . mysqli_real_escape_string($link, $_SESSION['email']) . "' && `password` = '" . mysqli_real_escape_string($link, $_SESSION['password']) . "'";
  $result2 = mysqli_query($link, $query2);
  $row = mysqli_fetch_array($result2);
  if (array_key_exists("tid", $row)) {
    $_SESSION['tid'] = $row['tid'];
  } else {
    echo "not generated";
  }
}


if(isset($_POST['update'])){
  
}
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

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Profile</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>


    <!-- Signup Form -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <form method="POST" action="">
          <div class="control-group form-group">
            <div class="controls">
              <label>Name:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $row['name']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $row['email']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mobile Number:</label>
              <input type="tel" class="form-control" id="tel" name="tel" placeholder="<?php echo $row['mobile']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Address:</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="<?php echo $row['address']; ?>">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="********">
            </div>
          </div>

          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-danger" name="update" id="loginButton">Update Profile!</button>
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