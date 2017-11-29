<html> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
<link rel="stylesheet" href="estilo_galeria.css"/>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 

<?php
   include 'head.php';
   include 'conecta.php';
      ?> 


<body> 
<?php 
$sql = "SELECT nomeProduto, descricao FROM produto";
$resultado = mysqli_query($conn, $sql); 

if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultado)) {
        echo " " . $row["nomeProduto"]. " " . $row["descricao"]. "<br>";
    }
}
?>

<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA2.png" width="300" height="200">
    </a>
    <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo '.$row[descricao]'?></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA3.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA4.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA5.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA6.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA7.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA8.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
      <img src="images/FOTA9.png" width="300" height="200">
    </a>
     <div class="desc"><?php echo .$row["nomeProduto"]?></div>
    <div class="desc"><?php echo .$row["descricao"]?></div>
  </div>
</div>




<div class="clearfix"></div>




    <?php 
       include 'footer.php';
    ?>   
</body>
</html> 


 

 
