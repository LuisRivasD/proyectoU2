<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    	<link href="jslib/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="awesome/css/all.css">
    <script src="jslib/external/jquery/jquery.js"></script>
<script src="jslib/jquery-ui.js"></script>
    <meta charset="utf-8">
    <title>Proyecto RIAS</title>
  </head>
  <body>

    <!-- <button id="buttonPagar">Pagar</button>
    <script>
$( "#buttonPagar" ).button();
$( "#button-icon" ).button({
icon: "ui-icon-gear",
showLabel: false
}); -->
</script>

  <header >
    <?php
    include 'header.php';
      ?>
  </header>





      <?php

           if (isset($_REQUEST['pagina']) && !empty($_REQUEST['pagina'])) {
               // echo "Hola2";

            $pack = $_REQUEST['pagina'];
                  // echo $pack;
            if ($pack === "prin") {

              include_once('principal.php');
            }elseif ($pack === "catalogo") {
              include_once('catalogo.php');
            }elseif ($pack === "registrarse") {
              include_once('registro.php');
            }
          }else{
                include 'principal.php';

          }

           ?>
      <?php
      // include 'principal.php';
      include 'login.php';
        ?>






<footer>
  <?php
    include 'footer.html';
   ?>
</footer>



    <!--Scripts Bottstrap  -->
<script src="js/main.js" charset="utf-8"></script>
<script src="js/varios.js" charset="utf-8"></script>
<script

 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
    <!-- Scripts Bootstrap -->
</html>
