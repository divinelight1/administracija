<?php
include('connection.php');
session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style1.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Pacifico' rel='stylesheet' type='text/css'>
        <title> DMD Administracija </title>
    </head>

    <body>
   <?php include('includes/nav.php'); ?>
        <div class="login">
            <h1>Dodaj sastanak</h1>
            <form method="post" style="width:98%;">
              <div class="group">
                <input type="text"  name="firma" placeholder="Firma"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  name="adresa" placeholder="Datum poziva"><span class="highlight" placeholder="Adresa firme"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  name="datumpoziva" placeholder="Datum poziva"><span class="highlight" ></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="date"  name="datumsastanka" placeholder="Datum sastanka"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type=""  name="vrijeme" placeholder="Vrijeme"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  name="kontakttel" placeholder="Kontakt telefon"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  name="kontaktosoba" placeholder="Kontakt osoba"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  name="email" placeholder="E-Mail"><span class="highlight"></span><span class="bar"></span>
              </div>
              <div class="group">
                <input type="text"  style="margin:0 auto;" name="info" placeholder="Dodatne informacije"></textarea><span class="highlight"></span><span class="bar"></span>
              </div>
              <br/>
              <button type="submit" name="submit"  class="posalji btn btn-primary btn-block btn-large">Dodaj sastanak
              </button>
            </form>
            <br>
        </div>

        <?php
        if(isset($_POST['submit'])) {
            include('connection.php');

                    $firma  =  $_POST['firma'];
                    $adresa = $_POST['adresa'];
                    $datumpoziva = $_POST['datumpoziva'];
                    $datumsastanka = $_POST['datumsastanka'];
                    $vrijeme = $_POST['vrijeme'];
                    $kontakttel = $_POST['kontakttel'];
                    $kontaktosoba = $_POST['kontaktosoba'];
                    $email = $_POST['email'];
                    $info = $_POST['info'];

        	 $query=mysqli_query($connect, "INSERT INTO sastanci (firma,adresafirme,datumpozivanja,datumsastanka,vrijeme,username,kontaktosoba,kontakttel,email,info) values ('$firma', '$adresa','$datumpoziva','$datumsastanka', '$vrijeme', 'username', '$kontaktosoba','$kontakttel', '$email', '$info')");
           $result=mysqli_query($connect,$query);

           if ($result == true) {
            echo '<script type="text/javascript">alert("' . "KURACCCC" . '")</script>';
           }
         }
        	?>


                <?php include('includes/footer.php'); ?>
                    <script>
                        function setFocus() {
                            document.getElementById("id_broj").focus();
                        }
                    </script>


    </body>

    </html>
