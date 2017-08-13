<?php
  require "app/controllers/LoginController.php";

  $route = $_SERVER['REQUEST_URI'];

  if ($route == "/test/login") {
    $username = (empty($_POST['username'])) ? null : $username;
    $r = new LoginController();
    $r->Auth($username);
  }

?>
