
<?php
include './modelo/configServer.php';
include './modelo/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title></title>
  </head>
  <body>



    <section id="contenido">

      <div class="container">
      <div class="row">


          <?php

          $equipos=$_POST['campo'];
                              $consulta=  ejecutarSQL::consultar("select * from producto where equipo='".$equipos."'");
                              $totalproductos = mysql_num_rows($consulta);

                              if($totalproductos>0){
                                  while($fila=mysql_fetch_array($consulta)){
                                     echo '
                                      <div class="col-4">
                                      <div class="caja02">
                                        <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="img/prod/'.$fila['imagen'].'" alt="Card image cap">

                                          <div class="card-body bg-gr-roz bordercir">
                                          <h5 class="card-title">'.$fila['nombre'].'</h5>
                                          <p class="card-text">Talla: '.$fila['tamaño'].'</p>
                                          <p class="card-text">Colo: '.$fila['color'].'</p>
                                          <p class="card-text">Marca: '.$fila['marca'].'</p>
                                          <p class="card-text">Equipo: '.$fila['equipo'].'</p>
                                          <button type="button" class="btn btn-light btn-lg btn-block">$'.$fila['precio'].'</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                     ';
                                 }
                              }else{
                                  echo '<h2>No hay productos en esta categoria</h2>';
                              }
                          ?>

      </div>
    </div>

    </section>


  </body>
</html>
