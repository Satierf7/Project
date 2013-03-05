<?php
//$result = mysql_query("select * FROM passagem WHERE origem");
//$link_promo = mysql_fetch_array($result);
?>
<div id="promo1">
    <a ref="#" ><img src="img/promo1.png" class="img_promo" /> </a>
</div>
<div id="promo2">
    <img src="img/promo2.png" class="img_promo" />
</div>
<div id="promo3">
    <img src="img/promo3.png" class="img_promo" />
</div>
<div id="promo4">
    <br />
    <form method="post">
        <label>Receber Newsletter:</label>
        <input type="checkbox" name="newsletter" id="new_check"/>
        <div id="email_news">
            Email:<input type="text" name="email_newsletter" size="40" />
            <input  type="button" name="enviar_newsletter" value="OK" onClick="iniciar()" />
        </div>
    </form>
</div>
<script language="Javascript">
<!-- 
$email = _POST(email_newsletter);

if($email == ""){
cont=setTimeout("alert('Preencha o campo email.')", 100)
}else{
function iniciar() 
{
cont=setTimeout("alert('Muito obrigado, receba em breve nossas promoções!')", 500)
}
}
// --> 
</script>