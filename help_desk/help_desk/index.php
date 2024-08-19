<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

?>
<html>

<head>

  <meta charset="utf-8" />
  <title>Help Desk</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Help Desk
    </a>
  </nav>

  <div style="">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>

              <?php } ?>
              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                <div class="text-danger">
                  Por favor, faça login antes de acessar as páginas protegidas
                </div>

              <?php } ?>

              <button class="btn btn-lg btn-outline-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom  ">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright: Gabriel Nicolas Ferreira
        <a class="text-body" href="https://www.linkedin.com/in/nicolas-avelar">Nicolas Avelar</a>
      </div>
    </footer>
</body>

</html>