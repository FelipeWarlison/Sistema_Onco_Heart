<!DOCTYPE html>
<html lang="pt">

<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
  <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="css\master.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $("#formBusca").submit(function(event){
        event.preventDefault();
        var busca = $("#inputBusca").val();
        $("#exibePacientes").load("buscaPacientes.php", {
          busca: busca
        });
      });
    });
  </script>
</head>
<body>
  <!-- Navbar -->
  <?php
    include_once("templates\header.php");
  ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <br>
          <img class="user-image"src="images/user.png" alt="">
          <div class="card-body card-user">
            <h5 class="card-title">Bem vindo!</h5>
            <p class="card-text"><?php echo $_SESSION['userUid']; ?></p>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-8">
        <div class="jumbotron dasboard-panel">
          <div class="search-bar-btn d-flex justify-content-between">
              <div class="row">
                <form action="includes\addpaciente.inc.php" method="post">
                    <div class="form-inline form-block">
                      <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                      <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                    </div>
                </form>
              </div>
              <div class="row">
                <form id="formBusca" method="post" action="buscaPacientes.php" class="form-inline form-block">
                  <input id="inputBusca" class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                  <button id="botaoBusca" class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>


          </div>
          <div class="dashboard-table" id="exibePacientes">
            <?php
              include_once("database/db.dashboard.php");
              $sql = "SELECT * FROM pessoas;";
              $result = mysqli_query($conn, $sql);
             ?>
            <table class="table table-hover table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>Pessoas</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <?php while ($linha = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><?php echo $linha['nome']?></td>
                <td><a href="registros.php?paciente=<?php echo $linha['pid']?>" class="btn btn-outline-dark" type="button" name="ver">Ver</a></td>
              </tr>
            <?php endwhile; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->

  <!-- <div class="modal fade" id="modalSite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Paciente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="includes\addpaciente.inc.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="nomePaciente">Nome do Paciente</label>
              <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Insira o nome completo...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="add-pessoas-submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true">&nbsp</i>Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div> -->

</body>
</html>
