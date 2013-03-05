<?php
// aqui come�a o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$site     = $_POST["site"];
$email   = $_POST["email"];
$fone  = $_POST["fone"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //funcao para validar a vari�vel $email no script todo

$data      = date("d/m/y");                     //funcao para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //funcao para pegar o ip do usuario
$navegador = $_SERVER['HTTP_USER_AGENT'];       //funcao para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a funcao date

//aqui envia o e-mail para voce
mail ("jcastro.sv@gmail.com",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
      "From: $email"
     );

//aqui sao as configuracoes para enviar o e-mail para o visitante
$site   = "jcastro.sv@gmail.com";                    //o e-mail que aparecera na caixa postal do visitante
$titulo = "Thanks you for visity.";                  //titulo da mensagem enviada para o visitante
$msg    = "$Rama Viagens, obrigado por entrar em contato conosco, em breve entraremos em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Estaremos retornando em breve.</p>";
?>
