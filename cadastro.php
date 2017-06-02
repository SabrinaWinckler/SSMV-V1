<!DOCTYPE html><?php require_once("config.class.php"); ?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro :: Seu sangue, minha vida</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo BASECDN; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='<?php echo BASECDN; ?>fonts/fonts.css' rel='stylesheet' type='text/css'>

        <!-- Theme CSS -->
        <link href='<?php echo BASECDN; ?>css/creative.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo BASECDN; ?>css/cadastro.css' rel='stylesheet' type='text/css'>
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
        <form id="formcadastro">
            <input type="hidden" value="" id="pessoa_selecionada">
            <div class="container cadastro">
                <div class="row-fluid" id="cad-1">
                    <div class="span10 offset1">
                        <div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#painel1" "painel1" data-toggle="tab"><i class="fa fa-id-card"></i>&nbsp;<span>Selecione</span></a></li>
                                <li class=""><a href="#painel2" id="bpainel2" data-toggle="tab"><i class="fa fa-user"></i>&nbsp;<span>Dados pessoais</span></a></li>
                                <li class=""><a href="#painel3" id="bpainel3" data-toggle="tab"><i class="fa fa-check-square-o"></i>&nbsp;<span>Questionário</span></a></li>
                                <li class=""><a href="#painel4" id="bpainel4" data-toggle="tab"><i class="fa fa-check-circle"></i>&nbsp;<span>Confira seus dados</span></a></li>
                                <li class=""><a href="#painel5" id="bpainel5" data-toggle="tab"><i class="fa fa-check-circle"></i>&nbsp;<span>Informações gerais</span></a></li>
                                <li class=""><a href="#painel6" id="bpainel6" data-toggle="tab"><i class="fa fa-check-circle"></i>&nbsp;<span>Confira seus dados</span></a></li>
                            </ul>
                            <form id="formcadastro">
                            <div class="tab-content">
                                <div class="tab-pane active" id="painel1">
                                    <div class="row-fluid">
                                        <h4><i class="fa fa-user"></i>&nbsp;&nbsp; Selecione</h4>
                                        <div class="col-md-6">
                                            <div class="sel-cad-left">
                                                <div class="selecionar-cadastro">
                                                    <div class="selecionar-cadastro-img pointer" data-choose="pf">
                                                        <i class="fa fa-user-circle fa-5x icone-centralizado" aria-hidden="true"></i>
                                                    </div>
                                                    <p class="selecionar-cadastro-p">Pessoa fisica</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="sel-cad-right">
                                                <div class="selecionar-cadastro">
                                                    <div class="selecionar-cadastro-img pointer" data-choose="pj">
                                                        <i class="fa fa-university fa-5x icone-centralizado" aria-hidden="true"></i>
                                                    </div>
                                                    <p class="selecionar-cadastro-p">Pessoa juridica</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="painel2">
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <h4><i class="icon-user"></i>&nbsp;&nbsp; Register Here</h4>


                                            <label>Username</label>
                                            <input type="text" class="input-block-level">
                                            <label>Password </label>
                                            <input type="password" class="input-block-level">
                                            <label>Repeat Password</label>
                                            <input type="password" class="input-block-level">
                                            <label>
                                                <button type="button" data-toggle="button" class="btn btn-mini custom-checkbox active"><i class="icon-ok"></i></button>
                                                &nbsp;&nbsp;&nbsp;I Aggree With <a href="#">Terms &amp; Conditions</a>
                                            </label>
                                            <br>

                                            <a href="#" class=" btn  ">Register Now&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>

                                        </div>
                                        <div class="span3">
                                            <h4><i class="icon-expand-alt"></i>&nbsp;&nbsp;Social</h4>
                                            <!--<div class="socials clearfix">
                                                <a class="icon-facebook facebook"></a>
                                                <a class="icon-twitter twitter"></a>
                                                <a class="icon-google-plus google-plus"></a>
                                                <a class="icon-pinterest pinterest"></a>
                                                <a class="icon-linkedin linked-in"></a>
                                                <a class="icon-github github"></a>
                                            </div>-->
                                        </div>
                                        <div class="span4">
                                            <h4><i class="icon-question"></i>&nbsp;&nbsp;Login</h4>
                                            <div class="box">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in.
                                                </p>
                                            </div>
                                            <div class="box">
                                                Already Have An Account.<br>
                                                Click Here For <a href="#" data-toggle="tab">Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="painel3">
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <h4><i class="icon-unlock"></i>&nbsp;&nbsp;Password Recovery</h4>

                                            <label>Email</label>
                                            <input type="text" class="input-block-level">
                                            <label>Security Question</label>
                                            <select class="input-block-level">
                                                <option disabled="disabled" selected="selected">---Select---</option>
                                                <option>Which Is Your First Mobile</option>
                                                <option>What Is Your Pet Name</option>
                                                <option>What Is Your Mother Name</option>
                                                <option>Which Is Your First Game</option>
                                            </select>
                                            <label>Answer</label>
                                            <input type="text" class="input-block-level">
                                            <br>
                                            <br>
                                            <a href="#" class=" btn  ">Recover Password&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
                                        </div>
                                        <div class="span7">
                                            <h4><i class="icon-question"></i>&nbsp;&nbsp;Help</h4>
                                            <div class="box">
                                                <p>Getting Error With Password Recovery Click Here For <a href="#">Support</a></p>
                                                <ul>


                                                    <li>Vestibulum pharetra lectus montes lacus!</li>
                                                    <li>Iaculis lectus augue pulvinar taciti.</li>
                                                </ul>

                                            </div>
                                            <div class="box">
                                                <ul>
                                                    <li>Potenti facilisis felis sociis blandit euismod.</li>
                                                    <li>Odio mi hendrerit ad nostra.</li>
                                                    <li>Rutrum mi commodo molestie taciti.</li>
                                                    <li>Interdum ipsum ad risus conubia, porttitor.</li>
                                                    <li>Placerat litora, proin hac hendrerit ac volutpat.</li>
                                                    <li>Ornare, aliquam condimentum  habitasse.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div id="painel5" class="tab-pane">
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;O Us</h4>
                                            <label>Name</label>
                                            <input type="text" value="" id="" class="input-block-level">
                                            <label>Email</label>
                                            <input type="text" value="" id="Text1" class="input-block-level">
                                            <label>Mobile No</label>
                                            <input type="text" value="" id="Text2" class="input-block-level">
                                            <label>Message</label>
                                            <textarea class="input-block-level" rows="5"></textarea>
                                            <a href="#" class=" btn ">Send Message&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
                                            <br class="visible-phone">
                                            <br class="visible-phone">
                                        </div>
                                        <div class="span7">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Locate Us</h4>

                                                    <div class="map"></div>

                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us</h4>
                                                    <address>
                                                        <strong>Full Name</strong><br>
                                                        <a href="mailto:#">first.last@example.com</a>
                                                    </address>
                                                </div>
                                                <div class="span6">
                                                    <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Our Address</h4>

                                                    <address>
                                                        <strong>Twitter, Inc.</strong><br>
                                                        795 Folsom Ave, Suite 600<br>
                                                        San Francisco, CA 94107<br>
                                                        <abbr title="Phone">P:</abbr>
                                                        (123) 456-7890
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="painel4" class="tab-pane">
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us</h4>
                                            <label>Name</label>
                                            <input type="text" value="" id="" class="input-block-level">
                                            <label>Email</label>
                                            <input type="text" value="" id="Text1" class="input-block-level">
                                            <label>Mobile No</label>
                                            <input type="text" value="" id="Text2" class="input-block-level">
                                            <label>Message</label>
                                            <textarea class="input-block-level" rows="5"></textarea>
                                            <a href="#" class=" btn ">Send Message&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
                                            <br class="visible-phone">
                                            <br class="visible-phone">
                                        </div>
                                        <div class="span7">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Locate Us</h4>

                                                    <div class="map"></div>

                                                </div>
                                            </div>
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <h4><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us</h4>
                                                    <address>
                                                        <strong>Full Name</strong><br>
                                                        <a href="mailto:#">first.last@example.com</a>
                                                    </address>
                                                </div>
                                                <div class="span6">
                                                    <h4><i class="icon-location-arrow"></i>&nbsp;&nbsp;Our Address</h4>

                                                    <address>
                                                        <strong>Twitter, Inc.</strong><br>
                                                        795 Folsom Ave, Suite 600<br>
                                                        San Francisco, CA 94107<br>
                                                        <abbr title="Phone">P:</abbr>
                                                        (123) 456-7890
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugins personalizados -->
    <script src="<?php echo BASECDN; ?>js/cadastro.js"></script>
    <script src="<?php echo BASECDN; ?>js/acessibilidade.js"></script>
</html>