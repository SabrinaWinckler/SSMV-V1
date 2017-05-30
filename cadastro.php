<?php require_once("inc/header.php"); ?>

 <header>
        <div id="design_class" class="cadastro">
            <div id="principal" class="header-content">
    <div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Selecione">
                            <span class="round-tab">
                                <i class="fa fa-id-card icone-centralizado"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Informações gerais">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user icone-centralizado"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Questionário">
                            <span class="round-tab">
                                <i class="fa fa-check-square-o icone-centralizado"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Confira seus dados">
                            <span class="round-tab">
                                <i class="fa fa-check-circle icone-centralizado"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <input type="hidden" value="" id="pessoa_selecionada">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Selecione</h3>
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
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Proximo</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>
                        <p>This is step 2</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>This is step 3</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
   </div></div><header>

 <?php require_once("inc/footer.php"); ?>