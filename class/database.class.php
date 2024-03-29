<?php

$server     = "localhost";
$user       = "root";
$password   = "";
$database   = "ssmv";

// Conecta ao banco de dados
$con = new mysqli($server, $user, $password, $database);

// Verifica se ocorreu algum erro
if ($con->connect_error) {
    die("Não foi possível conectar-se ao banco de dados: " . $con->connect_error);
    exit;
} 

$nomeSangue = array();
if(count($nomeSangue) == 0){
    if ($sql = $con->prepare("SELECT `tipo` FROM  `ssmv`.`tiposangue` ORDER BY idtipoSangue")) {
        $sql->execute();
        $sql->bind_result($nome_sangue);
        while($sql->fetch()){
            array_push($nomeSangue, $nome_sangue);
        }
        $sql->close();
    }
}


$nomeHemocentro = array();
if(count($nomeHemocentro) == 0){
    if ($sql = $con->prepare("SELECT `nome` FROM  `ssmv`.`marcador`")) {
        $sql->execute();
        $sql->bind_result($_marcador);
        while($sql->fetch()){
            array_push($nomeHemocentro, $_marcador);
        }
        $sql->close();
    }
}

$nomeEstado = array();
if(count($nomeEstado) == 0){
    if ($sql = $con->prepare("SELECT `nome` FROM  `ssmv`.`estados`")) {
        $sql->execute();
        $sql->bind_result($_estado);
        while($sql->fetch()){
            array_push($nomeEstado, $_estado);
        }
        $sql->close();
    }
}


?>