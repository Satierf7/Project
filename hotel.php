<?php

require 'pesquisarhotel.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html LANG="pt-br" DIR="ltr">
<head>
	<meta HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<title>Rama Viagens</title>
	<meta name="CREATED" content="0;0">
	<meta name="CHANGED" content="20121026;23400000">
        <link rel="stylesheet" href="css/rama.css" />
        <link rel="stylesheet" href="css/p_geral.css" />
        <link rel="shortcut icon" href="favicon.ico" />
        <script src="jsp/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="jsp/scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="shadowbox-3.0.3/shadowbox.css" />

<script type="text/javascript" src="shadowbox-3.0.3/shadowbox.js"></script>

<body text="#000000" class="body">

<div id="top">
 	<img src="img/banne1.png" />
</div>
		
<div id="bar_h">
<?php
    include 'bar_h.php';
?>
</div>

<div id="center">
    <div id="show_passagens">
        <table width="100%" align="center">
            <tr id="td_passagem" align="center" height="20px">
                <td>Destino</td>                
                <td>Entrada</td>
                <!--<td>Data da volta</td>
                <td>Adultos</td>
                <td>Crian&ccedil;as</td>
                <td>Hora partida</td>
                <td>Hora de chegada</td>
                <td>Escala</td>
                <td>Classe</td>
                <td>Valor da passagem</td>
                <td>Cia aerea</td>-->
            </tr>
            <?php while($hotel = mysql_fetch_array($sql)) {?>
            <tr  align="center">              
                <td><?php echo $hotel['endereco']; ?></td>
                <!-- <td><?php echo $hotel['destino']; ?></td>
                <td><?php echo $hotel['ida']; ?></td>
                <td><?php echo $hotel['volta']; ?></td>
                <td><?php echo $hotel['adultos']; ?></td>
                <td><?php echo $hotel['criancas']; ?></td>
                <td><?php echo $hotel['h_partida']; ?></td>
                <td><?php echo $hotel['h_chegada']; ?></td>
                <td><?php echo $hotel['escala']; ?></td>
                <td><?php echo $hotel['classe_bilhete'];?></td>
                <td><?php echo $hotel['valor_passagem'];?></td>-->
                <td><?php echo "".$hotel['entrada']."<br />";?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
</div>
</body>
</html>