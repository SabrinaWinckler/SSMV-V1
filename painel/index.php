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
                    <button onclick="pesquisar_requisicoes()" id="pesquisar_requisicoes" class="form-control btn btn-primary"><i class="fa fa-search fw-ga"> </i> Filtrar</button>
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
                
                    if ($sql = $con->prepare("SELECT `idrequisicao`, `idusuario`, `nome`, `tipoSangue`, `dataLimite`, `urgencia`, `idmarcador` FROM `ssmv`.`requisicao` ORDER BY `urgencia` DESC,`dataLimite` ASC")) {
                        // $sql->bind_param('i', $_SESSION['id']);
                        $sql->execute();
                        $sql->bind_result($_req_idrequisicao, $_req_idusuario, $_req_nome, $_req_tipoSangue, $_req_dataLimite, $_req_urgencia, $_req_idmarcador);
                        $tipoUrgencia = array(1 => "baixo", 2 => "medio", 3 => "alto");
                        while ($sql->fetch()) {
                            if ($_id != $_req_idusuario) {
                                 echo '<div class="col-sm-3 col-exception-padding" onclick="querodoar('. $_req_idrequisicao .')"> 
                                <div class=" boxReq-container urgencia-'.$tipoUrgencia[$_req_urgencia].' boxReq-item req-transition">
                                    <div class="req-top-list-header">
                                        <a href="#" onclick="querodoar('. $_req_idrequisicao .')" title="'. $_req_nome .'">
                                            <span class="req-title req-trunc">'. $_req_nome .'</span>
                                        </a>
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width:70%">
                                                    <span class="req-topicos">Solicita: Sangue '. $nomeSangue[$_req_tipoSangue - 1] .'</span><br />
                                                    <span class="req-topicos">'. $nomeHemocentro[$_req_idmarcador - 1] .'</span><br />
                                                    <span class="req-topicos">Data limite: '. date_format(date_create($_req_dataLimite), 'd/m/Y') .'</span>
                                                </td>
                                                <td style="width:30%">
                                                <i class="fa fa-heart fa-5x coracao-'.$tipoUrgencia[$_req_urgencia].' pulse"></i>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <a href="#" onclick="querodoar('. $_req_idrequisicao .')" class="req-category">Quero doar!</a>
                                </div>
                            </div>';
                            }
                        }
                        $sql->close();
                    } else {
                        echo "Mostar requisições: \n\r";
                        echo $con->error;
                    }
                } else {
                    echo "At work";
                }
                
                ?>
            </div>

        </div>
        <!-- /#page-wrapper -->

        <!-- Mais detalhes sobre  -->
        <div class="modal fade" id="modalQuerodoar" tabindex="-1" role="dialog" aria-labelledby="modalQuerodoar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="titulo_modalQuerodoar">Requisição #</h4>
                    </div>
                    <div class="modal-body" id="body_modalQuerodoar">
                        
                    </div>
                    <div class="modal-footer" id="footer_modalQuerodoar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" onclick="confirmarDoacao()" data-req="" id="confirmarDoacao" class="btn btn-primary">Informar que quero doar</button>
                    </div>
                </div>
            </div>
        </div>

<?php require_once("inc/footer.php");
