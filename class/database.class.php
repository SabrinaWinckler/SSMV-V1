<?php

$server     = "localhost";
$user       = "root";
$password   = "";
$database   = "ssmv";

// Conecta ao banco de dados
$con = new mysqli($server, $user, $password, $database);

// Verifica se ocorreu algum erro
if (mysqli_connect_errno()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}

?>