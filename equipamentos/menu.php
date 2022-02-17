<?php
if (empty($_SESSION['email']) and empty($_SESSION['senha'])) {
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8" />
  <title>Controle Tablet e Smartphone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c5beb32215.js" crossorigin="anonymous"></script>
  <link href="css/css.css" rel="stylesheet">




</head>

<body >

  <div class="row" style="width: 100%;margin-left: 0px !important">
    <nav class="navbar" style="background-color: #3e4095; color: white">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-3">
            <a class="navbar-brand " href="index.php" style="color: white;">
              <img src="img/ico_logo.ico" alt="" width="35" height="30" class="d-inline-block align-text-top">
              CONTROLE EQUIPAMENTOS
            </a>
          </div>
          <div class="col-sm-5">

          </div>
          <div class="col-sm-4 text-end">
          <a type="button" href="chip.php" style="margin-right: 0px !important;" class="text-end btn btn-primary"><i class="fas fa-microchip"></i> CHIP'S</i></a>
            <a type="button" href="vendedor.php" style="margin-right: 0px !important;" class="text-end btn btn-success"><i class="text-end fas fa-users"></i> VENDEDORES</i></a>
            <a type="button" href="logount.php" class="btn btn-danger "><i class="fas fa-sign-out-alt"></i></a>
          </div>
        </div>

      </div>
    </nav>
  </div>