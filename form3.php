<div id="block3">
   <form name="pesquisarhotel" action="hotel.php" method="post">
     <label for="destinoh">Destino</label><br />
        <input name="destinoh" type="text" size="55" value="" /><br />
     <label for="entradaH">Entrada</label><br />
        <input name="entradah" type="text" size="24" value="" /><br />
     <label for="saidaH">Saída</label><br />
        <input name="saidah" type="text" size="24" value="" /><br />

     <label for="quanth">Quantidade</label>                          
       <select name="quanth" size="1" id="quant">
         <option value="1 quarto" selected="selected">1 Quarto</option>
         <option value="2 quarto">2 Quarto</option>
         <option value="3 quarto">3 Quarto</option>
       </select><br />

     <label for="adultoh">Adultos</label> <br/>                         
       <select name="Adultoh" size="1" id="select">
         <option value="0" selected="selected">0</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="Mais">Mais</option>
       </select>                                  
    <spam class="criancah">
      <label for="criancah">Crianças</label><br/>  									
      <select name="Criancah" size="1" id="select2">
        <option value="0" selected="selected">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="Mais">Mais</option>
      </select>
    </spam><br />
  <input name="submit_hotel" type="submit" value="Pesquisar"></input>
 </form>
</div>