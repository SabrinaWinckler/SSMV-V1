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
        <link href='<?php echo BASECDN; ?>css/checkradio.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo BASECDN; ?>css/toastr.min.css' rel='stylesheet' type='text/css'>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="<?php echo BASECDN; ?>libs/html5shiv/html5shiv.js"></script>
            <script src="<?php echo BASECDN; ?>libs/respond.js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="fb-root"></div>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- "Brand" e "toggle" são para uma melhor exibição para dispositivos móveis -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll pointer logo" id="comeco" href="<?php echo BASEURL; ?>"></a>
                </div>

                <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="page-scroll pointer" id="quemsomos" href="<?php echo BASEURL; ?>#quemsomos">Quem somos?</a>
                        </li>
                        <li>
                            <a class="page-scroll pointer" id="faq" href="<?php echo BASEURL; ?>#faq">FAQ</a>
                        </li>
                        <li>
                            <a class="page-scroll pointer" id="ajuda" href="<?php echo BASEURL; ?>#ajuda">Ajuda</a>
                        </li>
                        <li>
                            <a class="page-scroll pointer" id="contato" href="<?php echo BASEURL; ?>#contato">Contato</a>
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
            <input type="hidden" value="" id="idfacebook">
            <div class="container cadastro">
                <div class="row-fluid" id="cad-1">
                    <div class="span10 offset1">
                        <div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
                            <ul class="nav nav-tabs">
                                <li class="active" id="apainel1"><a href="#painel1" id="bpainel1" data-toggle="tab"><i class="fa fa-id-card"></i>&nbsp;<span>Selecione</span></a></li>
                                <li class="" id="apainel2"><a href="#painel2" id="bpainel2" data-toggle="tab"><i class="fa fa-user"></i>&nbsp;<span>Dados pessoais</span></a></li>
                                <li class="" id="apainel3"><a href="#painel3" id="bpainel3" data-toggle="tab"><i class="fa fa-check-square-o"></i>&nbsp;<span>Questionário</span></a></li>
                                <li class="" id="apainel4"><a href="#painel4" id="bpainel4" data-toggle="tab"><i class="fa fa-check-circle"></i>&nbsp;<span>Confira seus dados</span></a></li>
                                <li class="" id="apainel5"><a href="#painel5" id="bpainel5" data-toggle="tab"><i class="fa fa-university"></i>&nbsp;<span>Informações gerais</span></a></li>
                                <li class="" id="apainel6"><a href="#painel6" id="bpainel6" data-toggle="tab"><i class="fa fa-check-circle"></i>&nbsp;<span>Confira seus dados</span></a></li>
                            </ul>
                                
                            <div class="tab-content">

                               <!-- SELECIONE -->
                                <div class="tab-pane active" id="painel1">
                                    <div class="row-fluid">
                                        <h4><i class="fa fa-id-card"></i>&nbsp;&nbsp; Selecione</h4>
                                        <div class="row">
                                            <div class="col-md-6">

                                                    <div class="selecionar-cadastro">
                                                        <div class="selecionar-cadastro-img pointer" data-choose="pf">
                                                            <i class="fa fa-user-circle fa-5x icone-centralizado" aria-hidden="true"></i>
                                                        </div>
                                                        <p class="selecionar-cadastro-p">Pessoa fisica</p>
                                                    </div>

                                            </div>

                                            <div class="col-md-6">
 
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

                                <!-- PF:DADOS PESSOAIS -->
                                <div class="tab-pane" id="painel2">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h4><i class="fa fa-user"></i>&nbsp;&nbsp; Informe seus dados</h4>
                                                </div>
                                                <div>
                                                    <div class="fb-login-button" scope="public_profile,email" onlogin="checkLoginState();" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Nome*</label>
                                                        <input type="text" id="pf_nome" name="pf_nome" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Sobrenome*</label>
                                                        <input type="text" id="pf_sobrenome" name="pf_sobrenome" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF*</label> <i id="ver_pf_cpf" class=""></i>
                                                        <input type="text" id="pf_CPF" name="pf_CPF" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Data de nascimento*</label>
                                                        <input type="date" id="pf_nascimento" name="pf_nascimento" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 centro">
                                                    <label>Gênero*</label>
                                                    <div class="form-group">
                                                        <input type="radio" id="pf_genero_feminino" name="pf_genero" value="F">
                                                        <label for="pf_genero_feminino">Feminino</label>
                                                        <input type="radio" id="pf_genero_masculino" name="pf_genero" value="M">
                                                        <label for="pf_genero_masculino">Masculino</label>
                                                        <input type="radio" id="pf_genero_outro" name="pf_genero" value="O">
                                                        <label for="pf_genero_outro">Não especificado</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado*</label>
                                                        <select id="pf_estado" name="pf_estado" class="form-control" required="required">
                                                            <?php 
                                                            
                                                            require_once DB;

                                                            if ($sql = $con->prepare("SELECT `idestado`, `nome` FROM  `ssmv`.`estados`;")) {
                                                                $sql->execute();
                                                                $sql->bind_result($idestado, $nome);
                                                                while ($sql->fetch()) {
                                                                    echo "<option value=" . $idestado . ">" . $nome . "</option>";
                                                                }
                                                                $sql->close();
                                                            }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade*</label>
                                                        <select id="pf_cidade" name="pf_cidade" class="form-control" required="required">
                                                            <option value="Acrelândia">Acrelândia</option>
                                                            <option value="Assis Brasil">Assis Brasil</option>
                                                            <option value="Brasiléia">Brasiléia</option>
                                                            <option value="Bujari">Bujari</option>
                                                            <option value="Capixaba">Capixaba</option>
                                                            <option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
                                                            <option value="Epitaciolândia">Epitaciolândia</option>
                                                            <option value="Feijó">Feijó</option>
                                                            <option value="Jordão">Jordão</option>
                                                            <option value="Mâncio Lima">Mâncio Lima</option>
                                                            <option value="Manoel Urbano">Manoel Urbano</option>
                                                            <option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option>
                                                            <option value="Plácido de Castro">Plácido de Castro</option>
                                                            <option value="Porto Acre">Porto Acre</option>
                                                            <option value="Porto Walter">Porto Walter</option>
                                                            <option value="Rio Branco">Rio Branco</option>
                                                            <option value="Rodrigues Alves">Rodrigues Alves</option>
                                                            <option value="Santa Rosa do Purus">Santa Rosa do Purus</option>
                                                            <option value="Sena Madureira">Sena Madureira</option>
                                                            <option value="Senador Guiomard">Senador Guiomard</option>
                                                            <option value="Tarauacá">Tarauacá</option>
                                                            <option value="Xapuri">Xapuri</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                                
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Telefone fixo</label>
                                                        <input type="text" id="pf_telefone_fixo" name="pf_telefone_fixo" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Telefone celular*</label>
                                                        <input type="text" id="pf_telefone_celular" name="pf_telefone_celular" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Tipo sanguíneo*</label>
                                                        <select id="pf_tipo_sangue" name="pf_tipo_sangue" class="form-control" required="required">
                                                            <option value="N">Não sei</option>
                                                            <?php 

                                                            if ($sql = $con->prepare("SELECT `idtipoSangue`, `tipo` FROM  `ssmv`.`tipoSangue`;")) {
                                                                $sql->execute();
                                                                $sql->bind_result($idtipoSangue, $tipo);
                                                                while ($sql->fetch()) {
                                                                    echo "<option value=" . $idtipoSangue . ">" . $tipo . "</option>";
                                                                }
                                                                $sql->close();
                                                            }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Peso (kg)*</label>
                                                        <input type="number" id="pf_peso" name="pf_peso" placeholder="50.0" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>E-mail*</label>
                                                        <input type="text" id="pf_email" name="pf_email" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Ultima doação</label>
                                                        <input type="date" id="pf_ultimaDoacao" name="pf_ultimaDoacao" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-3"></div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Digite sua senha*</label>
                                                        <input type="password" id="pf_senha" name="pf_senha" class="form-control" required="required">
                                                    </div>
                                                </div>
                                                    

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="pf_senha_errada">Repita sua senha*</label>
                                                        <input type="password" id="pf_repita_senha" name="pf_repita_senha" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <input type="button" id="eapainel2" value="Anterior">
                                                <input type="button" id="eppainel2" value="Proximo">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PF:QUESTIONARIO -->
                                <div class="tab-pane" id="painel3">
                                    <div class="row-fluid">
                                        <div class="span12">
                                        <h4><i class="fa fa-check-square-o"></i>&nbsp;&nbsp;Marque as opções que forem verdadeiras </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox custom">
                                                        <input id="resp1" name="resp1" value="1" texto="Você tem ou teve um teste positivo para HIV" class="css-checkbox" type="checkbox">
                                                        <label for="resp1" class="css-label"></label>
                                                        Você tem ou teve um teste positivo para HIV?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp2" name="resp2" value="1" texto="Você teve hepatite após os 10 anos de idade" class="css-checkbox" type="checkbox">
                                                        <label for="resp2" class="css-label"></label>
                                                        Você teve hepatite após os 10 anos de idade?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp3" name="resp3" value="1" texto="Você já teve malária" class="css-checkbox" type="checkbox">
                                                        <label for="resp3" class="css-label"></label>
                                                        Você já teve malária?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp4" name="resp4" value="1" texto="Você tem doença de chagas" class="css-checkbox" type="checkbox">
                                                        <label for="resp4" class="css-label"></label>
                                                        Você tem doença de chagas?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp5" name="resp5" value="1" texto="Você recebeu enxerto de duramater" class="css-checkbox" type="checkbox">
                                                        <label for="resp5" class="css-label"></label>
                                                        Você recebeu enxerto de duramater?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp6" name="resp6" value="1" texto="Você tem ou teve algum tipo de câncer, incluindo leucemia" class="css-checkbox" type="checkbox">
                                                        <label for="resp6" class="css-label"></label>
                                                        Você tem ou teve algum tipo de câncer, incluindo leucemia?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp7" name="resp7" value="1" texto="Você tem graves problemas no pulmão, coração, rins ou fígado" class="css-checkbox" type="checkbox">
                                                        <label for="resp7" class="css-label"></label>
                                                        Você tem graves problemas no pulmão, coração, rins ou fígado?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp8" name="resp8" value="1" texto="Você tem problema de coagulação de sangue" class="css-checkbox" type="checkbox">
                                                        <label for="resp8" class="css-label"></label>
                                                        Você tem problema de coagulação de sangue?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp9" name="resp9" value="1" texto="Você é diabético com complicações vasculares ou está em uso de insulina" class="css-checkbox" type="checkbox">
                                                        <label for="resp9" class="css-label"></label>
                                                        Você é diabético com complicações vasculares ou está em uso de insulina?
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="checkbox custom">
                                                        <input id="resp10" name="resp10" value="1" texto="Você teve tuberculose extra-pulmonar" class="css-checkbox" type="checkbox">
                                                        <label for="resp10" class="css-label"></label>
                                                        Você teve tuberculose extra-pulmonar?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp11" name="resp11" value="1" texto="Você já teve elefantíase" class="css-checkbox" type="checkbox">
                                                        <label for="resp11" class="css-label"></label>
                                                        Você já teve elefantíase?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp12" name="resp12" value="1" texto="Você já teve hanseníase" class="css-checkbox" type="checkbox">
                                                        <label for="resp12" class="css-label"></label>
                                                        Você já teve hanseníase?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp13" name="resp13" value="1" texto="Você já teve calazar (leishmaniose visceral)" class="css-checkbox" type="checkbox">
                                                        <label for="resp13" class="css-label"></label>
                                                        Você já teve calazar (leishmaniose visceral)?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp14" name="resp14" value="1" texto="Você já teve brucelose" class="css-checkbox" type="checkbox">
                                                        <label for="resp14" class="css-label"></label>
                                                        Você já teve brucelose?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp15" name="resp15" value="1" texto="Você já teve esquistossomose hepatoesplênica" class="css-checkbox" type="checkbox">
                                                        <label for="resp15" class="css-label"></label>
                                                        Você já teve esquistossomose hepatoesplênica?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp16" name="resp16" value="1" texto="Você tem alguma doença que gere inimputabilidade jurídica" class="css-checkbox" type="checkbox">
                                                        <label for="resp16" class="css-label"></label>
                                                        Você tem alguma doença que gere inimputabilidade jurídica?
                                                    </div>

                                                    <div class="checkbox custom">
                                                        <input id="resp17" name="resp17" value="1" texto="Você já foi submetido a transplante de órgãos ou de medula" class="css-checkbox" type="checkbox">
                                                        <label for="resp17" class="css-label"></label>
                                                        Você já foi submetido a transplante de órgãos ou de medula?
                                                    </div>
                                                </div>
                                            </div>
                                            <br /><br />
                                            <div class="row">
                                                <input type="button" id="eapainel3" value="Anterior">
                                                <input type="button" id="eppainel3" value="Proximo">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PF:CONFIRA SEUS DADOS -->
                                <div id="painel4" class="tab-pane">
                                    <div class="row-fluid">
                                        <h4><i class="fa fa-user"></i>&nbsp;&nbsp; Verifique os dados informados</h4>
                                        <div class="span8">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Nome completo</label>
                                                        <p id="v_pf_nome_sobrenome" class="form-control">Gustavo Bittencourt Satheler</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>CPF</label> <i id="v_ver_pf_cpf" class=""></i>
                                                        <p id="v_pf_cpf" class="form-control">115.794.086-21</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Data de Nascimento</label>
                                                        <p id="v_pf_nascimento" class="form-control">04/07/1998</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Gênero</label>
                                                        <p id="v_pf_genero" class="form-control">Masculino</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Estado</label>
                                                        <p id="v_pf_estado" class="form-control">Rio Grande do Sul</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Cidade</label>
                                                        <p id="v_pf_cidade" class="form-control">Alegrete</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone Fixo</label>
                                                        <p id="v_pf_telefone_fixo" class="form-control">(55) 0000-0000</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Telefone Celular</label>
                                                        <p id="v_pf_telefone_celular" class="form-control">(55) 99936-7788</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Sangue</label>
                                                        <p id="v_pf_tipo_sangue" class="form-control">O-</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Peso</label>
                                                        <p id="v_pf_peso" class="form-control">46.2kg</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Ultima doação</label>
                                                        <p id="v_pf_ultima_doacao" class="form-control">Em Março</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>E-mail</label>
                                                        <p id="v_pf_email" class="form-control">gustavosatheler@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span3meio" id="v_questionario">
                                            <h5><i class="fa fa-check-circle"></i> Questionário </h5>
                                            <a><i class="fa fa-check"></i> Nada selecionado.<a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="button" id="eapainel4" value="Anterior">
                                        <input type="button" id="verificar_pf" value="Cadastre-se">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo BASECDN; ?>scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo BASECDN; ?>magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo BASECDN; ?>jquery/jquery.cookie.js"></script>
    <script src="<?php echo BASECDN; ?>js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo BASECDN; ?>js/toastr.min.js"></script>

    <!-- Plugins personalizados -->
    <script src="<?php echo BASECDN; ?>js/acessibilidade.js"></script>
    <script src="<?php echo BASECDN; ?>js/creative.js"></script>
    <script src="<?php echo BASECDN; ?>js/fbInit.js"></script>
    <script src="<?php echo BASECDN; ?>js/index.js"></script>
    <script src="<?php echo BASECDN; ?>js/valida_cpf_cnpj.js"></script>
    <script src="<?php echo BASECDN; ?>js/cadastro.js"></script>    
    </body>
</html>