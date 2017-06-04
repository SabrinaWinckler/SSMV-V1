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

<!-- Modal -->
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
</html>
