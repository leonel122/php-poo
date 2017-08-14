<?php
require "../models/User.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  class LoginController
  {
    public $username;
    public $password;

    public function Auth($username,$password)
    {
      $a = new UserModel();
      $data = $a->GetUser(1, "username");
      echo $data['username'];
    }
  }

  $a = new LoginController();
  $data = $a->Auth($username, $password);
?>
