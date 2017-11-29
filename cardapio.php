<html> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
<link rel="stylesheet" href="estilo_galeria.css"/>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 

<?php
   include 'head.php';
      ?> 


<body> 

$consulta = "SELECT * FROM fotos where data='$datas' and status='Sim' order by id LIMIT $inicio, $qnt";

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_fjords.jpg">
      <img src="img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">DESCRICAO</div>
  </div>
</div>



<div class="clearfix"></div>




    <?php 
       include 'footer.php';
    ?>   
</body>
</html> 


 
