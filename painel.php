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

<!--Inicio de painel-->
<div id="painel">    
        <!--barra horizontal-->
    <div id="bar_">
       <table width="100%" align="center"> 
           <tr>                       
             <td align="center" class="bar_">
                 <font size="+2" color="#333333" face="Lucida Console, Monaco, monospace">
                     <button id="for-block1">Passagens</button>
                 </font>
             </td>
             <td align="center" class="bar_">
                 <font size="+2" color="#333333" face="Lucida Console, Monaco, monospace">
                     <button id="for-block2">Pacotes</button>
                 </font>
             </td>
             <td align="center" class="bar_">
                 <font size="+2" color="#333333" face="Lucida Console, Monaco, monospace">
                     <button id="for-block3">Hoteis</button>
                 </font>
             </td>
           </tr>
       </table>
    </div>
        <!-- fim barra horizontal-->
  
        <!--primeiro block de formulario-->
        <div id="block1">
            <form id="form1" name="pesquisapassagem" action="passagens.php" method="post">
             <div id="op_basica">    
                Ida e volta<input type="radio" checked name="bt_passagem" id="idaVolta" value="0" />
                Só ida<input type="radio" name="bt_passagem" id="ida" value="1" /><br />
                Origem<br /><input type="text" size="30" name="origem" value="" ></input><br />
                Destino<br /><input type="text" size="30" name="destino" value="" ></input><br />
                <div id="op_basica_idavolta">
                  <p>Ida<br><!-- data 1 -->
                      <input name="data1" size="10" maxlength="10" src= calendar.jpg> 
                                <img class="btdata" src="img/icone-calendario.jpg" name="btnData1" Onclick="javascript:popdate('document.pesquisapassagem.data1','pop1','150',document.pesquisapassagem.data1.value)">
                                   <span id="pop1" style="position:absolute"></span>
                                        <spam id="div_volta"><br>Volta<br><input name="data2" size="10" maxlength="10" value=""> 
                                             <img class="btdata2" src="img/icone-calendario.jpg"  NAME="btnData2"  Onclick="javascript:popdate('document.pesquisapassagem.data2','pop2','150',document.pesquisapassagem.data2.value)">
                                                <span id="pop2" style="position:absolute"></span>
                                         </spam>
                  </p>
                    <!--
                    Ida<br /><input type="text" size="30" name="ida" value=""></input><br />
                    <spam id="div_volta">Volta<br /><input type="text" size="30" name="volta" value="" /></spam>-->
                </div>
                <br />
                <label for="selectAdultosP">Adultos</label>                          
                                       <select name="selectAdultosP" size="1" id="select">
                                         <option value="0" selected="selected">0</option>
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="Mais">Mais</option>
                                       </select>                                   

                                      <label for="selectCriancaP">Crianças</label>  									
                                      <select name="selectCriancaP" size="1" id="select2">
                                        <option value="0" selected="selected">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="Mais">Mais</option>
                                      </select><br /><br />
             </div><!--termino opções basicas do block1-->
             <div id="op_avancada_p">
                 <label for="h_partida">Horario de partida</label><br /><input type="text" size="20" name="h_partida" value="" /><br />                   
                 <label for="escala">Escalas</label><br />  									
                                      <select name="escala" size="1" id="escala">
                                        <option value="" selected="selected">Sem Preferência</option>
                                        <option value="0">Somente voos diretos</option>
                                        <option value="1">Até 1 escala</option>
                                        <option value="2">Até 2 escala</option>
                                        <option value="3">Até 3 escala</option>
                                        <option value="4">Até 4 escala</option>
                                        <option value="5">Até 5 escala</option>                                    
                                      </select>
                 <spam class="op_avancada_1">
                 <label for="h_chegada">Horario de chegada</label><br /><input type="text" size="20" name="h_chegada" value="" /><br/>
                 <label for="c_bilhete">Classe de bilhete</label><br />  									
                                      <select name="c_bilhete" size="1" id="c_bilhete">
                                        <option value="" selected="selected">Sem Preferência</option>
                                        <option value="executiva">Executiva/Business</option>
                                        <option value="turistica">Turistica</option>
                                        <option value="1 classe">Primeira classe</option>                         
                                      </select>
                 </spam><br />
                 <label for="cia_aerea">Cia. Aérea</label><br /><input type="text" size="45" name="cia_aerea" value="" />
             </div><!--termino opções avançadas do block1-->
             <div id="save_opv">
                 <p id="op_avancada"><a>Opções avançadas &gt;&gt;</a></p>
                 <p id="op_avancada_fecha"><a>&lt;&lt; Opções avançadas</a></p><input name="submit_block1" type="submit" value="Pesquisar"></input>
             </div>
            </form>
        </div>
        <!--segundo block de formulario-->
<?php include 'form2.php'; ?>
        <!--terceiro block de formulario-->
<?php include 'form3.php'; ?>
        
</div><!--Final de painel-->
