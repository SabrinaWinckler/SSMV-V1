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
            $sql1->bind_param('isssssisiiids', $idusuario, $nome, $sobrenome, $nascimento, $cpf, $genero, $estado, $municipio, $telefonefixo, $telefonecelular, $tiposangue, $peso, $ultimaDoacao);
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
    }

    //CADASTRO PJ
    if(@$_GET['cadastro'] == 'pj'){
        $tipo                   = $_GET["cadastro"];
        $nome                   = $_POST["nome"];
        $nomeFantasia           = $_POST["nomeFantasia"];
        $cnpj                   = preg_replace("/[^0-9]/", "", $_POST["cnpj"]);
        $cep                    = preg_replace("/[^0-9]/", "", $_POST["cep"]);
        $estado                 = $_POST["estado"];
        $cidade                 = $_POST["cidade"];
        $logradouro             = $_POST["logradouro"];
        $bairro                 = $_POST["bairro"];
        $logradouro_numero      = preg_replace("/[^0-9]/", "", $_POST["logradouro_numero"]);
        $logradouro_complemento = $_POST["logradouro_complemento"];
        $telefonefixo           = preg_replace("/[^0-9]/", "", $_POST["telefonefixo"]);
        $telefonefixo2          = preg_replace("/[^0-9]/", "", $_POST["telefonefixo2"]);
        $email                  = $_POST["email"];
        $senha                  = sha1(md5($_POST["senha"]));

        if ($sql = $con->prepare("INSERT INTO `ssmv`.`usuarios` (`email`, `senha`, `tipo`) VALUES (?, ?, ?);")) {
            $sql->bind_param('sss', $email, $senha, $tipo);
            $sql->execute();

            $idusuario = $con->insert_id;
            
            $sql->close();
            echo $con->error;
        }

        if ($sql1 = $con->prepare("INSERT INTO `ssmv`.`pj` (`idusuario`, `nome`, `nomeFantasia`, `cnpj`, `logradouro`, `numero`, `complemento`, `cep`, `bairro`, `idestado`, `municipio`, `telefoneF`, `telefoneF2`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);")){
            $sql1->bind_param('issssisssisss', $idusuario, $nome, $nomeFantasia, $cnpj, $logradouro, $logradouro_numero, $logradouro_complemento, $cep, $bairro, $estado, $cidade, $telefonefixo, $telefonefixo2);
            $sql1->execute();
            $sql1->close();
            echo $con->error;
        }

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
    }

    // ENTRAR COM EMAIL E SENHA
    if(@$_GET['login'] == 'entrar'){

        if((isset($_POST["email"])) && (isset($_POST["senha"]))){
            $email = $con->real_escape_string(preg_replace('/[^[:alpha:]0-9@._-]/', '', $_POST["email"]));
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

    //Solicitação
    if(@$_GET['solicitar'] == 'enviar'){
        $id                 = $_POST["idusuario"];
        $nome               = $_POST["nome"];
        $tipo_sangue        = $_POST["tipo_sangue"];
        $dataLimite         = $_POST["dia"];
        $urgencia           = $_POST["urgencia"];
        $dataSolicitacao    = date("Y-m-d");

        if ($sql = $con->prepare("SELECT `tipo` FROM  `ssmv`.`tiposangue` WHERE idtipoSangue = ?;")) {
            $sql->bind_param('i', $tipo_sangue);
            $sql->execute();
            $sql->bind_result($nome_sangue);
            $sql->fetch();
            $sql->close();
        }

        if ($sql = $con->prepare("SELECT `idsangueCompativel` FROM  `ssmv`.`sanguerecebedor` WHERE idsangueRecebedor = ?;")) {
            $sql->bind_param('i', $tipo_sangue);
            $sql->execute();
            $sql->bind_result($idsangueCompativel);
            $idsangueCompativeis = array();
            while ($sql->fetch()){
                array_push($idsangueCompativeis, $idsangueCompativel);
            }
            $sql->close();
        }

        $idCompativeis = array();
        foreach($idsangueCompativeis as $indice => $idsangueCompativel){
            if ($sql = $con->prepare("SELECT `idusuario` FROM  `ssmv`.`pf` WHERE idtipoSangue = ?;")){
                $sql->bind_param('i', $idsangueCompativel);
                $sql->execute();
                $sql->bind_result($idusuarioCompativel);
                $sql->fetch();
                if($idusuarioCompativel != $id){
                    array_push($idCompativeis, $idusuarioCompativel);
                }
                $sql->close();
            }
        }
        
        $idsFacebook = array();
        foreach($idCompativeis as $indice => $idusuario){
            if ($sql = $con->prepare("SELECT `idfacebook` FROM  `ssmv`.`usuarios` WHERE idusuario = ?;")){
                $sql->bind_param('i', $idusuario);
                $sql->execute();
                $sql->bind_result($idfacebook);
                $sql->fetch();
                if(!empty($idfacebook)){
                    array_push($idsFacebook, $idfacebook);
                }
                $sql->close();
            }
        }
        // array_push($idsFacebook, 1489277481137597);
        print_r(json_encode($idsFacebook));
        
        // foreach($idCompativeis as $indice => $idusuarioCompativel){
        //     $titulo = "Solicitação de Sangue do tipo ".$nome_sangue;
        //     $mensagem = $nome." está precisando de sangue do tipo ".$nome_sangue." para até o dia ".$dataLimite;
        //     if ($sql = $con->prepare("INSERT INTO `ssmv`.`notificacao` (`de`, `para`, `titulo`,`mensagem`, `data`) VALUES (?, ?, ?, ?, ?);")){
        //         $sql->bind_param('iisss', $id, $idusuarioCompativel, $titulo, $mensagem, $dataSolicitacao);
        //         $sql->execute();
        //         $sql->close();
        //     } else {
        //         echo $con->error;
        //     }
        // }

        // if ($sql = $con->prepare("INSERT INTO `ssmv`.`requisicao` (`idusuario`, `nome`, `tipoSangue`, `dataSolicitacao`, `dataLimite`, `urgencia`) VALUES (?, ?, ?, ?, ?, ?);")) {
        //   $sql->bind_param('isisss', $id, $nome, $tipo_sangue, $dataSolicitacao, $dataLimite, $urgencia);
        //   $sql->execute();
        //   $sql->close();
        // } else {
        //     echo $con->error;
        // }
    }

} else {

    if(@$_GET['login'] == 'logout'){
        require_once "config.class.php";
        session_start();

        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_unset();
        session_destroy();
        session_write_close();
        header("Location:". BASEURL);
        exit;
    }
    header('HTTP/1.1 500 Internal Server Error');
}

?>