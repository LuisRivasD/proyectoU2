/*
Archivo:  varios.js
Objetivo: agrupa las funciones de JS a utilizar en el ejemplo de buscar con filtro
Autor:    BAOZ
*/


/*
nombre:  pintaTablaJugadores
Objetivo: realiza llamada parcial al servidor para obtener lista de jugadores
Autor:    BAOZ
*/





function pintaProductos(){



var objRequest = new XMLHttpRequest();
var sURL = "CtrProd.php";
var objFiltroEquipo = document.getElementById("campo");
var sQueryString="";

	if (objFiltroEquipo != null && objFiltroEquipo.value !="" ){
    console.log("v1");
		sQueryString="campo="+objFiltroEquipo.value;

	}

	objRequest.open("POST", sURL, true);
		console.log("v7");
	objRequest.setRequestHeader("Content-type",
	"application/x-www-form-urlencoded");
	/*Al evento onreadystatechange se le asigna
	  una función anónima*/
	objRequest.onreadystatechange=function() {
		/*Si, cuando se ejecute la llamada, queda
		  en estado 4 y status 200, es que todo
		  salió bien y puede procesar la respuesta */
		if (objRequest.readyState === 4 &&
			objRequest.status === 200) {
			procRespProd(objRequest.responseText);

		}
	};
		console.log("6");
	objRequest.send(sQueryString);
}


// --------------------------------------------------
function pintaProductos2(){
	var objRequest = new XMLHttpRequest();
  var sURL = "CtrProd.php";
  var objFiltroEquipo = document.getElementById("dici");
  var sQueryString="";

  	if (objFiltroEquipo != null && objFiltroEquipo.value !="" ){
      console.log("v1");
  		sQueryString="dici="+objFiltroEquipo.value;

  	}

  	objRequest.open("POST", sURL, true);
  		console.log("v7");
  	objRequest.setRequestHeader("Content-type",
  	"application/x-www-form-urlencoded");
  	/*Al evento onreadystatechange se le asigna
  	  una función anónima*/
  	objRequest.onreadystatechange=function() {
  		/*Si, cuando se ejecute la llamada, queda
  		  en estado 4 y status 200, es que todo
  		  salió bien y puede procesar la respuesta */
  		if (objRequest.readyState === 4 &&
  			objRequest.status === 200) {
  			procRespProd(objRequest.responseText);

  		}
  	};
  		console.log("6");
  	objRequest.send(sQueryString);
}
// _-------------------------------------------------
/*
nombre:  procRespTblJug
Objetivo: recibe cadena que representa objeto JSON con lista de jugadores
Autor:    BAOZ
*/
function procRespProd(sCadenaRespuesta){
	$( ".pag" ).click(function() {
		 $(".tb").remove();
	 console.log("talvez");
	});
var oDatos;
var sError = "";
var oLinea;
var oCelda1, oCelda2;
	console.log("v4");
	/*El texto (cadena) de respuesta de la llamada se
	  convierte al objeto equivalente JSON (objeto con
	  atributos. Se espera successful(verdadero/falso), sSit (ok o texto error),
	  arrJugadores*/
	try{
			console.log(sCadenaRespuesta);
		oDatos = JSON.parse(sCadenaRespuesta);
				console.log("paso");
		/*Si lo pudo convertir a objeto, entonces cambia al
		msj de bienvenida (antes inicio.php)*/


				//Si la respuesta es exitosa, cambia el contenido de tabla y crea botones
				if (oDatos.successful){
					//Eliminar elementos anteriores de la tabla

					for(var i=0; i< oDatos.arrProductos.length; i++){
					//	 $(".cajita").empty();

							$('.cajita').after(
								'<div class="col-sm-12 col-md-6 col-lg-4 tb"><div class="caja02"><div class="card" style="width: 15rem;"><img class="card-img-top" src="img/prod/'+oDatos.arrProductos[i].imagen+'" alt="Card image cap">  <div class="card-body bg-gr-hot bordercir">  <h5 class="card-title">'+oDatos.arrProductos[i].nombre+'</h5><p class="card-text">Talla: '+oDatos.arrProductos[i].tamaño+'</p><p class="card-text">Color: '+oDatos.arrProductos[i].color+'</p> <p class="card-text">Marca: '+oDatos.arrProductos[i].marca+'</p> <p class="card-text">Equipo: '+oDatos.arrProductos[i].equipo+'</p> <p class="card-text">Disciplina: '+oDatos.arrProductos[i].disciplina+'</p><button type="button" id="botonCosto">$'+oDatos.arrProductos[i].precio+'</button></div></div></div></div>');
					}



				}else{
					//Error "de negocio"

				}


	}catch(excep){

		sError = excep.message;
	}
	if (sError != "")
		alert(sError);
}
