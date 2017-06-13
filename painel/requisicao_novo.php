<?php 

require_once("../config.class.php");

$pagina = "Requisição";
$tipo   = "Pessoa juridica";

require_once "inc/header.php"; 

?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Solicitar Doações</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nome do Requisitor:</label>
                    <input type="text" id="requisitor_nome" name="nome" class="form-control">
                </div>
            </div>

            <div class="col-md-3 checkbox-center">
                <div class="checkbox custom">
                    <input type="checkbox" id="requisitor_mim" name="requisitor_mim" class="css-checkbox">
                    <label for="requisitor_mim" class="css-label"></label>
                    A doação é para mim
                </div>
            </div>

            <div class="col-md-3">
                <label>Tipo Sanguíneo:</label>
                <select name="tipo_sangue" id="tipo_sangue" class="form-control">
                    <?php 

                    if ($sql = $con->prepare("SELECT `idtipoSangue`, `tipo` FROM  `ssmv`.`tipoSangue`;")) {
                        $sql->execute();
                        $sql->bind_result($idtipoSangue, $tipo);
                        while ($sql->fetch()) {
                            echo "<option value=" . $idtipoSangue . ">" . $tipo . "</option>";
                        }
                        $sql->close();
                    }
                    
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Preciso do sangue para até</label>
                    <input type="date" id="dia" name="dia" class="form-control" required="required">
                </div>
            </div>

            <div class="col-md-3">
                <label>Urgência:</label>
                <select id="urgencia" name="urgencia" class="form-control">
                    <option value="alto"> Alto </option>
                    <option value="medio"> Médio </option>
                    <option value="baixo"> Baixo </option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="button" value="Confirmar" onclick="solicitar_doacao();" class="btn btn-primary right">
            </div>
        </div>

    </div>

<?php require_once("inc/footer.php"); ?>
