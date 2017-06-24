<?php 

require_once("../config.class.php");

$pagina = "Perfil";
$tipo   = "Pessoa juridica";

require_once "inc/header.php"; 

// if($sql = $con->prepare("SELECT `idusuario`,`nome`, `nomeFantasia`, `cnpj`, `logradouro`, `numero`, `complemento`, `cep`, `bairro`, `idestado`, `municipio`, `telefoneF`, `telefoneF2`, `foto` FROM `pj` WHERE idusuario = ?")){
//     $sql->bind_param("i", $_id);
//     $sql->execute();
//     $sql->bind_result($_id_usuario, $_nome, $_nomeFantasia, $_cnpj, $_logradouro, $_numero, $_complemento, $_cep, $_bairro, $_idestado, $_municipio, $_telefonef, $_telefonef2, $_foto);
//     $sql->fetch();
//     $sql->close();
// } 

if($sql = $con->prepare("SELECT `idusuario`,`nome`, `dataNascimento`, `sobrenome`, `genero`, `idestado`, `municipio`, `telefoneF`, `telefoneC`, `idtipoSangue`, `peso`, `ultimaDoacao`, `foto` FROM `pf` WHERE idusuario = ?")){
    $sql->bind_param("i", $_id);
    $sql->execute();
    $sql->bind_result($_id_usuariof, $_nome, $_data_nascimento, $_sobrenome, $_genero, $_idestado, $_municipio, $_telefoneff, $_telefonec, $_id_tipo_sangue, $_peso, $_ultima_doacao, $_foto);
    $sql->fetch();
    $sql->close();
}
switch ($_genero){
    case 'F':
        $_genero = 'Feminino'; 
        break;
    case 'M':
        $_genero = 'Masculino';
        break;
    case 'O':
        $_genero = 'Não Especificado';
        break;
}



?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <div class="row" id="edicao">
                    <div class="col-md-4">
                        <i class="fa fa-institution" style="font-size:180px;margin-top:3%;margin-left:3%;border:solid 1px #000"></i>
                        <button style="font-size:20px;margin-left:17%;margin-top:5%" onclick="">Adicionar</button>
                    </div>
                    <div class="col-sm-3">
                        Nome: <?php echo $_nome ," ", $_sobrenome ?>
                    </div>
                    <div class="col-sm-3">
                        Data de nascimento: <?php echo $_data_nascimento ?>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" onclick="myEditar()">Editar Informações</button>
                            <!--<div id="edicao"></div>-->
                    </div>
                    <div class="col-sm-6">
                        Gênero: <?php echo $_genero ?> 
                    </div>
                    ">
                    <div class="col-sm-3">
                        Tipo Sanguíneo: <?php echo $nomeSangue[$_id_tipo_sangue-1]?>
                    </div>
                    <div class="col-sm-2">
                        Peso:  <?php echo $_peso , " Kg"?>
                    </div>""
                    <div class="col-sm-2">
                        Última Doação: <?php echo $_ultima_doacao ?>
                    </div>
                    <div class="col-sm-3">
                        Município: <?php echo $_municipio ?>
                    </div>
                    <div class="col-sm-3">
                        Estado: <?php echo $nomeEstado[$_idestado-1] ?>
                    </div>
                    <div class="col-sm-6">
                        Telefone Fixo: <?php echo $_telefoneff ?>
                    </div>
                    <div class="col-sm-6">
                        Telefone Celular: <?php echo $_telefonec ?>
                    </div>
                    <div class="col-sm-6">
                        Email: <?php echo "" ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    <script src="<?php echo BASECDN; ?>js/editar_perfil.js"></script>


<?php
require_once "db.php";
 
//PJ
//if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
 //   $id_user     	= $_POST["id"];
 //   $nome     	= $_POST["nome"];
 //   $nomeFantasia 	= $_POST["nomeFantasia"];
 //   $cnpj        	= $_POST["cnpj"];
 //   $logradouro    	= $_POST["logradouro"];
 //   $numero    	= $_POST["numero"];
 //   $complemento	= $_POST["complemento"];
 //   $cep        	= $_POST["cep"];
 //   $bairro        	= $_POST["bairro"];
 //   $idestado    	= $_POST["idestado"];
 //   $municipio    	= $_POST["municipio"];
 //   $telefoneF    	= $_POST["telefoneF"];
 //   $telefoneF2    	= $_POST["telefoneF2"];
 
 //   if($sql = $con->prepare("UPDATE `ssmv`.`pj` SET (nome, nomeFantasia,cnpj, logradouro, numero, complemento, cep, bairro, idestado, municipio, telefoneF, telefoneF2 ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) WHERE id = ?")){
	//    $sql->bind_param("issisisisssii", $id_user, $nome, $nomeFantasia, $cnpj, $logradouro, $numero, $complemento, $cep, $bairro, $idestado, $municipio, $telefoneF, $telefoneF2 );
//	    $sql->execute();
//	    $sql->close();
 //   }else {
//	    echo "Erro!";
 //   }   
//}
if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $_id_usuario     	= $_POST["idusuario"];
    $_nome     	= $_POST["nome"];
    $_data_nascimento 	= $_POST["dataNascimento"];
    $_sobrenome      	= $_POST["sobrenome"];
    $_genero    	= $_POST["genero"];
    $_idestado    	= $_POST["idestado"];
    $_municipio	= $_POST["municipio"];
    $_telefonef      	= $_POST["telefoneF"];
    $_telefonec       	= $_POST["telefoneC"];
    $_id_tipo_sangue    	= $_POST["idtipoSangue"];
    $_peso    	= $_POST["peso"];
    $_ultima_doacao    	= $_POST["ultimaDoacao"];
 
    if($sql = $con->prepare("UPDATE `ssmv`.`pf` SET ( `idusuario`,`nome`, `dataNascimento`, `sobrenome`, `genero`, `idestado`, `municipio`, `telefoneF`, `telefoneC`, `idtipoSangue`, `peso`, `ultimaDoacao` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) WHERE id = ?")){
	    $sql->bind_param("isiscisiiidi", $_id_usuariof, $_nome, $_data_nascimento, $_sobrenome, $_genero, $_idestado, $_municipio, $_telefoneff, $_telefonec, $_id_tipo_sangue, $_peso, $_ultima_doacao );
	    $sql->execute();
	    $sql->close();
    }else {
	    echo "Erro!";
    }   
}


?>
<?php require_once("inc/footer.php");
