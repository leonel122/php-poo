<?php
require "../models/User.php";

  if (empty($_POST["username"]) || empty($_POST["password"])) {
    header('Location: ../views/index.php?login=false');
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  class LoginController
  {
    public $username;
    public $password;

    public function Auth($username,$password)
    {
      $usermodel = new UserModel();
      $data = $usermodel->GetUserLogin($username);

      if($data['username'] == $username && $data['password'] == md5($password))
      {
        session_start();
        $_SESSION['user'] = $data['id'];
        header('Location: ../views/home.php');
      }
      else
      {
        header('Location: ../views/index.php?login=false');
      }
    }
  }

  $login = new LoginController();
  $result = $login->Auth($username, $password);
  echo $result;

?>
