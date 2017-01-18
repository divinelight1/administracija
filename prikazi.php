<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Pacifico' rel='stylesheet' type='text/css'>
    <title> DMD Administracija </title>
</head>

<body style="overflow:auto!important;">
<?php include('includes/nav.php'); ?>

<?php
session_start();
if(isset($_SESSION[$username]))
{
    echo 'Puši kurac'; }
else {
  header('index.php');
}

include('connection.php');
?>
        <?php ob_start(); ?>
            <?php


?>
<div class="container">
    <div class="login" style="margin-top:-3em!important;">
        <form method="post">
            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-large">Pretraži po ID</button>
        </form>
            <div align="center">
                <p id="naslov" style="color:white!important"> Exportuj u PDF</p>
                <a href="javascript:Clickheretoprint()" title="Eksportuj izvještaj.">
                    <img src="img/pdf.png" Style="height:60px; witdh:60px;" /></a>
            </div>
        </div>
    </div>
<br>
<br>
<div class="container">
    <div class="row">
       <div class="style3" id="print_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td align="center"><h1><font color='black' face="Arial"></font></h1></td>
          </tr>
        </table>
        <div class="col-lg-12">
            <div class="btn-toolbar" style="margin-left:45%!important;">
                <a href="view.php">
                    <button class="btn btn-primary">Nazad</button>
                </a>
                <a href="javascript:Clickheretoprint()">
                    <button class="btn">Export</button>
                </a>
            </div>
            <br>
            <div class="well">
                <table class="table" id="print_content">
                    <thead>
                        <tr>
                            <th>ID zaposlenika</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Datum</th>
                            <th>Dolazak</th>
                            <th>Odlazak</th>
                            <th>Provedeno vrijeme</th>
                        </tr>
                    </thead>
    <?php

    print_r($_SESSION);

  /**      if(isset($_POST['submit'])) { $id = $_POST['id']; $sql= "SELECT z.ime, z.prezime, z.id_broj, d.d_datum, d.d_vrijeme, o.o_vrijeme FROM zaposleni z, dolasci d, odlasci o WHERE z.id_broj = '$id' AND d.id_broj = '$id' AND o.id_broj = '$id'"; $result = mysqli_query($conn, $sql);
        if(isset($_POST['submit'])) { $username = $_SESSION['username']; $sql= "SELECT z.ime, z.prezime, z.id_broj, d.d_datum, d.d_vrijeme, o.o_vrijeme FROM zaposleni z, dolasci d, odlasci o WHERE z.id_broj = '$id' AND d.id_broj = '$id' AND o.id_broj = '$id'"; $result = mysqli_query($conn, $sql);

		while ($row=mysqli_fetch_array($result))
		{
			$id=$row["id_broj"];
			$ime=$row["ime"];
			$prezime=$row["prezime"];
			$datum=$row["d_datum"];
			$dolazak=$row["d_vrijeme"];
			$odlazak=$row["o_vrijeme"];

		$start_date = new DateTime($dolazak,new DateTimeZone('Asia/Manila'));
        $end_date = new DateTime($odlazak, new DateTimeZone('Asia/Manila'));

		$interval = $start_date->diff($end_date);
		$hours   = $interval->format('%h');
		$minutes = $interval->format('%i');
        $seconds = $interval->format('%s');

		$total_time = $hours .":".$minutes.":".$seconds; */
?>

       <tbody>
    <tr>
        <td>
            <?php echo "$id"; ?>
        </td>
        <td>
            <?php echo "$ime"; ?>
        </td>
        <td>
            <?php echo "$prezime"; ?>
        </td>
        <td>
            <?php echo "$datum"; ?>
        </td>
        <td>
            <?php echo "$dolazak"; ?>
        </td>
        <td>
            <?php echo "$odlazak"; ?>
        </td>
        <td>
            <?php echo "$total_time"; ?>
        </td>

    </tr>
</tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('includes/footer.php'); ?>
                    <script language="javascript">
                        function Clickheretoprint() {
                            var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
                            disp_setting += "scrollbars=yes,width=250, height=180, left=100, top=15";
                            var content_vlue = document.getElementById("print_content").innerHTML;

                            var docprint = window.open("", "", disp_setting);
                            docprint.document.open();
                            docprint.document.write('<html><head><title>Uvid u odlaske i dolaske</title>');
                            docprint.document.write('</head><body onLoad="self.print()">');
                            docprint.document.write(content_vlue);
                            docprint.document.write('<p align=center><font face=arial  size=3> </p></font>');
                            docprint.document.write('</body></html>');
                            docprint.document.close();
                            docprint.focus();
                        }
                    </script>
</body>

</html>
