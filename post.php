<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once "config.class.php";
    require_once DB;

    // ENVIAR CONTATO
    if($_GET['contato'] == 'enviar'){
        $nome       = $_POST["nome"];
        $email      = $_POST["email"];
        $assunto    = $_POST["assunto"];

        if ($sql = $con->prepare("INSERT INTO `ssmv`.`contato` (`nome`, `email`, `assunto`) VALUES (?, ?, ?);")) {
          $sql->bind_param('sss', $nome, $email, $assunto);
          $sql->execute();
          $sql->close();
        }
    }

} else {
    header('HTTP/1.1 500 Internal Server Error');
}

?>