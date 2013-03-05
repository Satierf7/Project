<div id="block2">
   <form name="pesquisapacote" action="pesquisarp.php" method="post">
     Origem<br />
        <input type="text" size="30" name="origemPct" value=""></input><br />
    <p class="dest_volta"> Destino<br />
        <input type="text" size="30" name="destinoPct" value=""></input><br />
           Volta<br>
        <input type="text" size="30" name="voltaPct" value=""></input><br />
    </p>
        Ida<br>
            <input type="text" size="30" name="idaPct" value=""></input><br /><br />

   <label for="quant">Quantidade</label>                          
      <select name="quant" size="1" id="quant">
         <option value="1 quarto" selected="selected">1 Quarto</option>
         <option value="2 quarto">2 Quarto</option>
         <option value="3 quarto">3 Quarto</option>
      </select><br />
   <label for="selectAdultoPct">Adultos</label>                          
      <select name="selectAdultoPct" size="1" id="select">
         <option value="0" selected="selected">0</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="Mais">Mais</option>
      </select>                                   
   <label for="selectCriancaPct">Crianças</label>  									
     <select name="selectCriancaPct" size="1" id="select2">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="Mais">Mais</option>
     </select><br /><br />

     <input name="submit_block2" type="submit" value="Pesquisar"></input>
   </form>
 </div>