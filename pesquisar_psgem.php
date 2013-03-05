<?php

include 'mysqlconecta.php';

$origem = (isset($_POST['origem'])) ? addslashes($_POST['origem']) : '';
$destino = (isset($_POST['destino'])) ? addslashes($_POST['destino']) : '';
$ida = (isset($_POST['data1'])) ? addslashes($_POST['data1']) : '';
$volta = (isset($_POST['data2'])) ? addslashes($_POST['data2']) : '';
$adulto = (isset($_POST['selectAdultosP'])) ? addslashes($_POST['selectAdultosP']) : '';
$crianca = (isset($_POST['selectCriancaP'])) ? addslashes($_POST['selectCriancaP']) : '';
$h_partida = (isset($_POST['h_partida'])) ? addslashes($_POST['h_partida']) : '';
$h_chegada = (isset($_POST['h_chegada'])) ? addslashes($_POST['h_chegada']) : '';
$escalap = (isset($_POST['escala'])) ? addslashes($_POST['escala']) : '';
$c_bilhete = (isset($_POST['c_bilhete'])) ? addslashes($_POST['c_bilhete']) : '';
$cia_aerea = (isset($_POST['cia_aerea'])) ? addslashes($_POST['cia_aerea']) : '';

/*

    $c_bilhete = $_POST['c_bilhete'];
    $cia_aerea = $_POST['cia_aerea'];   
};
*/

$condicoes = '';

if ($origem) {
    $condicoes = " origem like \"%{$origem}%\" ";
}
if ($destino) {
    if ($condicoes != "") {
        $condicoes .= " AND ";
    }
    $condicoes .= " destino like \"%{$destino}%\"";
}
if ($ida) {
    if ($condicoes != "") {
        $condicoes .= " AND ";
    }
    $condicoes .= " ida = \"{$ida}\"";
}
if($volta){
    if($condicoes != ""){
       $condicoes .= " AND ";
    }
    $condicoes .= " volta = \"{$volta}\"";
}
if($adulto){
    if($condicoes != ""){
        $condicoes .= " AND ";
    }
    $condicoes .= " adultos = \"{$adulto}\"";
}
if($crianca){
    if($condicoes != ""){
        $condicoes .= " AND ";
    }
    $condicoes .= " criancas = \"{$crianca}\"";
}
if($h_partida){
    if($condicoes != ""){
        $condicoes .= "AND";
    }
    $condicoes .= " h_partida like \"%{$h_partida}%\"";
}

if($h_chegada){
    if($condicoes != ""){
        $condicoes .= "AND";
    }
    $condicoes .= " h_chegada like \"%{$h_chegada}%\"";
}

if ($escalap) {
    if ($condicoes != "") {
        $condicoes .= " AND ";
    }
    $condicoes .= " escala = \"{$escalap}\"";
}/*
if ($c_bilhete) {
    if ($condicoes != "") {
        $condicoes .= " AND ";
    }
    $condicoes .= " classe_bilhete = \"{$c_bilhete}\"";
}*/
if ($cia_aerea) {
    if ($condicoes != "") {
        $condicoes .= " AND ";
    }
    $condicoes .= " cia_aerea like \"%{$cia_aerea}%\"";
}


if ($condicoes == "") {
    $sql = mysql_query("SELECT * FROM passagens LIMIT 10");
}
else {
    $sql = mysql_query("SELECT * FROM passagens WHERE {$condicoes}");
}
?>
