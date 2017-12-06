<html> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
<link rel="stylesheet" href="estilo_galeria.css"/>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 

<?php
   include 'head.php';
   //include 'conecta.php';
      ?> 

<body> 
<!--
$sql = "SELECT nomeProduto, descricao FROM produto";
$resultado = mysqli_query($conn, $sql); 

if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultado)) {
        echo " " . $row["nomeProduto"]. " " . $row["descricao"]. "<br>";
    }
}
-->

<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA2.png" width="300" height="200">
    </a>
    <div class="desc"><p>Brigadeiro Simples</p></div>
    <div class="desc"><p>Brigadeiro nos sabores chocolate belga, morango, amendoim, beijinho, leite ninho, Ovomaltine, Nutella, Oreo, maracujá, limão e Nestlé Classic.</p></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA3.png" width="300" height="200">
    </a>
     <div class="desc"><p>Cupcake</p></div>
    <div class="desc"><p>Sabores diversos</p></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA4.png" width="300" height="200">
    </a>
     <div class="desc"><p>Bolo de morango e brigadeiro</p></div>
    <div class="desc"><p>Naked cake de morango e brigadeiro, decorado com M&M's e marshmallow</p></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA5.png" width="300" height="200">
    </a>
     <div class="desc"><p>Bolo M&M's</p></div>
    <div class="desc"><p>Bolo com tubetes de chocolate e M&M's</p></div>
  </div>
</div>

<!--
<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA6.png" width="300" height="200">
    </a>
     <div class="desc"><p>Coração Recheado</p></div>
    <div class="desc"><p>Coração de chocolate ao leite, meio amargo, branco ou misto, com recheio e cobertura variados</p></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA9.png" width="300" height="200">
    </a>
     <div class="desc"><p>Brigadeiro Especial</p></div>
    <div class="desc">Brigadeiros recheados com doce de leite ou Nutella e nos sabores Estikadinho, churros Prestígio e casadinho</div>
  </div>
</div>
-->

<div class="clearfix"></div>




    <?php 
       include 'footer.php';
    ?>   
</body>
</html> 


 

 
