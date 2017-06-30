
<?php
// Editar_perfil que pega os dados do banco     
 require_once DB; 
 if ($sql = $con->prepare("SELECT `idestado`, `nome` FROM  `ssmv`.`estados`;")) {  
     $sql->execute();  
     while ($sql->fetch()) { echo "<option value=" . $idestado . ">" . $nome . "</option>";  }  
     $sql->close();  }                       

 if ($sql = $con->prepare("SELECT `idtipoSangue`, `tipo` FROM  `ssmv`.`tipoSangue`;")) {   
        $sql->execute();    
        $sql->bind_result($idtipoSangue, $tipo);                                                               
      while ($sql->fetch()) {
         echo "<option value=" . $idtipoSangue . ">" . $tipo . "</option>";                                                                }                                 
         $sql->close();     
}                                                                                                                 
  
?>

<?php
//Upload de imagem e mostrando imagem 
require_once "db.php";
if (isset($_POST['foto'])) {

	$foto = $_FILES["foto"];
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 150;
		// Altura máxima em pixels
		$altura = 180;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000;
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			$sql = mysql_query("INSERT INTO `ssmv`.`pf`.`foto` VALUES ( '".$nome_imagem."')");
			
		}
		}
	}
}

?>
 <?php

$sql = mysql_query("SELECT foto FROM `ssmv`.`pf`,`ssmv`.`pj` ORDER BY id = "?"");

while ($usuario = mysql_fetch_object($sql)) {
	// Exibir foto
	echo ' <img src= "fotos/".$usuario->foto." class = "imagem"> ';
}
?>

<?php
// Alterar dados do BD
require_once "db.php";

// PJ
// if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
//    $id_user     	= $_POST["id"];
//    $nome     	= $_POST["nome"];
//    $nomeFantasia 	= $_POST["nomeFantasia"];
//    $cnpj        	= $_POST["cnpj"];
//    $logradouro    	= $_POST["logradouro"];
//    $numero    	= $_POST["numero"];
//    $complemento	= $_POST["complemento"];
//    $cep        	= $_POST["cep"];
//    $bairro        	= $_POST["bairro"];
//    $idestado    	= $_POST["idestado"];
//    $municipio    	= $_POST["municipio"];
//    $telefoneF    	= $_POST["telefoneF"];
//    $telefoneF2    	= $_POST["telefoneF2"];
 
//    if($sql = $con->prepare("UPDATE `ssmv`.`pj` SET (nome, nomeFantasia,cnpj, logradouro, numero, complemento, cep, bairro, idestado, municipio, telefoneF, telefoneF2 ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) WHERE id = ?")){
// 	   $sql->bind_param("issisisisssii", $id_user, $nome, $nomeFantasia, $cnpj, $logradouro, $numero, $complemento, $cep, $bairro, $idestado, $municipio, $telefoneF, $telefoneF2 );
// 	    $sql->execute();
// 	    $sql->close();
//    }else {
// 	    echo "Erro!";
//    }   
// }

PF
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
<script src="<?php echo BASECDN; ?>js/editar_perfil.js"></script>