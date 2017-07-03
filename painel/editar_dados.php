<!-- PF:DADOS PESSOAIS -->
<body>
                                <div class="tab-pane" id="painel2">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h4><i class="fa fa-user"></i>&nbsp;&nbsp; Informe seus dados</h4>
                                                </div>
                                                <div>
                                                    <div class="fb-login-button" scope="public_profile,email" onlogin="checkLoginState();" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Nome*</label>
                                                        <input type="text" id="pf_nome" name="pf_nome" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Sobrenome*</label>
                                                        <input type="text" id="pf_sobrenome" name="pf_sobrenome" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF*</label> <i id="ver_pf_cpf" class=""></i>
                                                        <input type="text" id="pf_CPF" name="pf_CPF" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Data de nascimento*</label>
                                                        <input type="date" id="pf_nascimento" name="pf_nascimento" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 centro">
                                                    <label>Gênero*</label>
                                                    <div class="form-group">
                                                        <input type="radio" id="pf_genero_feminino" name="pf_genero" value="F">
                                                        <label for="pf_genero_feminino">Feminino</label>
                                                        <input type="radio" id="pf_genero_masculino" name="pf_genero" value="M">
                                                        <label for="pf_genero_masculino">Masculino</label>
                                                        <input type="radio" id="pf_genero_outro" name="pf_genero" value="O">
                                                        <label for="pf_genero_outro">Não especificado</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado*</label>
                                                        <select id="pf_estado" name="pf_estado" class="form-control" required="required">
                                                            <?php 
                                                            
                                                            require_once DB;

                                                            if ($sql = $con->prepare("SELECT `idestado`, `nome` FROM  `ssmv`.`estados`;")) {
                                                                $sql->execute();
                                                                $sql->bind_result($idestado, $nome);
                                                                while ($sql->fetch()) {
                                                                    echo "<option value=" . $idestado . ">" . $nome . "</option>";
                                                                }
                                                                $sql->close();
                                                            }
                                                            
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade*</label>
                                                        <select id="pf_cidade" name="pf_cidade" class="form-control" required="required">
                                                            <option value="Acrelândia">Acrelândia</option>
                                                            <option value="Assis Brasil">Assis Brasil</option>
                                                            <option value="Brasiléia">Brasiléia</option>
                                                            <option value="Bujari">Bujari</option>
                                                            <option value="Capixaba">Capixaba</option>
                                                            <option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
                                                            <option value="Epitaciolândia">Epitaciolândia</option>
                                                            <option value="Feijó">Feijó</option>
                                                            <option value="Jordão">Jordão</option>
                                                            <option value="Mâncio Lima">Mâncio Lima</option>
                                                            <option value="Manoel Urbano">Manoel Urbano</option>
                                                            <option value="Marechal Thaumaturgo">Marechal Thaumaturgo</option>
                                                            <option value="Plácido de Castro">Plácido de Castro</option>
                                                            <option value="Porto Acre">Porto Acre</option>
                                                            <option value="Porto Walter">Porto Walter</option>
                                                            <option value="Rio Branco">Rio Branco</option>
                                                            <option value="Rodrigues Alves">Rodrigues Alves</option>
                                                            <option value="Santa Rosa do Purus">Santa Rosa do Purus</option>
                                                            <option value="Sena Madureira">Sena Madureira</option>
                                                            <option value="Senador Guiomard">Senador Guiomard</option>
                                                            <option value="Tarauacá">Tarauacá</option>
                                                            <option value="Xapuri">Xapuri</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                                
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Telefone fixo</label>
                                                        <input type="text" id="pf_telefone_fixo" name="pf_telefone_fixo" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Telefone celular*</label>
                                                        <input type="text" id="pf_telefone_celular" name="pf_telefone_celular" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Tipo sanguíneo*</label>
                                                        <select id="pf_tipo_sangue" name="pf_tipo_sangue" class="form-control" required="required">
                                                            <option value="N">Não sei</option>
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

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Peso (kg)*</label>
                                                        <input type="number" id="pf_peso" name="pf_peso" placeholder="50.0" class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>E-mail*</label>
                                                        <input type="text" id="pf_email" name="pf_email" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Ultima doação</label>
                                                        <input type="date" id="pf_ultimaDoacao" name="pf_ultimaDoacao" value="2017-01-01" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-3"></div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Digite sua senha*</label>
                                                        <input type="password" id="pf_senha" name="pf_senha" class="form-control" required="required">
                                                    </div>
                                                </div>
                                                    

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="pf_senha_errada">Repita sua senha*</label>
                                                        <input type="password" id="pf_repita_senha" name="pf_repita_senha" class="form-control" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <input type="button" id="eapainel2" value="Anterior">
                                                <input type="button" id="eppainel2" value="Proximo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
</body>