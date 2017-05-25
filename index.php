<!DOCTYPE html><?php require_once("config.class.php"); ?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página Inicial :: Seu Sangue, Minha Vida</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASECDN; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASECDN; ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo BASECDN; ?>fonts/open-sans/css/open-sans.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo BASECDN; ?>fonts/merriweather/css/merriweather.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo BASECDN; ?>fonts/kalam/css/kalam.css' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo BASECDN; ?>magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo BASECDN; ?>css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo BASECDN; ?>libs/html5shiv/html5shiv.js"></script>
        <script src="<?php echo BASECDN; ?>libs/respond.js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Seu sangue, minha vida</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="#quemsomos">Quem somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ajuda">Ajuda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="grad"></div>
        <div class="header-content">
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-2 login">
                    <div class="form-group">
                        <p> FORMULARIO DE LOGIN </p>
                        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" scope="public_profile,email" onlogin="checkLoginState();"></div>
                        <label for="email">E-mail</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon">@</div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Insira seu email" autocomplete="off" require="require" autofocus="autofocus">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                         <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha" autocomplete="off" require="require">
                        </div>
                    </div>

                    <input type="button" id="enviar" class="btn btn-primary" value="Entrar">
                    <input type="button" id="cadastrar" class="btn btn-error" value="Cadastrar">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </header>
    

    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo BASECDN; ?>scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo BASECDN; ?>magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo BASECDN; ?>js/creative.min.js"></script>


    <script>
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '213962312451886',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.8'
        });
        FB.AppEvents.logPageView();   
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
