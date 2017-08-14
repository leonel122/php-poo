<?php
ini_set('display_errors', 0);
$error = $_GET['login'];
echo $error;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!--  login slyleshett -->
    <link rel="stylesheet" href="../../asset/css/login.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    <div class="container">
      <h1 class="welcome text-center">Welcome to <br> Ice Code</h1>
      <div class="card card-container">
        <?php
        if ($error == false){
        echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        </div>';
        }
        ?>
        <h2 class='login_title text-center'>Login</h2>
        <hr>
          <form class="form-si" action="../controllers/LoginController.php" method="post">
            <p class="input_title">Username</p>
            <input type="text" class="login_box" id="username" name ="username" autofocus>
            <p class="input_title">Password</p>
            <input type="password" class="login_box" id="password" name ="password">
            <input class="btn btn-lg btn-primary" type="submit" id="btn-login" value="Entrar"/>
          </form><!-- /form -->
      </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="../../asset/jquery/jquery-3.2.1.min.js"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> -->
  </body>
</html>
