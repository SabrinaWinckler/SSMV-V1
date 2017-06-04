<?php 

$titulo = "Perfil :: Pessoa juridica :: Seu sangue, minha vida";
require_once("inc/header.php"); 

?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-institution" style="font-size:180px;margin-top:3%;margin-left:3%;border:solid 1px #000"></i>
                        <button style="font-size:20px;margin-left:17%;margin-top:5%">Adicionar</button>
                    </div>
                    <div class="col-sm-3">
                        Nome Empresarial
                    </div>
                    <div class="col-sm-3">
                        CNPJ
                    </div>
                    <div class="col-sm-2">
                        <button type="button" onclick="">Editar Informações</button>
                    </div>
                    <div class="col-sm-6">
                        Nome Fantasia
                    </div>
                    
                    <div class="col-sm-3">
                        Logradouro
                    </div>
                    <div class="col-sm-3">
                        Número
                    </div>
                    <div class="col-sm-2">
                        Complemento
                    </div> 
                    <div class="col-sm-6">
                        Bairro
                    </div>
                    <div class="col-sm-3">
                        Município
                    </div>
                    <div class="col-sm-3">
                        Estado
                    </div>
                    <div class="col-sm-2">
                        CEP
                    </div>
                    <div class="col-sm-6">
                        Telefone Fixo
                    </div>
                    <div class="col-sm-6">
                        Telefone 2
                    </div>
                    <div class="col-sm-6">
                        EMAIL
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

<?php require_once("inc/footer.php");
