<?php
$chamados = array();
$arquivo = fopen('../valida_login/arquivo.hd', 'r');


while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}

fclose($arquivo);

?>
<html>

<head>
  <meta charset="utf-8" />
  <title>Help Desk</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
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
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">
          SAIR
        </a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;"">
              Consulta de chamado
            </div>
            
            <div class=" card-body">

            <?php foreach ($chamados as $chamado) { ?>

              <?php
              $chamado_dados = explode('#', $chamado);

              if ($_SESSION['perfil_id'] == 2) {
                if ($chamado_dados[0] != $_SESSION['id']) {
                  continue;
                }
              }

              if (count($chamado_dados) < 3) {
                continue;
              }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>

                </div>
              </div>

            <?php } ?>

            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-outline-warning btn-block">Voltar</a>
              </div>
            </div>
          </div>
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