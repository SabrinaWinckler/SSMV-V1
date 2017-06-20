<?php

$pagina = "Principal";

require_once "inc/header.php";

?>
        <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Lista de requisições</h1>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-10">
                    <label >Pesquisar:</label>
                    <input type="text" id="p_requisitor_nome" placeholder="Digite..." class="form-control">
                </div>

                <div class="col-lg-2">
                <label class="white"> Filtrar </label>
                    <button onclick="pesquisar_requisicoes()" class="form-control btn btn-primary"><i class="fa fa-search fw-ga"> </i> Filtrar</button>
                </div>
            </div>

            <div class="row" id="lista_requisicoes">
                <?php

                if (LOGADO == true) {
                    $nomeSangue = array();
                    if ($sql = $con->prepare("SELECT `tipo` FROM  `ssmv`.`tiposangue` ORDER BY idtipoSangue")) {
                        $sql->execute();
                        $sql->bind_result($nome_sangue);
                        while ($sql->fetch()) {
                            array_push($nomeSangue, $nome_sangue);
                        }
                        $sql->close();
                    }
                
                    if ($sql = $con->prepare("SELECT `idrequisicao`, `idusuario`, `nome`, `tipoSangue`, `dataLimite`, `urgencia`, `idmarcador` FROM `ssmv`.`requisicao`")) {
                        // $sql->bind_param('i', $_SESSION['id']);
                        $sql->execute();
                        $sql->bind_result($_req_idrequisicao, $_req_idusuario, $_req_nome, $_req_tipoSangue, $_req_dataLimite, $_req_urgencia, $_req_idmarcador);
                        while ($sql->fetch()) {
                            if ($_id != $_req_idusuario) {
                                 echo '<div class="col-sm-3 col-exception-padding">
                                <div class=" boxReq-container urgencia-'.$_req_urgencia.' boxReq-item req-transition">
                                    <div class="req-top-list-header">
                                        <a href="#" title="'. $_req_nome .'">
                                            <span class="req-title req-trunc">'. $_req_nome .'</span>
                                        </a>
                                        <span class="req-topicos">Solicita: Sangue '. $nomeSangue[$_req_tipoSangue - 1] .'</span><br />
                                        <span class="req-topicos">'. $nomeHemocentro[$_req_idmarcador - 1] .'</span><br />
                                        <span class="req-topicos">Data limite: '. date_format(date_create($_req_dataLimite), 'd/m/Y') .'</span>
                                    </div>
                                    <a href="#" onclick="querodoar('. $_req_idrequisicao .')" class="req-category">Quero doar!</a>
                                </div>
                            </div>';
                            }
                        }
                        $sql->close();
                    } else {
                        echo "Mostar hemocentro: \n\r";
                        echo $con->error;
                    }
                } else {
                    echo "At work";
                }
                
                ?>
            </div>

        </div>
        <!-- /#page-wrapper -->

<?php require_once("inc/footer.php");
