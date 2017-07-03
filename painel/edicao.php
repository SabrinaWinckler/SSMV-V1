
<?php

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
//PF
if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
    $_id_usuario     	= $_POST["idusuario"];
    $nome     	= $_POST["nome"];
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
	    $sql->bind_param("isiscisiiidi", $_id_usuariof, $nome, $_data_nascimento, $_sobrenome, $_genero, $_idestado, $_municipio, $_telefoneff, $_telefonec, $_id_tipo_sangue, $_peso, $_ultima_doacao );
	    $sql->execute();
	    $sql->close();
    }else {
	    echo "Erro!";
    }   
} 

?>
<script src="<?php echo BASECDN; ?>js/editar_perfil.js"></script>
<?php
//1
//Upload de imagem e mostrando imagem 
// require_once "db.php";
// if (isset($_POST['foto'])) {

// 	$foto = $_FILES["foto"];
	
// 	// Se a foto estiver sido selecionada
// 	if (!empty($foto["name"])) {
		
// 		// Largura máxima em pixels
// 		$largura = 150;
// 		// Altura máxima em pixels
// 		$altura = 180;
// 		// Tamanho máximo do arquivo em bytes
// 		$tamanho = 1000;
 
// 		$error = array();
 
//     	// Verifica se o arquivo é uma imagem
//     	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
//      	   $error[1] = "Isso não é uma imagem.";
//    	 	} 
	
// 		// Pega as dimensões da imagem
// 		$dimensoes = getimagesize($foto["tmp_name"]);
	
// 		// Verifica se a largura da imagem é maior que a largura permitida
// 		if($dimensoes[0] > $largura) {
// 			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
// 		}
 
// 		// Verifica se a altura da imagem é maior que a altura permitida
// 		if($dimensoes[1] > $altura) {
// 			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
// 		}
		
// 		// Verifica se o tamanho da imagem é maior que o tamanho permitido
// 		if($foto["size"] > $tamanho) {
//    		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
// 		}
 
// 		// Se não houver nenhum erro
// 		if (count($error) == 0) {
		
// 			// Pega extensão da imagem
// 			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
//         	// Gera um nome único para a imagem
//         	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
//         	// Caminho de onde ficará a imagem
//         	$caminho_imagem = "ssmv/pf/foto" . $nome_imagem;
 
// 			// Faz o upload da imagem para seu respectivo caminho
// 			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
// 			// Insere os dados no banco
// 			$sql = mysql_query("INSERT INTO `ssmv`.`pf`.`foto` VALUES ( '".$nome_imagem."')");
			
// 		}
// 		}
// 	}


?>
<?php
   //2
    // include('db.php');
    // $pasta = "ssmv/pf";
    
    // /* formatos de imagem permitidos */
    // $permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
    
    // if(isset($_POST)){
    //     $nome_imagem    = $_FILES['imagem']['name'];
    //     $tamanho_imagem = $_FILES['imagem']['size'];
        
    //     /* pega a extensão do arquivo */
    //     $ext = strtolower(strrchr($nome_imagem,"."));
        
    //     /*  verifica se a extensão está entre as extensões permitidas */
    //     if(in_array($ext,$permitidos)){
            
    //         /* converte o tamanho para KB */
    //         $tamanho = round($tamanho_imagem / 1024);
            
    //         if($tamanho < 1024){ //se imagem for até 1MB envia
    //             $nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
    //             $tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem
                
    //             /* se enviar a foto, insere o nome da foto no banco de dados */
    //             if(move_uploaded_file($tmp,$pasta.$nome_atual)){
    //                 mysql_query("INSERT INTO fotos (foto) VALUES (".$nome_atual.")");
    //                 echo "<img src='fotos/".$nome_atual."' id='previsualizar'>"; //imprime a foto na tela
    //             }else{
    //                 echo "Falha ao enviar";
    //             }
    //         }else{
    //             echo "A imagem deve ser de no máximo 1MB";
    //         }
    //     }else{
    //         echo "Somente são aceitos arquivos do tipo Imagem";
    //     }
    // }else{
    //     echo "Selecione uma imagem";
    //     exit;
    // }
   
?>
<?php
//3
//   require_once "db.php";
//   $nomeEvento = $_POST['nome_evento'];
//   $foto = $_FILES['foto']['tmp_name'];
   
//   if ( $foto != "none" )
//   {
//       $fp = fopen($foto, "rb");
//       $conteudo = fread($fp, $tamanho);
//       $conteudo = addslashes($conteudo);
//       fclose($fp);
   
//   $queryInsercao = "INSERT INTO `ssmv`.`pf` ( foto) VALUES ('$conteudo')";
   
//    mysql_query($queryInsercao) or die("Algo deu errado ao inserir a imagem. Tente novamente.");
//   echo 'Imagem inserida com sucesso!'; 
//   header('Location: perfil.php');
//    if(mysql_affected_rows($conexao) > 0)
//        print "A imagem foi salva na base de dados.";
//    else
//        print "Não foi possível salvar a imagem na base de dados.";
//    }
//   else
//       print "Não foi possível carregar a imagem.";
  ?>

 <?php

// $sql = mysql_query("SELECT foto FROM `ssmv`.`pf`,`ssmv`.`pj` ORDER BY id = ?");

// while ($usuario = mysql_fetch_object($sql)) {
// 	// Exibir foto
// 	echo ' <img src= "fotos/".$usuario->foto." class = "imagem"> ';
// }
?>

