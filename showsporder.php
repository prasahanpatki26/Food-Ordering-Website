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
      <a class="navbar-brand" href="spbuttons.php">Bon Appetit</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="contactsp.php">Contact</a>
          </li>
          <?php
          if (!isset($_SESSION['name'])) {
          } else {
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

    <h1 class="mt-4 mb-3">Orders</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href=#>Home</a>
      </li>
      <li class="breadcrumb-item active">Orders</li>
    </ol>

    <table class="table table-hover table-dark ">
      <tr>
        <th>Cust-Name</th>
        <th>Cust-Mobile</th>
        <th>Date</th>
        <th>Time</th>
        <th>Service-Address</th>
        <th>Payment-Method</th>
        <th>Status</th>
      </tr>
      <?php
      include("connection.php");

      $query1 = "SELECT * FROM order_info natural join customer where spid='" . mysqli_real_escape_string($link, $_SESSION['spid']) . "' && flag=0 && cid=tid";

      if ($result = mysqli_query($link, $query1)) {
        while ($row = mysqli_fetch_array($result)) {
          $index = "/servicedone.php?oid=$row[0]";
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>" . "<td>" . $row['mobile'] . "</td>" . "<td>" . $row['date'] . "</td>" . "<td>" . $row['timeslot'] . "</td>" . "<td>" . $row['service_address'] . "</td>" . "<td>" . $row['payment_method'] . "</td>" . "<td><a href=$index >Service Done</a></td>";
        }
      }
      ?>

    </table>

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