<?php
$dbname     ="rama_turismo"; 
$usuario    ="root"; 
$password   ="";
$server     = "localhost";

if(!@mysql_connect($sever,$usuario,$password))
{
   echo "Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
   return index.php;
} 

if(!@mysql_select_db($dbname)) { 
   echo "Nao foi possivel estabelecer uma conexao com o banco de dados.";
   exit; 
} 
?>
