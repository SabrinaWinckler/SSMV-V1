function myEditar{
    document.getElementById("edicao").innerHTML = '<div class="row"><div class="editarinfo"><h3>Editar Informações:</h3><br><form name="formulario" method="POST" action="alteracao.php"><div class="col-md-8"><input type="hidden" name="id" value=”1”>Nome: <input type="text" name="nome" ><br>Nome Fantasia: <input type="text" name="nomeFantasia"><br>CNPJ: <input type="text" name="cnpj"><br>Logradouro: <input type="text" name="logradouro"><br>Número: <input type="text" name="numero"><br>Complemento: <input type="text" name="complemento"><br></div>CEP: <input type="text" name="cep"><br>Bairro: <input type="text" name="bairro"><br>Estado: <input type="text" name="idestado"><br>Município: <input type="text" name="municipio"><br>Telefone: <input type="text" name="telefoneF"><br>Telefone 2: <input type="text" name="telefoneF2"><br><br><input type="submit" value="Salvar Alterações"></form></div></div>';
}