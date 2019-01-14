<?php
include './modelo/configServer.php';
include './modelo/consulSQL.php';
?>







<div class="container">

<div class="row">

          <div class="col-sm-12 col-md-12 col-lg-2">
                      <div class="TA">
                      <div>
                      <h3><i class="fa fa-shopping-cart"></i> TOTAL</h3>
                      <p>$000.000</p>
                           <button id="buttonPagar">Pagar</button>
                           <script>
  $( "#buttonPagar" ).button();
  $( "#button-icon" ).button({
    icon: "ui-icon-gear",
    showLabel: false
  });
  </script>
                      </div>
                    </div>
          </div>


          <div class="col-sm-12 col-md-10" id="cj">

            <div class="busca">
            <div class="row">

              <div class="col-sm-12 col-md-12 col-lg-2">
        			<form name="frmTablaGral" id="frmTablaGral" style="display:block"
        				onsubmit="return false;">
        				<br>
        				<h4>Equipo</h4>

        				<select name="campo" id="campo" >
        					<option value="America">América</option>
        					<option value="Chivas">Chivas</option>
        					<option value="Lakers">Lakers</option>
        					<option value="Bulls">Bulls</option>
        					<option value="Yankees">Yankees</option>
        					<option value="Redsox">Redsox</option>
        				</select>
                <script>
                  $( "#campo" ).selectmenu();
                </script>
        				<input type="button" id="buttonBuscaEq"  value="Buscar Equipo" onclick="pintaProductos(); return false;" class="pag"/>
        						</form>

                    <script>
    $( "#buttonBuscaEq" ).button();
    $( "#button-icon" ).button({
    icon: "ui-icon-gear",
    showLabel: false
    });
    </script>

            </div>


            <div class="col-sm-12 col-md-12 col-lg-2">
        			<form name="tbdiciplina" id="tbdiciplin" style="display:block"
        				onsubmit="return false;">
        				<br>
        				<h4>Disciplina</h4>

        				<select name="dici" id="dici">
        					<option value="Baseball">Baseball</option>
        					<option value="Futbol">Futbol</option>
        					<option value="Basketball">Basketball</option>
        				</select>
                <script>
                  $( "#dici" ).selectmenu();
                </script>
        				<input type="button" id="buttonBuscaDisc"  value="Buscar Disciplina" onclick="pintaProductos2(); return false;" class="pag"/>
                <script>$( "#buttonBuscaDisc" ).button();</script>
        			</form>
            </div>


            </div>
            </div>

            <div class="row">

                  <div class="cajita">
                    <script>$( "#botonCosto" ).button();</script>

                  </div>


           </div>

          </div>


</div>
</div>
