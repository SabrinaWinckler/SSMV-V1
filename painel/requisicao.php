<?php 

require_once("../config.class.php");

$pagina = "Requisição";
$tipo   = "Pessoa juridica";

require_once "inc/header.php"; 

?>

        <form>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Requisição</h1>
                    </div>
                </div>

                <div class="row">
                    <h3>Solicitar Doações</h3>
                    
                    <div class="col-md-2">
                        <p>Tipo Sanguíneo:</p>
                        <select class="form-control">
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <p>Para até:</p>
                        <input type="date">
                    </div>
                    <div class="col-md-1"><p>Baixo</p></div>
                    <div class="col-md-3">
                        <input type="range" id="a" name="a" min="1" max="10" value="5.5">
                    </div>
                    <div class="col-md-1"><p>Alto</p></div>
                    <div class="col-md-3">
                        <input type="button" value="Confirmar" onclick="alert('Sua requisição foi enviada com sucesso!')">
                    </div>

                </div>
            </div>
        </form>
        <!-- /#page-wrapper -->

<?php require_once("inc/footer.php");
