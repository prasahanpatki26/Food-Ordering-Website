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
            <?php
            if(isset($_SESSION['name']))
            {
                 header("location: serviceprovider.html"); 
            }
            else
            {
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="contactsp.php">Contact</a>'.
                          '</li>';
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="profilesp.php">Profile</a>'.
                          '</li>';
                echo '<li class="nav-item">'. 
                            '<a class="nav-link" href="logout.php">Logout</a>'.
                          '</li>';
            
            //echo 'set';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOxIRQX7AwjsRAIRcLlwzkj8&key=..."></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
         Head Office:<br>
          <br>Bon Appetit Pvt. Limited,
            Shivaji Nagar,Parbhani-431401.
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: 02452-665566
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:favour4u@gmail.com">bonappetit@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: 24/7
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="images/food4.png" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Bon Appetit</h2>
        <p>We make your experience of enjoying our food at your home a one to remember with wide variety of food choices to make from your favourite cuisines and a very efficient food delivery system which will deliver freshly cooked food at your doorstep.</p>
        <p>Our focus is to enhance the customer experience of easy online ordering of food in this difficult times of a pandemic and ensure that foodies around the city don't miss out on our unique taste. So we at bon apetite feel privileged to welcome you at our new online food ordering platform. </p>
        <p>So we at bon apetite feel privileged to welcome you at our new online food ordering platform. </p>

      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Bon Appetit</h2>

    <div class="row">

      


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