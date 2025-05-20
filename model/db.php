<?php

session_start();
$db_name = "MOVIESTAR";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$conn = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

// aquii eu vou habilitar os erros
$conn->setAttribute(PDO::   ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //isso faz com que EXPLODA O ERRO NA TELA PRA DEBUGARM MAIS RAPIDP
