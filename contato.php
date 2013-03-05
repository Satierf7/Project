<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/rama.css" />
<link rel="stylesheet" href="./css/p_geral.css" />
<link rel="shortcut icon" href="favicon.ico" />
<title>Rama Viagens</title>
</head>

<body text="#000000" class="body">
<div id="top">
 	<img src="img/banne1.png" />
</div>
    
<?php 
    include 'top_.php';
?>
		
<div id="bar_h">
<?php
    include 'bar_h.php';
?>
</div>

<div id="center">
	
    
    <form action="enviar.php" method="POST">
                                <input type="hidden">
                                <!-- e-mail do destinatario -->
                                
                                  
                            <table class="t_contato" width="42%" border="0" align="" cellspacing="0" cellpadding="0">
                              <tr> 
                                <td>
                                <h3>Fale conosco</h3>
                                <p>Deixe sua mensagem aqui, ou escolha um de nossos canais de atendimento ao lado.</p></td>
                              </tr>
                              <tr> 
                                <td>Nome:<br> <input type="text" size="30" name="nome" value=""></td>
                              </tr>
                              <tr> 
                                <td>E-mail:<br>
                                  <input type="text" size="30" name="email" value=""></td>
                              </tr>
                              <tr> 
                                <td>Telefone/ Celular:<br>
                                  <input type="text" size="30" name="fone" value=""></td>
                              </tr>
                              <tr> 
                                <td>Assunto:<br> <input type="text" size="30" name="assunto" value=""></td>
                              </tr>
                              <tr> 
                                <td>Mensagem:<br>
                                  <textarea cols="58" rows="10" name="mensagem"></textarea> 
                                </td>
                              </tr>
                              <tr> 
                                <td> <input name="submit" type="submit" value=" Enviar "> 
                                  &nbsp; <input name="reset" type="reset" value=" Limpar "></td>
                              </tr>
                            </table>
                                
</form>
<div id="redes_sociais">
	<p> ............R a m a Viagens nas redes!</p>
     <a href="#"><img src="img/logo_facebook.jpg" hspace="15" /></a>
</div>
 
</div>



</body>
</html>