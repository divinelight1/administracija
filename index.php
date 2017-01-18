<?php

include('connection.php');
  // check if session is set

  if (isset($_POST['username'])) {
    session_start();
    header('location: dashboard.php');
  }
  // submit data
  if (isset($_POST['login'])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
       echo '<script>alert("you must fill both fields to login")</script>';
    }else{
      $username = mysqli_real_escape_string($connect, $_POST["username"]);
      $password = mysqli_real_escape_string($connect, $_POST["password"]);
      $password = sha1($password);
      $query = "SELECT * from admins WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) > 0 ) {
        $_SESSION['username'] = $username;
        $_SESSION['username'];
        header("location:dashboard.php");
      }else{
        echo '<script>alert("please register first")</script>';
      }
    }
  }
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Pacifico' rel='stylesheet' type='text/css'>
    <title>DMD Administracija</title>
</head>

<body>
   <?php include('includes/nav.php'); ?>
    <div id="wrap">
        <div id="main" class="container">
            <div class="login">
                <img id="logo" src="img/dmdlogo.png" alt="Logo">
                <h1 id="naslov"></h1>
                <form method="post">
                  <div class="group">
                    <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="group">
                    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <button type="submit" name="login"  class="btn btn-primary btn-block btn-large">Login
                  </button>
                </form>
                <br>
            </div>
        </div>
    </div>

    <!-- <form method="post">
      <div class="group">
        <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
        <label>Username</label>
      </div>
      <div class="group">
        <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
        <label>Password</label>
      </div>
      <button type="submit" name="login"  class="button buttonBlue">Login
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
      </button>
    </form> -->

    <?php include('includes/footer.php') ?>


</body>

</html>
