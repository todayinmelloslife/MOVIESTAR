<?php
require_once(__DIR__ . '/../../globals.php'); //SERVE OU PRA CARREGAR AS VARIAVEIS GLOBAIS
require_once(__DIR__ . '/../../model/db.php'); // CONEXAO COM O BANCO DE DADOS

$flashMessage = [];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIESTAR</title>
    <link rel="short icon" href="<?= $BASE_URL ?>assets/img/moviestar.ico">
    <!-- Bootstrap CSS only -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css" integrity="sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>view/css/style.css">
    <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
 <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>view/img/logo.svg" alt="MovieStar" id="logo">
        <span id="moviestar-title">MovieStar</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button> <!-- criei um botao que vai ser pra mobile, chique ne -->

      <form action="" method="GET" id="search-form" class="d-flex my-2 my-lg-0">
        <input
          type="search"
          name="q"
          id="search"
          class="form-control me-2"
          placeholder="Pesquisar filme..."
          aria-label="search"
        >
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= $BASE_URL ?>view/templates/auth.php" class="nav-link">Entrar  |  Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
      <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
  <?php endif; ?>
