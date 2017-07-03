<?php 

require_once("../config.class.php");

$pagina = "Perfil";


require_once "inc/header.php"; 
        
         if($sql = $con->prepare("SELECT `idusuario`,`email`, `tipo` FROM `usuarios` WHERE idusuario = ?")){
                $sql->bind_param("i", $_id);
                $sql->execute();
                $sql->bind_result($_id_usuario, $_email, $_tipo);
                $sql->fetch();
                $sql->close();
        }       
           
if($_tipo == "pf"){
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
        if($_telefoneff == 0){
            $_telefoneff = "Não possui.";
        }
            echo '<div id="page-wrapper" class="perfil">
            <div class="row" id="edicao">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <div class="row" >
                    <div class="col-md-4">
                    <style>
                    .imagem{
                        text-align: center;
                         width: 150px;
                        height: 150px;
                        overflow: hidden; 
                        border-style: solid;
                        border-width: 2px 2px 2px 2px;
                        border-radius: 100%;
                    }
                    </style>
                       <div class = "imagem"><img src="fotos/".$usuario></div>
                       
                       
                       <br><br> <input type="button" onclick ="adicionarFoto()" value = "Adicionar"> </input>
                    </div>
                    <div class="col-sm-3">
                        <b>Nome:</b> ', $_nome ,' ', $_sobrenome , '
                    </div>
                    <div class="col-sm-3">
                        <b>Data de nascimento:</b> ' , $_data_nascimento , '
                    </div>
                    <div class="col-sm-2">
                        <button type="button" onclick="myEditar()" >Editar Informações</button>
                    </div>
                    <div class="col-sm-6">
                        <b>Gênero:</b> ', $_genero , '
                    </div>
                    <div class="col-sm-3">
                        <b>Tipo Sanguíneo:</b> ', $nomeSangue[$_id_tipo_sangue-1] , '
                    </div>
                    <div class="col-sm-2">
                        <b>Peso:</b> ', $_peso , 'Kg', '
                    </div>
                    <div class="col-sm-3">
                        <b>Última Doação:</b> ', $_ultima_doacao ,'
                    </div>
                    <div class="col-sm-3">
                        <b>Município:</b> ', $_municipio, '
                    </div>
                    <div class="col-sm-3">
                        <b>Estado:</b> ', $nomeEstado[$_idestado-1] ,'
                    </div>
                    <div class="col-sm-6">
                        <b>Telefone Fixo:</b> ', $_telefoneff  ,'
                    </div>
                    <div class="col-sm-6">
                        <b>Telefone Celular:</b> ', $_telefonec , '
                    </div>
                    <div class="col-sm-6">
                        <b>Email:</b> ', $_email , '
                    </div>
                </div>
            </div>
        </div>';
        }

elseif($_tipo == "pj"){
    if($sql = $con->prepare("SELECT `idusuario`,`nome`, `nomeFantasia`, `cnpj`, `logradouro`, `numero`, `complemento`, `cep`, `bairro`, `idestado`, `municipio`, `telefoneF`, `telefoneF2`, `foto` FROM `pj` WHERE idusuario = ?")){
                  $sql->bind_param("i", $_id);
                  $sql->execute();
                   $sql->bind_result($_id_usuario, $_nome, $_nomeFantasia, $_cnpj, $_logradouro, $_numero, $_complemento, $_cep, $_bairro, $_idestado, $_municipio, $_telefonef, $_telefonef2, $_foto);
                    $sql->fetch();
                    $sql->close();
        } 
    if($_telefonef2 == 0){
            $_telefonef2 = "Não possui.";
        }
            echo '<div id="page-wrapper">
            <div class="row" id="edicao">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <div class="row" >
                    <div class="col-md-4">
                    <style>
                    .imagem{
                         width: 200px;
                        height: 200px;
                        overflow: hidden; 
                        border-style: solid;
                        border-width: 2px 2px 2px 2px;
                        border-radius: 100%;
                    }
                    </style>
                       <div class = "imagem"><img src="fotos/".$usuario></div>
                       
                       <br><br> <input type="button" onclick ="adicionarFoto()" value = "Adicionar"> </input>
                    </div>
                    <div class="col-sm-3">
                      <b>Nome:</b> ', $_nome ,'
                    </div>
                    <div class="col-sm-3">
                        <b>Nome Fantasia:</b> ', $_nomeFantasia ,'
                    </div>
                    <div class="col-sm-2">
                        <button type="button" onclick="myEditar2()" >Editar Informações</button>
                    </div>
                    <div class="col-sm-6">
                        <b>Logradouro:</b> ', $_logradouro ,'
                    </div>
                    <div class="col-sm-3">
                        <b>Número:</b> ', $_numero,'
                    </div>
                    <div class="col-sm-2">
                        <b>Complemento:</b> ', $_complemento ,'
                    </div>
                    <div class="col-sm-2">
                        <b>CEP:</b> ',$_cep ,'
                    </div>
                     <div class="col-sm-3">
                        <b>Bairro:</b> ', $_bairro ,'
                    </div>
                    <div class="col-sm-3">
                        <b>Município:</b> ', $_municipio,'
                    </div>
                    <div class="col-sm-3">
                        <b>Estado:</b> ', $nomeEstado[$_idestado-1],'
                    </div>
                    <div class="col-sm-6">
                        <b>Telefone Fixo:</b> ', $_telefonef,'
                    </div>
                    <div class="col-sm-6">
                        <b>Telefone Fixo 2:</b> ', $_telefonef2 ,'
                    </div>
                    <div class="col-sm-6">
                        <b>Email:</b> ', $_email,'
                    </div>
                </div>
            </div>
        </div>';
        }
?>

        <!-- /#page-wrapper -->
    <script src="<?php echo BASECDN; ?>js/editar_perfil.js"></script>

<?php require_once("inc/footer.php");
