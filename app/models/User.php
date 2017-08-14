<?php
require "../conexion.php";

 class UserModel
 {
    public $username;
    public $password;

   public function CretateUser($username,$password)
   {
     $e = new Conexion();
     $conexion = $e->GetConexion();

     $query = "INSERT INTO users VALUES (null,'$username','$password')";
     $result = $conexion->query($query);

     $query = "SELECT * FROM users WHERE id = '$conexion->insert_id'";
     $result = $conexion->query($query);

     if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       return $row;
     } else {
       echo "0 results";
     }
     $conexion->close();
   }

   public function GetUser($id,$fiels)
   {
     $e = new Conexion();
     $conexion = $e->GetConexion();
     $fiels = (!empty($fiels)) ? $fiels : "*";
     $query = "SELECT $fiels FROM users WHERE id = '$id'";
     $result = $conexion->query($query);

     if ($result->num_rows > 0) {
       $result = $result->fetch_assoc();
       return $result;
     } else {
       echo "0 results";
     }
     $conexion->close();
    }
  }

  $a = new UserModel();
  $result = $a->CretateUser("triby","pass");
  print json_encode($result);
?>
