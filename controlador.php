<?php
  include("Consulta.php");

  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

      $obj = new Consulta();
      $obj->respu($usuario, $contrasena);
 ?>
