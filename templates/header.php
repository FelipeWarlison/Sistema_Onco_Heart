<?php
session_start();
if (!isset($_SESSION['userUid'])) {
  header("Location: index.php?log=out");
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img height="40" src="images/oncohearthp.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><i class="fa fa-home">&nbsp;</i>Início<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="includes/logout.inc.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
<?php
if (isset($_GET['error'])):
  $error = $_GET['error'];
  if($error == 'emptyfields'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Campos vazios!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'wrong'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Credenciais incorretas!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'empty'):?>
    <div class="text-center alert alert-danger" role="alert">
      <strong>Campo vazio!</strong>
    </div>
  <?php elseif($error == 'sqlerror'):?>
    <div class="text-center alert alert-danger" role="alert">
      <strong>Erro ao conectar com o banco de dados!</strong>
    </div>
  <?php elseif($error == 'noAd'):?>
    <div class="text-center alert alert-success" role="alert">
      <strong>Paciente cadastrado com sucesso!</strong>
    </div>
  <?php elseif($error == 'emptyfield'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Campo vazio!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'nomeexiste'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Este já é o nome do paciente!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'noEd'):?>
    <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
      <strong>Nome editado com sucesso!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'NoS'):?>
    <div class="text-center alert alert-success" role="alert">
      <strong>Questionário adicionado com sucesso!</strong>
    </div>
  <?php endif;
  endif;
  ?>
