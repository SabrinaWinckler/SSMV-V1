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
    <link href="<?php echo BASECDN; ?>css/login.css" rel="stylesheet">

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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll pointer" id="comeco">SSMV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll pointer" id="quemsomos">Quem somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="ajuda">Ajuda</a>
                    </li>
                    <li>
                        <a class="page-scroll pointer" id="contato">Contato</a>
                    </li>
                    <!--Checkbox-->
                    <li><label class="switch">
                    <input type="checkbox">
                    <div class="slider round"></div>
                    </label>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div id="design_class" class="inicio">
            <div id="principal" class="header-content">
                <form id="login">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="main">
                            <div class="login-section">
                                <h2>Login</h2>
                                <div class="login-top">
                                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                                </div>
                                <div class="login-middle">
                                    <p>Entre informando seu email e sua senha</p>
                                    <form>
                                        <input type="text" id="email" placeholder="Digite seu email">
                                        <input type="password" id="senha" placeholder="Digite sua senha">
                                    </form>
                                </div>
                                <div class="login-bottom">
                                    <div class="login-left">
                                        <p>Esqueceu sua senha?</p>
                                        <a href="#">Cadastre-se agora!</a>
                                    </div>
                                    <div class="login-right">
                                        <input type="button" value="Entrar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
    <!-- <script src="<?php echo BASECDN; ?>js/creative.min.js"></script> -->


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

    <script>
        inicio = $("#principal").html();

        $(document).ready(function(){
            setTimeout(function() {
                inicio = $("#principal").html();
            }, 1000);
        });

        $("#comeco").on("click", function(){
            $("title").text("Página Inicial :: Seu Sangue, Minha Vida");
            $("#design_class").removeClass().addClass("inicio");
            $("#principal").html(inicio);
        });

        $("#quemsomos").on("click", function(){
            $("title").text("Quem somos? :: Seu Sangue, Minha Vida");
            $("#design_class").removeClass().addClass("quemsomos");
            $("#principal").html("");
        });

        $("#faq").on("click", function(){
            $("title").text("FAQ :: Seu Sangue, Minha Vida");
            $("#design_class").removeClass().addClass("faq");
            $("#principal").html("<h1> Perguntas Frequentes</h1> <p>- Doar sangue engorda ou faz emagrecer?<br>Ao doar sangue você não engorda nem emagrece.<br>- Doar sangue engrossa ou afina o sangue?<br>Não engrossa nem afina o sangue, é apenas um mito.<br>- Doar sangue vicia?<br>Não. A doação de sangue não está relacionada a nenhuma dependência.<br>- É preciso algum documento de identidade?<br>Sim. O candidato deve apresentar documento original com foto, expedido pelo órgão oficial. Exemplos: Carteira de Identidade (RG ou RNE), passaporte, Carteira de Trabalho, Carteira de <>Identidade de Profissional, Carteira Nacional de Habilitação com foto e Certificado de Reservista.<br>- Fiz uma tatuagem há um ano. Posso doar?<br>Sim. Quem fez tatuagem há mais de um ano pode doar sangue.<br>- Há substituto para o sangue?<br>Não. Ainda não há nenhum substituto do sangue.<br>- O que é sangue universal?<br>Hoje sabemos que não existe sangue universal. Todas as pessoas têm características diferentes e por isso, quando necessitam de transfusão de sangue,precisamos fazer exames pré-transfusionais independente do grupo sanguíneo do doador e do receptor.<br>- O que é feito com o sangue que doamos?<br>Após a coleta, a bolsa coletada é fracionada em componentes sangüíneos (concentrado de hemácias, de plaquetas e plasma). Esses componentes são liberados para uso somente após o resultado dos exames. As unidades que apresentam reatividade sorológica são descartadas. Uma única unidade doada pode beneficiar três pacientes.<br>- O que é sangue raro?<br>É um sangue com característica especifica de baixa frequência na população e algumas vezes, pode ser uma característica familiar.<br>- O que se consegue em troca da doação de sangue?<br>A satisfação de beneficiar pessoas que não têm outra opção e dependem do gesto de pessoas como você para se sentir melhor.<br>- Tomei vacina para Hepatite B. Posso doar sangue?<br>A vacinação para Hepatite B impede a doação por 48 horas.<br>- A mulher pode doar sangue durante o período menstrual?<br>Sim.<br>- Doar sangue dói?<br>Não.<br>- O que acontece se uma pessoa que não sabe se está anêmica quiser doar sangue?<br>O candidato à doação é atendido por um profissional do Serviço de Hemoterapia, que realiza um teste rápido para verificar se o doador está ou não anêmico.<br>- O que são situações de risco acrescido para se transmitir doenças através da doação de sangue?<br>Ter múltiplos parceiros sexuais ocasionais ou eventuais sem uso de preservativo, usar drogas ilícitas, ter feito sexo em troca de dinheiro ou droga, ter sido vítima de estupro, ser parceiro sexual de pessoa que tenha exame reagente para infecções de transmissão sexual e sangüínea, ter parceiro sexual que pertença a alguma das situações acima, dentre outras.<br>- O uso de medicamento pode impedir alguém de doar?<br>O uso de medicamento deve ser analisado caso a caso. Portanto, antes de doar consulte o Serviço de Hemoterapia.<br>- Quanto tempo dura a doação?<br>O procedimento todo (cadastro, aferição de sinais vitais, teste de anemia, triagem clínica, coleta do sangue e lanche) leva cerca de 40 minutos.<br>- Quanto tempo leva para o organismo repor o sangue doador?<br>O organismo repõe o volume de sangue doado nas primeiras 24 horas após a doação.<br>- Quem está fazendo regime para emagrecer ou dieta pode doar sangue?<br>Sim. Dietas para emagrecimento não impedem a doação de sangue, desde que a perda não tenha comprometido a saúde.<br>- Quem estiver fazendo tratamento homeopático pode doar sangue?<br>Sim.<br>- Quem estiver fazendo tratamento com algum antibiótico pode doar sangue?<br>Depende do porquê a pessoa está tomando antibióticos. Em linhas gerais, para infecções simples e sem complicações, o doador deve aguardar 15 dias após a última dose do antibiótico para doar sangue. Infecções mais graves como pneumonia, meningite, entre outras, podem necessitar de um tempo maior para liberação do candidato à doação.<br>- Quem estiver fazendo tratamento com algum anti-inflamatório pode doar sangue?<br>Dependendo do motivo, a doação pode ser realizada normalmente. Não se esqueça de informar o nome do anti-inflamatório que você esta tomando.<br>- Quem faz tratamento para acne pode doar sangue?<br>Depende do tipo de tratamento. Caso o tratamento inclua o uso de antibióticos ou outros remédios de uso oral, não será posspivel doar.<br>- Quem tomou analgésico pode doar sangue?<br>Pode, mas é importante que no dia da doação o doador esteja sem dores.<br>- Grávidas podem doar sangue?<br>Não. Mas se o parto for normal, a mulher pode doar depois de três meses. Em caso de cesariana, após seis meses. Se estiver amamentando, aguardar 12 meses após o parto.<br>- É necessário estar em jejum para doar sangue?<br>O doador não deve estar em jejum. Tem que estar alimentado e descansado, evitar alimentação gordurosa nas quatro horas que antecedem a doação.<br>- Quem está gripado pode doar sangue?<br>Recomenda-se aguardar sete dias após a cura para poder doar.<br>- Quem tem diabete pode doar sangue?<br>Se a pessoa que tenha diabetes estiver controlando apenas com alimentação ou hipoglicemiantes orais e não apresente alterações vasculares, poderá doar. Caso ela tenha utilizado insulina<br>uma única vez, não poderá doar.</p>");
        });

        $("#ajuda").on("click", function(){
            $("#title").text("Ajuda :: Seu Sangue, Minha Vida");
            $("#design_class").removeClass().addClass("ajuda");
            $("#principal").html("");
        });

        $("#contato").on("click", function(){
            $("#title").text("Contato :: Seu Sangue, Minha Vida");
            $("#design_class").removeClass().addClass("contato");
            $("#principal").html('<body> <div class="background"> <h3>Fale Conosco:</h3> <div class="contato"><form action="/action_page.php"><label for="nome"></label><h2>Nome:</h2><input type="text" id="nome" name="nome" placeholder="Digite seu nome..."><label for="sobrenome"></label><h2>Sobrenome:</h2><input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome.."><label for="email"></label><h2>Email:</h2><input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome.."><label for="assunto"></label><h2>Assunto:</h2><textarea id="assunto" name="assunto" placeholder="Escreva aqui sua mensagem..." style="height:200px"></textarea><br><input type="submit" value="Enviar"></form></div></body>");
        });
    </script>
</body>
 <!-- http://www.inca.gov.br/conteudo_view.asp?id=2013 -->
</html>
