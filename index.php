<?php
require_once('globals.php'); //SERVE OU PRA CARREGAR AS VARIAVEIS GLOBAIS
require_once('model/db.php'); // CONEXAO COM O BANCO DE DADOS

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
     <nav id="main-navbar" class="navbar-expand-lg">   
          <a href="<?= $BASE_URL ?>" class="navbar-brand">
          <img src="<?= $BASE_URL ?>view/img/logo.svg" alt="MovieStar" id="logo">
          <span id="moviestar-title">MovieStar</span>
     </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-constrols="navbar" aria-expanded= "false" aria-label="toggle navigation">
          <i class= "fas fa-bars"></i>
      </button> 
          <!-- esse button serve para abrir o menu no mobile -->

     </nav>
  </header>



     <!-- Bootstrap JS only -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.js" integrity="sha512-lsA4IzLaXH0A+uH6JQTuz6DbhqxmVygrWv1CpC/s5vGyMqlnP0y+RYt65vKxbaVq+H6OzbbRtxzf+Zbj20alGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>