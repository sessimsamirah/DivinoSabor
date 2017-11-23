<?php
echo '
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 
<div class="w3-container w3-sand">
    <h2 style="margin-left: 8%; margin-top: 0.5%;">Entre em contato com a gente!</h2>
    <!-- Simple Textfield -->
<form action="" method="POST" style="text-align: center;">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  
      <input class="mdl-textfield__input" type="text" id="sample3" name="nome">
        <label class="mdl-textfield__label" for="sample3">Nome</label></div>


    <br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" name="email">
        <label class="mdl-textfield__label" for="sample3">E-mail</label></div>

        <br>

        <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="mensagem"></textarea>
    <label class="mdl-textfield__label" for="sample5">Digite aqui sua mensagem</label>
  </div>
<br>

  <!-- Raised button -->
  <button class="mdl-button mdl-js-button mdl-button--raised" value="Enviar" name="Enviar" style="background-color: darkgray;">
  Enviar
</button>
</form>

</div> 
'; 
?>