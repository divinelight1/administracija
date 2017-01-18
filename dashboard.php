<?php

session_start();
// check if not logedin redirect to login
if (!isset($_SESSION['username'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMD Administracija</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
  <?php include('includes/nav.php') ?>
  <div id="wrap">
      <div id="main" class="container">
          <div class="login">
              <img id="logo" src="img/dmdlogo.png" alt="Logo">
              <h1 id="naslov"></h1>
              <form method="post">
                <div class="group">
                  <a href="dodaj-sastanak.php"><button type="submit" name="login"  class="btn btn-primary btn-block btn-large sredina-button">Dodaj sastanak
                  </button></a>
                </div>
                <br/>
                <div class="group">
                  <a href="prikazi.php"><button type="submit" name="login"  class="btn btn-primary btn-block btn-large sredina-button">Prikaži sastanke
                  </button></a>
                </div>
              </form>
              <br>
          </div>
      </div>
  </div>


  <?php include('includes/footer.php') ?>



	</body>
</html>
