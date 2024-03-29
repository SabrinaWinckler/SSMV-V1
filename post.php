<?php 

require_once "config.class.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once(DB);

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
// CADASTRO PF                  
    if(@$_GET['cadastro'] == 'pf'){
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

// CADASTRO PJ                  
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

// LOGIN COM EMAIL              
    if(@$_GET['login'] == 'entrar'){

        if((isset($_POST["email"])) && (isset($_POST["senha"]))){
            $email = $con->real_escape_string(preg_replace('/[^[:alpha:]0-9@._-]/', '', $_POST["email"]));
            $senha = $con->real_escape_string(preg_replace('/[^[:alpha:]0-9#@._-]/', '', $_POST["senha"]));
            $senha = sha1(md5($senha));

            if ($sql = $con->prepare("SELECT `idusuario`, `email`, `senha`, `tipo`, `idfacebook` FROM  `ssmv`.`usuarios` WHERE email = ? && senha = ?;")) {
                $sql->bind_param('ss', $email, $senha);
                $sql->execute();
                $sql->bind_result($_id, $_email, $_senha, $_tipo, $_facebook);
                $sql->fetch();

                if(isset($_email)){
                    session_start();
                    $_SESSION['id'] = $_id;
                    $_SESSION['tipo'] = $_tipo;
                    $_SESSION['idfacebook'] = $_facebook;
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

// LOGIN COM FACEBOOK           
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
                    $_SESSION['idfacebook'] = $_facebook;
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

// SOLICITAR DOAÇÃO             
    if(@$_GET['requisicao'] == 'enviar'){
        $id                 = $_POST["idusuario"];
        $nome               = $_POST["nome"];
        $tipo_sangue        = $_POST["tipo_sangue"];
        $dataLimite         = $_POST["dia"];
        $urgencia           = $_POST["urgencia"];
        $idmarcador         = $_POST["hemocentro"];
        $dataSolicitacao    = date("Y-m-d");

        if ($sql = $con->prepare("SELECT `tipo` FROM  `ssmv`.`tiposangue` WHERE idtipoSangue = ?;")) {
            $sql->bind_param('i', $tipo_sangue);
            $sql->execute();
            $sql->bind_result($nome_sangue);
            $sql->fetch();
            $sql->close();
        }

        if ($sql = $con->prepare("SELECT `idsangueCompativel` FROM `ssmv`.`sanguerecebedor` WHERE idsangueRecebedor = ?;")) {
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
                while($sql->fetch()){
                    if($idusuarioCompativel != $id){
                        array_push($idCompativeis, $idusuarioCompativel);
                    }
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
        print_r(json_encode($idsFacebook));
        
        foreach($idCompativeis as $indice => $idusuarioCompativel){
            $titulo = "Solicitação de Sangue do tipo ".$nome_sangue;
            $mensagem = $nome." está precisando de sangue do tipo ".$nome_sangue." para até o dia ".$dataLimite;
            if ($sql = $con->prepare("INSERT INTO `ssmv`.`notificacao` (`de`, `para`, `titulo`,`mensagem`, `data`) VALUES (?, ?, ?, ?, ?);")){
                $sql->bind_param('iisss', $id, $idusuarioCompativel, $titulo, $mensagem, $dataSolicitacao);
                $sql->execute();
                $sql->close();
            } else {
                echo "Notificação: \n\r";
                echo $con->error;
            }
        }

        if ($sql = $con->prepare("INSERT INTO `ssmv`.`requisicao` (`idusuario`, `nome`, `tipoSangue`, `dataSolicitacao`, `dataLimite`, `urgencia`, `idmarcador`) VALUES (?, ?, ?, ?, ?, ?, ?);")) {
          $sql->bind_param('isissii', $id, $nome, $tipo_sangue, $dataSolicitacao, $dataLimite, $urgencia, $idmarcador);
          $sql->execute();
          $sql->close();
        } else {
            echo "Requisição: \n\r";
            echo $con->error;
        }
    }

// REMOVER DOAÇÃO               
    if(@$_GET["requisicao"] == "remover"){
        $idreq = $_POST["idreq"];

        if ($sql = $con->prepare("DELETE FROM `ssmv`.`requisicao` WHERE `idrequisicao`= ?;")) {
            $sql->bind_param('i', $idreq);
            $sql->execute();

            if($sql->affected_rows == 0){
                echo "Err1";
            } else {
                echo "Suc1";
            }

            $sql->close();
        }
    }

    // FILTRO DOAÇÃO            
    if(@$_GET["requisicao"] == "filtrar"){
        $_id = $_POST["iduser"];
        $filtro = '%'.$_POST["filtro"].'%';

        if ($sql = $con->prepare("SELECT `idrequisicao`, `idusuario`, `nome`, `tipoSangue`, `dataLimite`, `urgencia`, `idmarcador` FROM ssmv.requisicao WHERE `nome` LIKE ? OR `tiposangue` LIKE ? OR `urgencia` LIKE ?;")) {
            $sql->bind_param('sss', $filtro, $filtro, $filtro);
            $sql->execute();
            $sql->bind_result($_req_idrequisicao, $_req_idusuario, $_req_nome, $_req_tipoSangue, $_req_dataLimite, $_req_urgencia, $_req_idmarcador);
            $filtrados = array();
            $tipoUrgencia = array(1 => "baixo", 2 => "medio", 3 => "alto");
            while ($sql->fetch()){
                if ($_id != $_req_idusuario) {
                    echo '<div class="col-sm-3 col-exception-padding">
                    <div class=" boxReq-container urgencia-'.$tipoUrgencia[$_req_urgencia].' boxReq-item req-transition">
                        <div class="req-top-list-header">
                            <a href="#" title="'. $_req_nome .'">
                                <span class="req-title req-trunc">'. $_req_nome .'</span>
                            </a>
                            <span class="req-topicos">Solicita: Sangue '. $nomeSangue[$_req_tipoSangue - 1] .'</span><br />
                            <span class="req-topicos">'. $nomeHemocentro[$_req_idmarcador - 1] .'</span><br />
                            <span class="req-topicos">Data limite: '. date_format(date_create($_req_dataLimite), 'd/m/Y') .'</span>
                        </div>
                        <a href="#" onclick="querodoar('. $_req_idrequisicao .')" class="req-category">Quero doar!</a>
                    </div>
                </div>';
                }
            }
            $sql->close();
        }
    }

// MODAL DOAÇÃO                 
    if(@$_GET["doacao"] == "modal"){
        $idreq  = $_POST["idreq"];

        if ($sql = $con->prepare("SELECT `idusuario`, `nome`, `tipoSangue`, `dataLimite`, `urgencia`, `idmarcador` FROM ssmv.requisicao WHERE `idrequisicao` = ?;")) {
            $sql->bind_param('i', $idreq);
            $sql->execute();
            $sql->bind_result($_req_idusuario, $_req_nome, $_req_tipoSangue, $_req_dataLimite, $_req_urgencia, $_req_idmarcador);
            $sql->fetch();

            $tipoUrgencia = array(1 => "Baixo", 2 => "Médio", 3 => "Alta");

            $info_req = array(
                "idrequisicao"  => $idreq,
                "idusuario"     => $_req_idusuario,
                "nome"          => $_req_nome,
                "tipoSangue"    => $nomeSangue[$_req_tipoSangue - 1],
                "dataLimite"    => date_format(date_create($_req_dataLimite), 'd/m/Y'),
                "urgencia"      => $tipoUrgencia[$_req_urgencia],
                "idmarcador"    => $nomeHemocentro[$_req_idmarcador-1]
            );

            print_r(json_encode($info_req));
            $sql->close();
        }
    }
// CONFIRMAÇÃO DA DOAÇÃO        
    if(@$_GET["doacao"] == "confirmar"){
        $idreq  = $_POST["datareq"];
        $doador  = $_POST["doador"];

        if ($sql = $con->prepare("UPDATE `ssmv`.`requisicao` SET `doador` = ? WHERE `idrequisicao` = ?;")) {
            $sql->bind_param('ii', $doador, $idreq);
            $sql->execute();
            $sql->close();
            echo "Suc";
        } else {
            echo "Confirmar doação: \n\r";
            echo $con->error;
        }
    }

// ESQUECIA A SENHA             
    if(@$_GET["senha"] == "esqueci"){
        $email = $_POST["email"];

        if ($sql = $con->prepare("SELECT `email` FROM  `ssmv`.`usuarios` WHERE email = ?;")) {
            $sql->bind_param('s', $email);
            $sql->execute();
            $sql->bind_result($existe);
            $sql->fetch();

            if($existe == ""){
                echo "Err1";
            } else {
                echo "Suc1";
            }

            $sql->close();
        }

        $data = date('Y-m-d');
        $horario = date('H:i:s');
        $token = md5(md5(time().rand(0,50).rand(0,50)));

        if($existe != ""){
            if ($sql = $con->prepare("INSERT INTO `ssmv`.`token_senha` (`email`, `token`, `data`, `horario`, `utilizado`) VALUES (?, ?, ?, ?, '0');")) {
                $sql->bind_param('ssss', $email, $token, $data, $horario);
                $sql->execute();
                $sql->close();
            }
        }
    }

// RESETAR A SENHA (TOKEN)      

    if(@$_GET["senha"] == "token"){
        
        $token = $_POST["token"];

        if ($sql = $con->prepare("SELECT `email`, `data`, `horario`, `utilizado` FROM  `ssmv`.`token_senha` WHERE token = ?;")) {
            $sql->bind_param('s', $token);
            $sql->execute();
            $sql->bind_result($_token_email, $_token_data, $_token_horario, $_token_utilizado);
            $sql->fetch();
            $sql->close();
        }

        if(!empty($_token_email)){

            if ($sql = $con->prepare("SELECT `idusuario` FROM  `ssmv`.`usuarios` WHERE email = ?;")) {
                $sql->bind_param('s', $_token_email);
                $sql->execute();
                $sql->bind_result($_user_id);
                $sql->fetch();
                $sql->close();
            }

            if ($sql = $con->prepare("SELECT `nome` FROM  `ssmv`.`pf` WHERE idusuario = ?;")) {
                $sql->bind_param('s', $_user_id);
                $sql->execute();
                $sql->bind_result($_user_nome);
                $sql->fetch();
                $sql->close();
            }

            if(date('H:i:s', strtotime('+5 minute', strtotime($_token_horario))) > date('H:i:s') && $_token_data == date('Y-m-d')){
                if($_token_utilizado != 1){
                    echo $_user_nome;
                } else {
                    echo "Err1"; //TOKEN JÁ UTILIZADO
                }
            } else {
                echo "Err2"; //TEMPO LIMITE ULTRAPASSADO
            }
        } else {
                echo "Err3"; // TOKEN INEXISTENTE
        }

    }

// ADICIONAR FOTO 
    if(@$_GET["foto"] == "add"){
        print_r($_POST);

    // $nomeEvento = $_POST['nome_evento'];
    // $descricaoEvento = $_POST['descricao_evento'];
    // $imagem = $_FILES['imagem']['tmp_name'];
    // $tamanho = $_FILES['imagem']['size'];
    // $tipo = $_FILES['imagem']['type'];
    // $nome = $_FILES['imagem']['name'];
    
    // if ( $imagem != "none" )
    // {
    //     $fp = fopen($imagem, "rb");
    //     $conteudo = fread($fp, $tamanho);
    //     $conteudo = addslashes($conteudo);
    //     fclose($fp);
    
    // $queryInsercao = "INSERT INTO tabela_imagens (nome_evento, descrição_evento, nome_imagem, tamanho_imagem, tipo_imagem, imagem) VALUES ('$nomeEvento', '$descricaoEvento','$nome','$tamanho', '$tipo','$conteudo')";
    
    // mysql_query($queryInsercao) or die("Algo deu errado ao inserir o registro. Tente novamente.");
    // echo 'Registro inserido com sucesso!'; 
    // header('Location: index.php');
    // if(mysql_affected_rows($conexao) > 0)
    //     print "A imagem foi salva na base de dados.";
    // else
    //     print "Não foi possível salvar a imagem na base de dados.";
    // }
    // else
    //     print "Não foi possível carregar a imagem.";

    }


} else {
// LOGOUT                       
    if(@$_GET['login'] == 'logout'){
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

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    header("Location: " . BASEURL);
}

?>