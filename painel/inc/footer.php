    </div>

    <script><?php

    if(LOGADO === TRUE){
        if(strlen($_SESSION['idfacebook']) >= 16){
            echo 'var idfacebook = "'.$_SESSION['idfacebook'].'";';
        }

        if($_tipo == "pf"){
            echo 'var sangue = "'.$_SESSION['sangue'].'";';
            echo 'var nome = "'.$_SESSION['nome']." ".$_SESSION['sobrenome'].'";';
        } else {
            echo 'var nome = "'.$_SESSION['nome'].'";';
        }

        echo 'var id = "'.$_SESSION['id'].'";';
        echo 'var nome = "'.$_SESSION['nome']." ".@$_SESSION['sobrenome'].'";';
        echo 'var tipo = "'.$_SESSION['tipo'].'";';
    }
    
    ?>var basepainel = "<?php echo BASEPAINEL; ?>"; var baseUrl = "<?php echo BASEURL; ?>"; var baseCdn = "<?php echo BASECDN; ?>"; </script>

    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASECDN; ?>js/fbInit.js"></script>
    <script src="<?php echo BASECDN; ?>js/painel.js"></script>
    <script src="<?php echo BASECDN; ?>js/toastr.min.js"></script>
    <script src="<?php echo BASECDN; ?>datatables/js/jquery.dataTables.js"></script>
    <script src="<?php echo BASECDN; ?>datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo BASECDN; ?>datatables-responsive/dataTables.responsive.js"></script>

    <script src="<?php echo BASECDN; ?>js/sb-admin-2.js"></script>

</body>

<!-- Modal Facebook não vinculado -->
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

</html>