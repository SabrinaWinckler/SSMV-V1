    <script> var baseUrl = "<?php echo BASEURL; ?>";</script>
    
    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo BASECDN; ?>scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo BASECDN; ?>magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo BASECDN; ?>jquery/jquery.cookie.js"></script>

    <!-- Plugins personalizados -->
    <script src="<?php echo BASECDN; ?>js/acessibilidade.js"></script>
    <script src="<?php echo BASECDN; ?>js/creative.js"></script>
    <script src="<?php echo BASECDN; ?>js/fbInit.js"></script>
    <script src="<?php echo BASECDN; ?>js/index.js"></script>
    <script src="<?php echo BASECDN; ?>js/toastr.min.js"></script>

</body>

<!-- Modal AJUDA/FAQ -->
<div class="modal fade" id="modalAjuda" tabindex="-1" role="dialog" aria-labelledby="modalAjuda">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_modalAjuda">!!! ERRO !!!</h4>
            </div>
            <div class="modal-body" id="body_modalAjuda">
                JAVASCRIPT NECESSÁRIO NÃO INICIALIZADO.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Facebook -->
<div class="modal fade" id="modalFb" tabindex="-1" role="dialog" aria-labelledby="modalFb">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_modalFb">Ops...</h4>
            </div>
            <div class="modal-body" id="body_modalFb">
                Este facebook não está vinculado a nenhuma conta.
            </div>
            <div class="modal-footer" id="footer_modalFb">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" onclick="cadastrar_fb()" id="cadastrar_fb" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Esqueci a senha -->
<div class="modal fade" id="esqueciSenha" tabindex="-1" role="dialog" aria-labelledby="esqueciSenha">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_esqueciSenha">Esqueceu seu email?</h4>
            </div>
            <div class="modal-body" id="body_esqueciSenha">
                    <p align="center" for="esqueciASenha">Informe o e-mail que você usa no SSMV. <br /> Nós lhe enviaremos instruções sobre como acessar a sua conta. </p>
                    <br />
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon">@</div>
                        <input type="text" class="form-control" id="input-esqueci" placeholder="Digite seu email">
                    </div>
            </div>
            <div class="modal-footer" id="footer_esqueciSenha">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="esqueci()"class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>
</html>
