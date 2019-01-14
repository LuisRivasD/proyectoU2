<?php
error_reporting(E_ALL);
include_once("AccesoDatos.php");




class Producto{

  private $id_prod=0;
  private $nombre="";

  private $equipo="";
  private $disciplina="";
  private $tamaño="";
  private $color="";
  private $precio="";
  private $marca="";
  private $imagen="";
  private $id_cat="";
  private $id_admi="";
  private $aux="";


  function set_aux($aux){
        $this->aux = $aux;
    }

    function get_aux(){
        return $this->aux;
    }



  function set_id($id_produ){
        $this->id_prod = $id_produ;
    }

    function get_id(){
        return $this->id_prod;
    }


    function set_nom($Nombre){
          $this->nombre = $Nombre;
      }

      function get_nom(){
          return $this->nombre;
      }


      function set_disciplina($disciplina){
            $this->disciplina = $disciplina;
        }

        function get_disciplina(){
            return $this->disciplina;
        }


        function set_equipo($equipo){
              $this->equipo = $equipo;
          }

          function get_equipo(){
              return $this->equipo;
          }


          function set_imagen($imagen){
                $this->imagen = $imagen;
            }

            function get_imagen(){
                return $this->imagen;
            }


            function set_tamaño($tamaño){
                  $this->tamaño = $tamaño;
              }

              function get_tamaño(){
                  return $this->tamaño;
              }


              function set_color($color){
                    $this->color = $color;
                }

                function get_color(){
                    return $this->color;
                }

                function set_precio($precio){
                      $this->precio = $precio;
                  }

                  function get_precio(){
                      return $this->precio;
                  }

                  function set_marca($marca){
                        $this->marca = $marca;
                    }

                    function get_marca(){
                        return $this->marca;
                    }

                    function set_id_cat($id_cat){
                          $this->id_cat = $id_cat;
                      }

                      function get_id_cat(){
                          return $this->id_cat;
                      }

                      function set_id_admin($id_admin){
                            $this->id_admin = $id_admin;
                        }

                        function get_id_admin(){
                            return $this->id_admin;
                        }








  function buscarTodosFiltro(){

	$oAccesoDatos=new AccesoDatos();
	$sQuery="";
	$arrRS=null;
	$arrProductos = null;
	$arrLinea=null;
	$j=0;
	$oProd=null;
;
		if ($oAccesoDatos->conectar()){
      if(($this->aux!="Baseball")&&($this->aux!="Futbol")&&($this->aux!="Basketball")){
        $sQuery = "SELECT *
            FROM producto WHERE equipo ="."'".$this->aux."'";
      }else{

        $sQuery = "SELECT *
            FROM producto WHERE disciplina ="."'".$this->aux."'";
      }



			$arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
			$oAccesoDatos->desconectar();
			if ($arrRS){
				foreach($arrRS as $arrLinea){
					$oProd = new Producto();

					$oProd->set_id($arrLinea[0]);
					$oProd->set_nom($arrLinea[1]);
          $oProd->set_equipo($arrLinea[2]);
          $oProd->set_disciplina($arrLinea[3]);
          $oProd->set_tamaño($arrLinea[4]);
          $oProd->set_color($arrLinea[5]);
          $oProd->set_precio($arrLinea[6]);
          $oProd->set_marca($arrLinea[7]);
          $oProd->set_imagen($arrLinea[8]);



            		$arrProductos[$j] = $oProd;
					$j=$j+1;
                }
			}
        }

    return $arrProductos;
	}


}






 ?>
