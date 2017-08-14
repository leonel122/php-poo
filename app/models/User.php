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
     $password = md5($password);
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

    public function GetUserLogin($username)
    {
      $e = new Conexion();
      $conexion = $e->GetConexion();
      $query = "SELECT id, username, password FROM users WHERE username = '$username'";
      $result = $conexion->query($query);

      if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();
        return $result;
      } else {
        return false;
      }
      $conexion->close();
    }
  }
?>
