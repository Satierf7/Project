<style>
.content{
	position:absolute;
	top:2px;
     right:15%;
	 width:80%;
    }
.botao01{
     background: -webkit-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -moz-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -o-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: -ms-linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     background: linear-gradient(bottom, #E0E0E0, #F9F9F9 70%);
     border: 1px solid #CCCCCE;
     border-radius: 3px;
     box-shadow: 0 3px 0 rgba(0, 0, 0, .3),
                   0 2px 7px rgba(0, 0, 0, 0.2);
     color: #616165;
     display: block;
     font-family: "Trebuchet MS";
     font-size: 14px;
     font-weight: bold;
     line-height: 25px;
     text-align: center;
     text-decoration: none;
     text-transform: uppercase;
     text-shadow:1px 1px 0 #FFF;
     padding: 5px 12px;
     position: relative;
     width: 100px;
}
 
.botao01:before{
     border: 1px solid #FFF;
     border-radius: 3px;
     box-shadow: inset 0 -2px 12px -4px rgba(70, 70, 70, .2),
                   inset 0 3px 2px -1px rgba(255, 255, 255, 1);
     content: "";
     bottom: 0;
     left: 0;
     right: 0;
     top: 0;
     padding: 5px;
     position: absolute;
    }
 
    .botao01:after{
     background: rgba(255, 255, 255, .4);
     border-radius: 2px;
     content: "";
     bottom: 15px;
     left: 0px;
     right: 0px;
     top: 0px;
     position: absolute;
    }
 .botao01:active{
     box-shadow: inset 0 0 7px rgba(0, 0, 0, .2);
     top: 1px;
    }
    .botao01:active:before{
     border: none;
     box-shadow:none;
    }
.bt_enviar{
	position:absolute;
	margin-left:15px;	
	}
.txt_email{
	height:25px;
	}
</style>
<style><!--FORMATAÇÃO DA VISUALIZAÇÃO DA MENSAGEM DE ERRO!-->
*{ font-family: Verdana; font-size: 96%; }
label { display: block; margin-top: 10px; }
label.error { float: none; color: red; margin: 0 .5em 0 0; vertical-align: top; font-size: 10px }
p { clear: both; }
.submit { margin-top: 1em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>

<div class="content">
<table width="100%">
    <tr>
        <td class="bar_h_" align="center"><a href="index.php"><div class="botao01">HOME</div></a></td>
        <td class="bar_h_" align="center"><a href="empresa.php"><div class="botao01">EMPRESA</div></a></td>
        <td class="bar_h_" align="center"><a href="passagens.php"><div class="botao01">PASSAGENS</div></a></td>
        <td class="bar_h_" align="center"><a href="#"><div class="botao01">PACOTES</div></a></td>
        <td class="bar_h_" align="center"><a href="hotel.php"><div class="botao01">HOTEL</div></a></td>
        <td class="bar_h_" align="center"><a href="contato.php"><div class="botao01">CONTATO</div></a></td>
        <td align="center">
 	       <!-- <form action="" method="post" name="formEmail"  id="formEmail">
            	<input name="txt_email" type="text" id="txt_email"  size="40" class="txt_email" height="25px" />
                <span class="bt_enviar"> <input  class="botao01" type="submit" name="btn_enviar" id="btn_enviar" /></span>
    	    </form> -->
            <form method="post" action="newsletter.php" name="form" id="nwslttr" onsubmit="return valida(this);">
            	<fieldset>
                    <input type="text" id="nl-nome" name="newsletter" value="Assine nossa newsletter" 
                    	onfocus="if(this.value == 'Assine nossa newsletter'){this.value='';}" onblur="if(this.value == '')                  	{this.value = 'Assine nossa newsletter';}" />
                    <input type="submit" id="nl-assinar" class="botao01" name="nl-assinar" value="Assinar" />
                </fieldset>
            </form>
        </td>
    </tr>
</table>
</div>

<?php
/*if(isset($_POST['btn_enviar']))
{
$email = $_POST['txt_email'];
    
$to = "jcastro.sv@gmail.com";
$subject = "Inscricoes para newsletters";
$headers = "From: ". $email . "";
$body = "O email: ". $email ." inscreveu-se nas newsletters";


     if(mail($to, $subject, $body, $headers))
     {
      echo "Email enviado com sucesso.";
     
     }else 
     {
      echo "Ocorreu um erro durante o envio do email.";
        
     }
}  */
?>
