

 
<?php
echo '

        <!-- Simple header with scrollable tabs. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >
  <header class="mdl-layout__header" style="position: fixed;">
      <!-- Expandable Textfield -->
   

    <div class="mdl-layout__header-row">
       
      <!-- Title -->
      <span class="mdl-layout-title">Divino Sabor (LOGO)</span>
       <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
            mdl-textfield--floating-label mdl-textfield--align-right" style="margin-left: 80%; position: fixed; ">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div> 
      
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#" class="mdl-layout__tab">Home</a>
      <a href="cardapio.php" class="mdl-layout__tab">Cardápio</a>
      <a href="#" class="mdl-layout__tab">Orçamento</a>
    </div>
  </header>
  
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-4">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-5">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-6">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
  </main>
</div>
  
'; 

?> 

    