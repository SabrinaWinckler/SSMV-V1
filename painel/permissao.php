<?php

require_once("../config.class.php");

$permissao = array (
    "pf" => array (
        "requisicao" => "Requisição",
        "marcar" => "Marcar horário"
    ),
    "pj" => array (
        "requisicao" => "Requisição",
        "cronograma" => "Cronograma"
    ),
    "na" => array (
        "requisicao" => "Requisição"
    )
);

// $_tipo = 'pf';
$permissao = (json_decode(json_encode($permissao))->$_tipo);

if ($_tipo == 'pf' || $_tipo == 'pj'){
    $requisicao = '<li><a href="#"><i class="fa fa-heart fa-fw"></i> Requisição<span class="fa arrow"></span></a><ul class="nav nav-second-level collapse" aria-expanded="true"><li><a href="'.BASEPAINEL.'requisicao/novo"><span class="fa fa-plus"></span> Nova requisição</a></li><li><a href="'.BASEPAINEL.'requisicao/meus"><span class="fa fa-list"></span> Minhas requisições</a></li></ul></li>';
} else {
    $requisicao = '';
}

$marcar = false;

$cronograma = false;


foreach($permissao as $url => $titulo) {
    echo $$url;
}
?>