<nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgba(0,0,0,0.2); border:0 solid;" role="navigation">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class=""></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navbar-brand-centered">
  <ul class="nav navbar-nav navbar-left">
    <li style="color:white!important; margin-top:14px;"><?php
        if(isset($_SESSION['username'])) {
          echo "Vozdra, " . $_SESSION['username'];
        } ?> </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="./dashboard.php">Početna</a></li>
    <li><a href="./dodaj-sastanak.php">Dodaj sastanak</a></li>
    <li><a href="./prikazi.php">Pregledaj sastanke</a></li>

  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
