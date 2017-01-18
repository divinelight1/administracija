<?php

  // connect to database
  $connect = mysqli_connect("localhost", "root", "", "call_center");
  session_start();

  // submit data
  if (isset($_POST["register"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
          echo '<script>alert("you must fill both fields")</script>';
    }else{
      $username = mysqli_real_escape_string($connect, $_POST["username"]);
       $password = mysqli_real_escape_string($connect, $_POST["password"]);
       $password = sha1($password);
       $query = "INSERT INTO admins (username, password) VALUES('$username', '$password')";
       if (mysqli_query($connect, $query)) {
         echo '<script>alert("registration done");</script>';
       };
    };
  };
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Call Center</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <hgroup>
  <h1>Register Admin Profile On Call Center App</h1>
  <h3>maintainer: Aldin Mujkic</h3>
</hgroup>
<form method="post">
  <div class="group">
    <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
    <label>Name</label>
  </div>
  <div class="group">
    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <button type="submit" name="register"  class="button buttonBlue">Register
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
