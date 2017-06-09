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
        //print_r($_POST);
        $tipo               = $_GET["cadastro"];
        $nome               = $_POST["nome"];
        $sobrenome          = $_POST["sobrenome"];
        $cpf                = preg_replace("/[^0-9]/", "", $_POST["cpf"]);
        $nascimento         = $_POST["nascimento"];
        $genero             = $_POST["genero"];
        $estado             = $_POST["estado"];
        $municipio          = $_POST["cidade"];
        $telefonefixo       = preg_replace("/[^0-9]/", "", $_POST["telefonefixo"]);
        $telefonecelular    = preg_replace("/[^0-9]/", "", $_POST["telefonecelular"]);
        $tiposangue         = $_POST["tiposangue"];
        $peso               = $_POST["peso"];
        $email              = $_POST["email"];
        $senha              = sha1(md5($_POST["senha"]));
        $resp1              = $_POST["resp1"];
        $resp2              = $_POST["resp2"];
        $resp3              = $_POST["resp3"];
        $resp4              = $_POST["resp4"];
        $resp5              = $_POST["resp5"];
        $resp6              = $_POST["resp6"];
        $resp7              = $_POST["resp7"];
        $resp8              = $_POST["resp8"];
        $resp9              = $_POST["resp9"];
        $resp10             = $_POST["resp10"];
        $resp11             = $_POST["resp11"];
        $resp12             = $_POST["resp12"];
        $resp13             = $_POST["resp13"];
        $resp14             = $_POST["resp14"];
        $resp15             = $_POST["resp15"];
        $resp16             = $_POST["resp16"];
        $resp17             = $_POST["resp17"];
        $facebook           = $_POST["idfacebook"];
        if(empty($facebook)){
            $facebook = null;
        }
        $ultimaDoacao       = $_POST["ultimaDoacao"];

        if ($sql = $con->prepare("INSERT INTO `ssmv`.`usuarios` (`email`, `senha`, `tipo`, `idfacebook`) VALUES (?, ?, ?, ?);")) {
            $sql->bind_param('ssss', $email, $senha, $tipo, $facebook);
            // $sql->bind_param('ssss', $email, $senha, $tipo, $facebook);
            $sql->execute();

            $idusuario = $con->insert_id;
            
            $sql->close();
            echo $con->error;
        }

        if ($sql1 = $con->prepare("INSERT INTO `ssmv`.`pf` (`idusuario`, `nome`, `sobrenome`, `dataNascimento`, `cpf`, `genero`, `idestado`, `municipio`, `telefoneF`, `telefoneC`, `idtipoSangue`, `peso`, `ultimaDoacao`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);")){
            $sql1->bind_param('isssisisiiids', $idusuario, $nome, $sobrenome, $nascimento, $cpf, $genero, $estado, $municipio, $telefonefixo, $telefonecelular, $tiposangue, $peso, $ultimaDoacao);
            $sql1->execute();
            $sql1->close();
            echo $con->error;
        
        }
        
        if ($sql2 = $con->prepare("INSERT INTO `ssmv`.`questionario` (`idusuario`, `resp1`, `resp2`, `resp3`, `resp4`, `resp5`, `resp6`, `resp7`, `resp8`, `resp9`, `resp10`, `resp11`, `resp12`, `resp13`, `resp14`, `resp15`, `resp16`, `resp17`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);")) {
            $sql2->bind_param('iiiiiiiiiiiiiiiiii', $idusuario, $resp1, $resp2, $resp3, $resp4, $resp5, $resp6, $resp7, $resp8, $resp9, $resp10, $resp11, $resp12, $resp13, $resp14, $resp15, $resp16, $resp17);
            $sql2->execute();
            $sql2->close();
            echo $con->error;
        }
    }

    if(@$_GET['login'] == 'entrar'){

        if((isset($_POST["email"])) && (isset($_POST["senha"]))){
            $email = $con->real_escape_string(preg_replace('/[^[:alpha:]@._-]/', '', $_POST["email"]));
            $senha = $con->real_escape_string(preg_replace('/[^[:alpha:]0-9#@._-]/', '', $_POST["senha"]));
            $senha = sha1(md5($senha));

            if ($sql = $con->prepare("SELECT `idusuario`, `email`, `senha`, `tipo` FROM  `ssmv`.`usuarios` WHERE email = ? && senha = ?;")) {
                $sql->bind_param('ss', $email, $senha);
                $sql->execute();
                $sql->bind_result($_id, $_email, $_senha, $_tipo);
                $sql->fetch();

                if(isset($_email)){
                    session_start();
                    $_SESSION['id'] = $_id;
                    $_SESSION['tipo'] = $_tipo;
                    echo BASEPAINEL;
                } else {
                    echo "Err1"; //Usuário ou senha está errado
                }
                $sql->close();
            }
        } else {
             echo "Err2"; //Não foi informado o email e senha consequentemente não existe a váriavel email ou a váriavel senha
        }
    }

    if(@$_GET['login'] == 'fb'){

        if(isset($_POST["fb"])){
            $fb = $con->real_escape_string(preg_replace('/[^0-9]/', '', $_POST["fb"]));

            if ($sql = $con->prepare("SELECT `idusuario`, `tipo`, `idfacebook` FROM  `ssmv`.`usuarios` WHERE idfacebook = ?;")) {
                $sql->bind_param('i', $fb);
                $sql->execute();
                $sql->bind_result($_id, $_tipo, $_facebook);
                $sql->fetch();

                if(isset($_facebook)){
                    session_start();
                    $_SESSION['id'] = $_id;
                    $_SESSION['tipo'] = $_tipo;
                    echo BASEPAINEL;
                } else {
                    echo "Err1"; //Usuário não vinculou o facebook
                }
                $sql->close();
            }
        } else {
             echo "Err2"; //Não foi possivel identificar o facebook
        }
    }

} else {

    if(@$_GET['login'] == 'logout'){
        require_once "config.class.php";
        session_start();
        unset(
            $_SESSION['id'],
            $_SESSION['tipo']
        );
        session_destroy();
        header("Location:". BASEURL);
        exit;
    }
    header('HTTP/1.1 500 Internal Server Error');
}

?>