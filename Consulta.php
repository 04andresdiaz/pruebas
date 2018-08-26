<?php
  class Consulta
  {

    function respu($usuario, $contrasena)
    {
      require_once("conexion.php");
      $obj=Conectar::conexion();
      $consulta = $obj->query("SELECT * FROM usuarios WHERE nombreUsuario= '$usuario' AND contrasena='$contrasena'") or die(mysqli_erron());
      if ($res = mysqli_fetch_array($consulta)) {
        echo 1;
      }else {
      echo 2;
    }
    }
  }


         // code...
 ?>
