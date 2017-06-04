<!DOCTYPE html><?php require_once("config.class.php"); ?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página Inicial :: Seu Sangue, Minha Vida</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASECDN; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='<?php echo BASECDN; ?>fonts/fonts.css' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo BASECDN; ?>magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo BASECDN; ?>css/creative.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>css/login.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>css/faq.css" rel="stylesheet">
    <link href="<?php echo BASECDN; ?>css/toastr.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo BASECDN; ?>libs/html5shiv/html5shiv.js"></script>
        <script src="<?php echo BASECDN; ?>libs/respond.js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- "Brand" e "toggle" são para uma melhor exibição para dispositivos móveis -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll pointer logo" id="comeco" href="#"></a>
            </div>

            <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll pointer" id="quemsomos" href="#quemsomos">Quem somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="faq" href="#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="ajuda" href="#ajuda">Ajuda</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="contato" href="#contato">Contato</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll pointer" onclick="acessibilidade()"><i class="fa fa-eye-slash fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Acessibilidade</a>
                    </li>
                    <!--<li>
                        <label class="switch">
                            <input type="checkbox">
                            <div class="slider round"></div>
                        </label>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>