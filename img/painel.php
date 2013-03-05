<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<title>Rama Viagens</title>
	<meta name="CREATED" content="0;0">
	<meta name="CHANGED" content="20121026;23400000">
        <link rel="stylesheet" href="css/rama.css" />
        <link rel="stylesheet" href="css/p_geral.css" />
        <link rel="stylesheet" type="text/css" href="shadowbox.css">
	<script src="jsp/jquery-1.8.2.min.js"></script>
	<script src="jsp/scripts.js"></script>

<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize:     "drag",
    displayNav:         false,
    handleUnsupported:  "remove",
    autoplayMovies:     false  
});
</script>

	<!--Inicio de painel-->
	<!--barra horizontal-->
</head>
<script language='Javascript'>

// construindo o calendário
function popdate(obj,div,tam,ddd)
{
    if (ddd) 
    {
        day = ""
        mmonth = ""
        ano = ""
        c = 1
        char = ""
        for (s=0;s<parseInt(ddd.length);s++)
        {
            char = ddd.substr(s,1)
            if (char == "/") 
            {
                c++; 
                s++; 
                char = ddd.substr(s,1);
            }
            if (c==1) day    += char
            if (c==2) mmonth += char
            if (c==3) ano    += char
        }
        ddd = mmonth + "/" + day + "/" + ano
    }
  
    if(!ddd) {today = new Date()} else {today = new Date(ddd)}
    date_Form = eval (obj)
    if (date_Form.value == "") { date_Form = new Date()} else {date_Form = new Date(date_Form.value)}
  
    ano = today.getFullYear();
    mmonth = today.getMonth ();
    day = today.toString ().substr (8,2)
  
    umonth = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro")
    days_Feb = (!(ano % 4) ? 29 : 28)
    days = new Array (31, days_Feb, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)

    if ((mmonth < 0) || (mmonth > 11))  alert(mmonth)
    if ((mmonth - 1) == -1) {month_prior = 11; year_prior = ano - 1} else {month_prior = mmonth - 1; year_prior = ano}
    if ((mmonth + 1) == 12) {month_next  = 0;  year_next  = ano + 1} else {month_next  = mmonth + 1; year_next  = ano}
    txt  = "<table bgcolor='#efefff' style='border:solid #330099; border-width:2' cellspacing='0' cellpadding='3' border='0' width='"+tam+"' height='"+tam*1.1 +"'>"
    txt += "<tr bgcolor='#FFFFFF'><td colspan='7' align='center'><table border='0' cellpadding='0' width='100%' bgcolor='#FFFFFF'><tr>"
    txt += "<td width=20% align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+((mmonth+1).toString() +"/01/"+(ano-1).toString())+"') class='Cabecalho_Calendario' title='Ano Anterior'><<</a></td>"
    txt += "<td width=20% align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+( "01/" + (month_prior+1).toString() + "/" + year_prior.toString())+"') class='Cabecalho_Calendario' title='Mês Anterior'><</a></td>"
    txt += "<td width=20% align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+( "01/" + (month_next+1).toString()  + "/" + year_next.toString())+"') class='Cabecalho_Calendario' title='Próximo Mês'>></a></td>"
    txt += "<td width=20% align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+((mmonth+1).toString() +"/01/"+(ano+1).toString())+"') class='Cabecalho_Calendario' title='Próximo Ano'>>></a></td>"
    txt += "<td width=20% align=right><a href=javascript:force_close('"+div+"') class='Cabecalho_Calendario' title='Fechar Calendário'><b>X</b></a></td></tr></table></td></tr>"
    txt += "<tr><td colspan='7' align='right' bgcolor='#ccccff' class='mes'><a href=javascript:pop_year('"+obj+"','"+div+"','"+tam+"','" + (mmonth+1) + "') class='mes'>" + ano.toString() + "</a>"
    txt += " <a href=javascript:pop_month('"+obj+"','"+div+"','"+tam+"','" + ano + "') class='mes'>" + umonth[mmonth] + "</a> <div id='popd' style='position:absolute'></div></td></tr>"
    txt += "<tr bgcolor='#330099'><td width='14%' class='dia' align=center><b>Dom</b></td><td width='14%' class='dia' align=center><b>Seg</b></td><td width='14%' class='dia' align=center><b>Ter</b></td><td width='14%' class='dia' align=center><b>Qua</b></td><td width='14%' class='dia' align=center><b>Qui</b></td><td width='14%' class='dia' align=center><b>Sex<b></td><td width='14%' class='dia' align=center><b>Sab</b></td></tr>"
    today1 = new Date((mmonth+1).toString() +"/01/"+ano.toString());
    diainicio = today1.getDay () + 1;
    week = d = 1
    start = false;

    for (n=1;n<= 42;n++) 
    {
        if (week == 1)  txt += "<tr bgcolor='#efefff' align=center>"
        if (week==diainicio) {start = true}
        if (d > days[mmonth]) {start=false}
        if (start) 
        {
            dat = new Date((mmonth+1).toString() + "/" + d + "/" + ano.toString())
            day_dat   = dat.toString().substr(0,10)
            day_today  = date_Form.toString().substr(0,10)
            year_dat  = dat.getFullYear ()
            year_today = date_Form.getFullYear ()
            colorcell = ((day_dat == day_today) && (year_dat == year_today) ? " bgcolor='#FFCC00' " : "" )
            txt += "<td"+colorcell+" align=center><a href=javascript:block('"+  d + "/" + (mmonth+1).toString() + "/" + ano.toString() +"','"+ obj +"','" + div +"') class='data'>"+ d.toString() + "</a></td>"
            d ++ 
        } 
        else 
        { 
            txt += "<td class='data' align=center> </td>"
        }
        week ++
        if (week == 8) 
        { 
            week = 1; txt += "</tr>"} 
        }
        txt += "</table>"
        div2 = eval (div)
        div2.innerHTML = txt 
}
  
// função para exibir a janela com os meses
function pop_month(obj, div, tam, ano)
{
  txt  = "<table bgcolor='#CCCCFF' border='0' width=80>"
  for (n = 0; n < 12; n++) { txt += "<tr><td align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+("01/" + (n+1).toString() + "/" + ano.toString())+"')>" + umonth[n] +"</a></td></tr>" }
  txt += "</table>"
  popd.innerHTML = txt
}

// função para exibir a janela com os anos
function pop_year(obj, div, tam, umonth)
{
  txt  = "<table bgcolor='#CCCCFF' border='0' width=160>"
  l = 1
  for (n=1991; n<2012; n++)
  {  if (l == 1) txt += "<tr>"
     txt += "<td align=center><a href=javascript:popdate('"+obj+"','"+div+"','"+tam+"','"+(umonth.toString () +"/01/" + n) +"')>" + n + "</a></td>"
     l++
     if (l == 4) 
        {txt += "</tr>"; l = 1 } 
  }
  txt += "</tr></table>"
  popd.innerHTML = txt 
}

// função para fechar o calendário
function force_close(div) 
    { div2 = eval (div); div2.innerHTML = ''}
    
// função para fechar o calendário e setar a data no campo de data associado
function block(data, obj, div)
{ 
    force_close (div)
    obj2 = eval(obj)
    obj2.value = data 
}

</script>

<!-- 
o css abaixo é apenas para dar uma aparência melhor para o calendário. vc pode mudá-lo a sua maneira 
insira o código abaixo entre as tags <HEAD> </HEAD> de sua página
-->
<style>
    .dia {font-family: helvetica, arial; font-size: 8pt; color: #FFFFFF}
    .data {font-family: helvetica, arial; font-size: 8pt; text-decoration:none; color:#191970}
    .mes {font-family: helvetica, arial; font-size: 8pt}
    .Cabecalho_Calendario {font-family: helvetica, arial; font-size: 10pt; color: #000000; text-decoration:none; font-weight:bold}
</style>
<br><br>      
<!-- data 2 -->
<body LANG="pt-BR" DIR="LTR">

<div id="painel" dir="LTR">
<a href = "angola2.jpg" rel="shadowbox"><img src="angola1.png" />
	<p><br><br>
	</p>
	<div id="bar_" dir="LTR">
		<center>
			<table WIDTH=100% CELLPADDING=2 CELLSPACING=2>
				<tr>
					<td STYLE="border: none; padding: 0cm">
						<p align=CENTER><font COLOR="#333333"><font face="Lucida Console, Monaco, monospace"><font size=5>Passagens
						</font></font></font>
						</p>
					</td>
					<td style="border: none; padding: 0cm">
						<p align=CENTER><font COLOR="#333333"><font face="Lucida Console, Monaco, monospace"><font size=5>Pacotes
						</font></font></font>
						</p>
					</td>
					<td style="border: none; padding: 0cm">
						<p align=CENTER><font color="#333333"><font face="Lucida Console, Monaco, monospace"><font size=5>Hoteis
						</font></font></font>
						</p>
					</td>
				</tr>
			</table>
		</center>
	</div>
	<div id="centro" dir="LTR">
		<p><!-- fim barra horizontal--><!-- Inicio ao centro do painel--><!--primeiro block de formulario--><br><br>
		</p>
		<div id="block1" dir="LTR">
			<p><br><br>
			</p>
			<div id="op_basica" dir="LTR">
				<form name="form1" action="pesquisar.php" method="POST">
					<p><a name="idaVolta"></a>
						<a name="ida"></a>Ida e volta
						   <input type=RADIO name="bt_passagem" value="0" checked style="width: 0.35cm; height: 0.35cm">
					Só ida<input type=RADIO name="bt_passagem" value="1" style="width: 0.35cm; height: 0.35cm">
						<br>Origem<br><input type=TEXT name="origem" size=30 style="width: 6.46cm; height: 0.72cm">
						   <br>Destino<br><input type=TEXT name="destino" size=30 STYLE="width: 6.46cm; height: 0.72cm"></p>
					               <div id="op_basica_idavolta" DIR="LTR">
						          <p>Ida<br><!-- data 1 -->
                                                              <input name="data1" size="10" maxlength="10" src= calendar.jpg> 
									<img src="calendar.jpg" name="btnData1" src = calendar.jpg Onclick="javascript:popdate('document.form1.data1','pop1','150',document.form1.data1.value)">
									   <span id="pop1" style="position:absolute"></span>
										<br>Volta<br><input name="data2" size="10" maxlength="10" value=""> 
                                                                                     <img src="calendar.jpg"  NAME="btnData2"  Onclick="javascript:popdate('document.form1.data2','pop2','150',document.form1.data2.value)">
                                                                                        <span id="pop2" style="position:absolute"></span>
							  </p>
					               </div>
					<p><a name="select"></a><a name="select2"></a><br>Adultos 
				    <select name="selectAdultosP" style="width: 1.91cm; height: 0.87cm">
				<option value="0"selected>0
			  <option value="1">1
			  <option value="2">2
			  <option value="3">3
			  <option value="4">4
			  <option value="5">5
			  <option value="Mais">Mais
				</option>
			             </select> Crianças 
					<select name="selectCriancaP" style="width: 1.91cm; height: 0.87cm">
				 	   <option value="0" selected>0
						<option value="1">1
						<option value="2">2
						<option value="3">3
						<option value="4">4
						<option value="5">5
						<option value="Mais">Mais
					   </option>
				     </select><br><br><br><br>
					</p>
				</div>
			<div id="op_avancada_p" DIR="LTR">
			   <p><a name="escala"></a><a name="c_bilhete"></a>
		    <!--termino opções basicas do block1-->Horario de partida<br>
		<input type=TEXT name="h_partida" size=20 style="width: 4.34cm; height: 0.72cm">
           <br>Escalas<br>
    <select name="escalaP" style="width: 5.03cm; height: 0.87cm">
	<option value="sem preferencia" selected>Sem Preferência
		<option VALUE="somente voos diretos">Somente voos diretos
		<option VALUE="ate 1 escala">Até 1 escala
		<option VALUE="ate 2 escala">Até 2 escala
		<option VALUE="ate 3 escala">Até 3 escala
		<option VALUE="ate 4 escala">Até 4 escala
		<option VALUE="ate 5 escala">Até 5 escala
	</option>
    </select> Horario de retorno<br>
  <input type=TEXT name="h_retorno" size=20 style="width: 4.34cm; height: 0.72cm">Classe de bilhete<br>
<select NAME="c_bilhete" STYLE="width: 4.39cm; height: 0.87cm">
   <option VALUE="sem preferencia" SELECTED>Sem Preferência
   <option VALUE="executiva">Executiva/Business
   <option VALUE="turistica">Turistica
   <option VALUE="1 classe">Primeira classe
   </option>
</select> <br>Cia. Aérea<br>
	<input type=text name="cia_aerea" size=45 style="width: 9.63cm; height: 0.72cm">
      </p>
  </div>
  <div id="save_opv" dir="ltrR">
      <p><a name="op_avancada"></a>
<!--termino opções avançadas do block1-->
          Opções avançadas &gt;&gt;
      </p>
      <p><a name="op_avancada_fecha"></a>&lt;&lt; Opções avançadas</p>
      <p><input type=submit name="submit_block1" value="Pesquisar" style="width: 2.59cm; height: 1.06cm">
      </p>
    </form>
  </div>
</div>
<div id="block2" dir="LTR">
<form name="pesquisapacote" action="pesquisarp.php" method="POST">
    <p><!--segundo block de formulario-->Origem<br>
	<input type=text name="origemPct" size=30 style="width: 6.46cm; height: 0.72cm">
    </p>
    <p>Destino<br>
	<input type=TEXT name="destinoPct" size=30 style="width: 6.46cm; height: 0.72cm">
	   <br>Volta<br>
		<input type=TEXT name="voltaPct" size=30 style="width: 6.46cm; height: 0.72cm"></p>
		    <p><a name="quant"></a><a name="select1"></a><s name="select21"></a>
			Ida<br><input type=TEXT name="idaPct" size=30 style="width: 6.46cm; height: 0.72cm"><br><br>Quantidade
				<select name="quant" style="width: 2.75cm; height: 0.87cm">
				    <option value="1 quarto" SELECTED>1 Quarto
					<OPTION VALUE="2 quarto">2 Quarto
					<OPTION VALUE="3 quarto">3 Quarto</OPTION>
				</SELECT><BR>Adultos 
				<SELECT NAME="selectAdultoPct" STYLE="width: 1.91cm; height: 0.87cm">
					<OPTION VALUE="0" SELECTED>0
					<OPTION VALUE="1">1
					<OPTION VALUE="2">2
					<OPTION VALUE="3">3
					<OPTION VALUE="4">4
					<OPTION VALUE="5">5
					<OPTION VALUE="Mais">Mais</OPTION>
				</SELECT> Crianças 
				<SELECT NAME="selectCriancaPct" STYLE="width: 1.91cm; height: 0.87cm">
					<OPTION VALUE="0" SELECTED>0
					<OPTION VALUE="1">1
					<OPTION VALUE="2">2
					<OPTION VALUE="3">3
					<OPTION VALUE="4">4
					<OPTION VALUE="5">5
					<OPTION VALUE="Mais">Mais</OPTION>
				</SELECT><BR><BR><INPUT TYPE=SUBMIT NAME="submit_block2" VALUE="Pesquisar" STYLE="width: 2.59cm; height: 1.06cm">
								</P>
			</FORM>
		</DIV>
		<DIV ID="block3" DIR="LTR">
			<FORM NAME="pesquisarhotel" ACTION="pesquisarh.php" METHOD="POST">
				<P><A NAME="quant1"></A><A NAME="select3"></A><A NAME="select22"></A>
				<!--terceiro block de formulario-->Destino<BR><INPUT TYPE=TEXT NAME="destinoH" SIZE=55 STYLE="width: 11.75cm; height: 0.72cm"><BR>Entrada<BR><INPUT TYPE=TEXT NAME="entradaH" SIZE=24 STYLE="width: 5.19cm; height: 0.72cm"><BR>Saída<BR><INPUT TYPE=TEXT NAME="saidaH" SIZE=24 STYLE="width: 5.19cm; height: 0.72cm"><BR>Quantidade
								<SELECT NAME="quantH" STYLE="width: 2.75cm; height: 0.87cm">
					<OPTION VALUE="1 quarto" SELECTED>1 Quarto
					<OPTION VALUE="2 quarto">2 Quarto
					<OPTION VALUE="3 quarto">3 Quarto</OPTION>
				</SELECT><BR>Adultos 
				<SELECT NAME="AdultoH" STYLE="width: 1.91cm; height: 0.87cm">
					<OPTION VALUE="0" SELECTED>0
					<OPTION VALUE="1">1
					<OPTION VALUE="2">2
					<OPTION VALUE="3">3
					<OPTION VALUE="4">4
					<OPTION VALUE="5">5
					<OPTION VALUE="Mais">Mais</OPTION>
				</SELECT> Crianças 
				<SELECT NAME="CriancaH" STYLE="width: 1.91cm; height: 0.87cm">
					<OPTION VALUE="0" SELECTED>0
					<OPTION VALUE="1">1
					<OPTION VALUE="2">2
					<OPTION VALUE="3">3
					<OPTION VALUE="4">4
					<OPTION VALUE="5">5
					<OPTION VALUE="Mais">Mais</OPTION>
				</SELECT> <BR><INPUT TYPE=SUBMIT NAME="submit_hotel" VALUE="Pesquisar" STYLE="width: 2.59cm; height: 1.06cm">
								</P>
			</FORM>
		</DIV>
	</DIV>
	<P><!--Final de painel-->'</P>
</DIV>
</body>
</html>
