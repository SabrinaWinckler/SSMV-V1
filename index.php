<?php require_once("inc/header.php"); ?>

    <header>
        <div id="design_class" class="inicio">
            <div id="principal" class="header-content">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="main">
                        <form id="login">
                            <div class="login-section">
                                
                                <h2>Login</h2>
                                <div class="login-top">
                                    <p>Entre com o facebook</p>
                                    <div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                                </div>

                                <div class="login-middle">
                                    <p>Entre informando seu email e sua senha</p>
                                    <input type="text" id="email" placeholder="Digite seu email">
                                    <input type="password" id="senha" placeholder="Digite sua senha">
                                </div>

                                <div class="login-bottom">
                                    <div class="login-left">
                                        <a class="btn-tiny pointer">Esqueceu sua senha?</a>
                                        <br />
                                        <a href="#">Cadastre-se agora!</a>
                                    </div>

                                    <div class="login-right">
                                        <input type="button" value="Entrar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>    

 <?php require_once("inc/footer.php"); ?>