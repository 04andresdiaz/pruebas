<?php
  /**
   *
   */
  class Conectar
  {
    function conexion()
    {
      try {
        $conexion = new mysqli("localhost","root","","jaadeinventario");
      } catch (Exception $e) {

      }

      return $conexion;
    }
  }



?>
