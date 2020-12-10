<!DOCTYPE html>
<html lang="pt">

<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
  <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="css\master.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>

  <!-- Navbar -->
  <?php include_once("templates\header.i.php");?>

  <!-- Login Form -->
  <div class="container sigin-container">
    <div class="row">
      <div class="col"></div>
      <div class="col-lg-5 col-md-8 col-sm-12">
        <div class="card sigin-card">
          <h5 class="card-title">Entre com as credenciais.</h5>
          <form class="sigin-form" action="includes\login.inc.php" method="post">
            <div class=" form-group">
              <input type="text" name="uid" placeholder="Usuário..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <input type="password" name="psw" placeholder="Senha..." class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="login-button" class="btn btn-primary">Entrar</button>
          </form>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>
