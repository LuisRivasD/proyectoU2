<?php

error_reporting(E_ALL);
include_once("AccesoDatos.php");


class Usuario{
  protected $id_prod=0;
  protected $nombre="";

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



}





 ?>
