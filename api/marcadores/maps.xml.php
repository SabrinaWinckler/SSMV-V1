<?php

require_once("../../config.class.php");
require_once(DB);

#versao do encoding xml
$xml = new DOMDocument("1.0", "utf-8");
 
#retirar os espacos em branco
$xml->preserveWhiteSpace = false;
 
#gerar o codigo
$xml->formatOutput = true;

#criando o nó principal (markers)
$markers = $xml->createElement("markers");

$marc_estado = array();
if ($sql = $con->prepare("SELECT `sigla` FROM  `ssmv`.`estados`")) {
    $sql->execute();
    $sql->bind_result($nomeEstado);
    while($sql->fetch()){
        array_push($marc_estado, $nomeEstado);
    }
    $sql->close();
}
if ($sql = $con->prepare("SELECT * FROM `ssmv`.`marcador`")) {
    $sql->execute();
    $sql->bind_result($marc_id, $marc_nome, $marc_cep, $marc_logradouro, $marc_numero, $marc_complemento, $marc_bairro, $marc_municipio, $marc_idestado, $marc_telefone1, $marc_telefone2, $marc_email, $marc_lat, $marc_lng, $marc_tipo);
    
    while ($sql->fetch()){
        $marker = $xml->createElement("marker");
        $marker->setAttribute("id", $marc_id);
        $marker->setAttribute("name", $marc_nome);
        $marker->setAttribute("address", $marc_logradouro.", ".$marc_numero." ".$marc_complemento." - ".$marc_bairro.", ".$marc_municipio." - ".$marc_estado[$marc_idestado-1].", ".number_format(substr($marc_cep, 0, 5),0,"",".").'-'.substr($marc_cep, 5, 3));
        $marker->setAttribute("telefone1", "(".substr($marc_telefone1, 0, 2).") ".substr($marc_telefone1, 2, 4)."-".substr($marc_telefone1, 6, 4));
        $marker->setAttribute("telefone2", "(".substr($marc_telefone2, 0, 2).") ".substr($marc_telefone2, 2, 4)."-".substr($marc_telefone2, 6, 4));
        $marker->setAttribute("lat", $marc_lat);
        $marker->setAttribute("lng", $marc_lng);
        $marker->setAttribute("type", $marc_tipo);
        $markers->appendChild($marker);
    }
    $sql->close();
}

#adiciona os filhos nos devidos pais
$xml->appendChild($markers);

# Para salvar o arquivo
// $xml->save("marcadores.maps.xml");

#cabeçalho da página
header("Content-Type: text/xml");

# imprime o xml na tela
print $xml->saveXML();
?>