<?php 

require_once("../config.class.php");

$pagina = "Perfil";
$tipo   = "Pessoa juridica";

require_once "inc/header.php"; 

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
                        <button type="button" onclick="myEditarPerfil">Editar Informações</button>
                            <div id="edicao"></div>
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
    <script src="<?php echo BASECDN; ?>js/editar_perfil.js"></script>


<?php
require_once "db.php";
 
if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_user     	= $_POST["id"];
    $nome     	= $_POST["nome"];
    $nomeFantasia 	= $_POST["nomeFantasia"];
    $cnpj        	= $_POST["cnpj"];
    $logradouro    	= $_POST["logradouro"];
    $numero    	= $_POST["numero"];
    $complemento	= $_POST["complemento"];
    $cep        	= $_POST["cep"];
    $bairro        	= $_POST["bairro"];
    $idestado    	= $_POST["idestado"];
    $municipio    	= $_POST["municipio"];
    $telefoneF    	= $_POST["telefoneF"];
    $telefoneF2    	= $_POST["telefoneF2"];
 
    if($sql = $con->prepare("UPDATE `ssmv`.`pj` SET (nome, nomeFantasia,cnpj, logradouro, numero, complemento, cep, bairro, idestado, municipio, telefoneF, telefoneF2 ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) WHERE id = ?")){
	    $sql->bind_param("issisisisssii", $id_user, $nome, $nomeFantasia, $cnpj, $logradouro, $numero, $complemento, $cep, $bairro, $idestado, $municipio, $telefoneF, $telefoneF2 );
	    $sql->execute();
	    $sql->close();
    }else {
	    echo "Erro!";
    }   
}

?>
<?php require_once("inc/footer.php");
