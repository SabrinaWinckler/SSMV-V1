<?php

require_once("../config.class.php");

$pagina = "Requisição";
$tipo   = "Pessoa juridica";

require_once "inc/header.php";

?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Minhas requisições</h1>
                    </div>
                </div>

                <div class="content">
                            <div class="table-responsives">
                                <table class="table table-bordered table-striped" id="tabela-requisicao">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs text-center">Data da <br />  Solicitação</th>
                                            <th aria-sort="ascending">Nome do requisitor</th>
                                            <th class="text-center">Tipo <br /> Sanguineo</th>
                                            <th class="text-center">Data limite</th>
                                            <th class="text-center">Hemocentro</th>
                                            <th class="hidden-xs text-center">Urgência</th>
                                            <th class="text-center" sorting="disabled">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $nomeSangue = array();
                                    if ($sql = $con->prepare("SELECT `tipo` FROM  `ssmv`.`tiposangue`")) {
                                        $sql->execute();
                                        $sql->bind_result($nome_sangue);
                                        while($sql->fetch()){
                                            array_push($nomeSangue, $nome_sangue);
                                        }
                                        $sql->close();
                                    }

                                    $nomeHemocentro = array();
                                    if ($sql = $con->prepare("SELECT `nome` FROM  `ssmv`.`marcador`")) {
                                        $sql->execute();
                                        $sql->bind_result($_marcador);
                                        while($sql->fetch()){
                                            array_push($nomeHemocentro, $_marcador);
                                        }
                                        $sql->close();
                                    }

                                    if ($sql = $con->prepare("SELECT `idrequisicao`, `nome`, `tipoSangue`, `dataSolicitacao`, `dataLimite`, `urgencia`, `idmarcador` FROM  `ssmv`.`requisicao` WHERE idusuario = ?;")) {
                                        $sql->bind_param('i', $_id);
                                        $sql->execute();
                                        $sql->bind_result($req_id, $req_nome, $req_sangue, $req_dataS, $req_dataL, $req_urgencia, $req_marcador);
                                            
                                        while ($sql->fetch()) {

                                            if ($req_urgencia == "alto") {
                                                $req_urgencia = "Alto";
                                            } elseif ($req_urgencia == "medio") {
                                                $req_urgencia = "Médio";
                                            } else {
                                                $req_urgencia = "Baixo";
                                            }
                                            
                                            echo "<tr class='gradeA' id='tr-".$req_id."'>
                                                    <td id='td-fone' class='text-center hidden-xs'>".date_format(date_create($req_dataS), 'd/m/Y')."</td>
                                                    <td id='td-nome'>".$req_nome."</td>
                                                    <td id='td-email' class='text-center'>".$nomeSangue[$req_sangue-1]."</td>
                                                    <td id='td-fone' class='text-center'>".date_format(date_create($req_dataL), 'd/m/Y')."</td>
                                                    <td id='td-fone' class='text-center'>".$nomeHemocentro[$req_marcador-1]."</td>
                                                    <td id='td-fone' class='text-center hidden-xs'>".$req_urgencia."</td>
                                                    <td class='text-center'>
                                                        <button onclick='removerRequisicao(".$req_id.")' title='Remover' data-toggle='tooltip' class='btn btn-sm btn-danger btn-remover'><i class='fa fa-trash-o'></i></button>
                                                    </td>
                                                </tr>";
                                        }
                                        $sql->close();
                                    }
                                    ?>
                                    </tbody>
                                </table>                            
                            </div>
                        </div>
                
            </div>
        <!-- /#page-wrapper -->

<?php require_once("inc/footer.php");
