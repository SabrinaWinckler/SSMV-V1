<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once "config.class.php";
    require_once DB;

    // ENVIAR CONTATO
    if(@$_GET['contato'] == 'enviar'){
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $assunto    = $_POST["assunto"];

        if ($sql = $con->prepare("INSERT INTO `ssmv`.`contato` (`nome`, `email`, `assunto`) VALUES (?, ?, ?);")) {
          $sql->bind_param('sss', $nome, $email, $assunto);
          $sql->execute();
          $sql->close();
        }
    }

    if(@$_GET['cadastro'] == 'pf'){
        print_r($_POST);
        $nome               = $_POST["nome"];
        $sobrenome          = $_POST["sobrenome"];
        $cpf                = $_POST["cpf"];
        $nascimento         = $_POST["nascimento"];
        $genero             = $_POST["genero"];
        $estado             = $_POST["estado"];
        $cidade             = $_POST["cidade"];
        $telefonefixo       = $_POST["telefonefixo"];
        $telefonecelular    = $_POST["telefonecelular"];
        $tiposangue         = $_POST["tiposangue"];
        $peso               = $_POST["peso"];
        $email              = $_POST["email"];
        $senha              = $_POST["senha"];

    }

} else {
    header('HTTP/1.1 500 Internal Server Error');
}

?>