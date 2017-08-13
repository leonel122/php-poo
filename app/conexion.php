<?php
/**
 *
 */
class Conexion
{
  public function GetConexion()
  {
    $conexion = new mysqli("localhost", "root", "", "test");
    if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexcion->connect_errno . ") " . $conexcion ->connect_error;
    }
    return $conexion;
  }
}

$e = new Conexion()

?>
