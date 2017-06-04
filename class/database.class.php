<?php

// $server     = "localhost";
// $user       = "root";
// $password   = "";
// $database   = "imob_web";

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

// // Prepara uma consulta SQL
// if ($sql = $mysqli->prepare("SELECT `id`, `titulo`, `link` FROM `noticias` WHERE `ativa` = 1 AND `data` <= ?")) {
//   // Atribui valores às variáveis da consulta
//   $sql->bind_param('s', $data); // Coloca o valor de $data no lugar da primeira interrogação (?)
//   // Executa a consulta
//   $sql->execute();
//   // Atribui o resultado encontrado a variáveis
//   $sql->bind_result($id, $titulo, $link);
//   // Para cada resultado encontrado...
//   while ($sql->fetch()) {
//     // Exibe um link com a notícia
//     echo '['. $titulo .']('. $link .')';
//     echo '';
//   } // fim while
//   // Total de notícias
//   echo 'Total de notícias: ' . $sql->num_rows;
//   // Fecha a consulta
//   $sql->close();
// }

// // Fecha a conexão com o banco de dados
// $mysqli->close();

?>