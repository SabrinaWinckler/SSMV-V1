<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php 

session_start();

require_once("../config.class.php");
require_once DB;

if(isset($_SESSION['tipo'])){
    if(!defined('LOGADO')){
        define('LOGADO', TRUE);
    }
} else {
    if(!defined('LOGADO')){
        define('LOGADO', FALSE);
        $_tipo = "na";
    }
}

if(LOGADO === TRUE){
    $_id = $_SESSION['id'];
    $_tipo = $_SESSION['tipo'];

    if(!isset($_SESSION['nome'])){
        if($_tipo == "pf"){
            if ($sql = $con->prepare("SELECT `nome`, `sobrenome`, `idtipoSangue` FROM `ssmv`.`pf` WHERE idusuario = ?;")) {
                $sql->bind_param('i', $_SESSION['id']);
                $sql->execute();
                $sql->bind_result($_nome, $_sobrenome, $_idtipoSangue);
                $sql->fetch();
                $sql->close();

                $_SESSION['nome'] = $_nome;
                $_SESSION['sobrenome'] = $_sobrenome;
                $_SESSION['sangue'] = $_idtipoSangue;
            }
        } else {
            if ($sql = $con->prepare("SELECT `nome` FROM `ssmv`.`pj` WHERE idusuario = ?;")) {
                $sql->bind_param('i', $_SESSION['id']);
                $sql->execute();
                $sql->bind_result($_nome);
                $sql->fetch();
                $sql->close();

                $_SESSION['nome'] = $_nome;
            }
        }
    }
}

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $config->descricao(); ?>">
    <meta name="author" content="<?php echo $config->autor(); ?>">

    <title><?php echo $pagina ?> :: Seu sangue, minha vida</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASECDN; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo BASECDN; ?>metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo BASECDN; ?>css/toastr.min.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>css/checkradio.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    
    <link href="<?php echo BASECDN; ?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASECDN; ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo BASECDN; ?>libs/html5shiv/html5shiv.js"></script>
        <script src="<?php echo BASECDN; ?>libs/respond.js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fundo">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="barra-cima navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="<?php echo BASEPAINEL; ?>"></a>
            </div>
            <!-- /.navbar-header -->

            <?php if(LOGADO == true): ?>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="icones-barra dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icones-barra-cima fa fa-envelope fa-fw"></i> <i class="icones-barra-cima fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <?php 
                            if ($sql = $con->prepare("SELECT `idnotificacao`, `de`, `titulo`, `mensagem`, `data` FROM `ssmv`.`notificacao` WHERE para = ? ORDER BY idnotificacao DESC LIMIT 3;")){
                                $sql->bind_param('i', $_id);
                                $sql->execute();
                                $sql->bind_result($id_noti, $de_noti, $titulo_noti, $mensagem_noti, $data_noti);
                                while($sql->fetch()){
                                    echo '<li>
                                            <a href="#">
                                                <div>
                                                    <strong>'. $titulo_noti .'</strong>
                                                    <span class="pull-right text-muted">
                                                    <em>'.date_format(date_create($data_noti), 'd/m/Y').'</em>
                                                    </span>
                                                </div>
                                                <div>'. $mensagem_noti .'</div>
                                            </a>
                                        </li>
                                        <li class="divider"></li>';
                                }
                                $sql->close();
                            }
                        ?>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas as notificações</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="icones-barra icones-barra-cima dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['nome']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo BASEPAINEL."perfil" ?>"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo BASEPAINEL."logout" ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php else: ?>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>Logar <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <form class="login">
                            <div class="fb-login-button" scope="public_profile,email" onlogin="checkLoginState();" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                            <br /><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Password">
                            </div>
                            <button type="button" id="entrar" class="btn btn-primary ">Entrar</button>
                        </form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php endif; ?>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php
                            require_once "permissao.php";
                         ?>
                        <!--<li>
                            <a href="<?php echo BASEPAINEL."cronograma" ?>"><i class="fa fa-calendar fa-fw"></i> Cronograma</a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>