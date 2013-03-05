<?php

include 'mysqlconecta.php';

$destinoh = (isset($_POST['destinoh'])) ? addslashes($_POST['destinoh']) : '';
$entradah = (isset($_POST['entradah'])) ? addslashes($_POST['entradah']) : '';
$saidah   = (isset($_POST['saidah']))   ? addslashes($_POST['saidah'])   : '';
$quant    = (isset($_POST['quant']))    ? addslashes($_POST['quant'])    : '';
$adultoh  = (isset($_POST['adultoh']))  ? addslashes($_POST['adultoh'])  : '';
$criancah = (isset($_POST['criancah'])) ? addslashes($_POST['criancah']) : '';

$condicoes = '';

if($destinoh){
   $condicoes = "endereco like \"%{$destinoh}%\" ";     
}
if($entradah){
    if($condicoes != ""){
        $condicoes .= 'AND';
    }
    $condicoes .= " entrada like \"%{$entradah}%";
}



if ($condicoes == "") {
    $sql = mysql_query("SELECT * FROM hotel LIMIT 10");
}
else {
    $sql = mysql_query("SELECT * FROM hotel WHERE {$condicoes}");
}

?>
