<html> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 

<?php
   include 'head.php';
   include 'conecta.php'; 
    ?>   


<body> 

   
    <?php
    $sql = "SELECT nomeProduto, descricao, preco, imagem FROM produto"; 
    $resultado = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($resultado>0)){
        while ($row = mysqli_fetch_assoc($resultado)){
            
?>
    

    <div class="mdl-grid" style="margin-left: 90px; position: relative;">
    
    <div class="mdl-cell mdl-cell--4-col">
        
<style>
.demo-card-square.mdl-card {
  margin-top: 100px;
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
      url('<?php echo $row["imagem"];?>') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
      <h2 class="mdl-card__title-text"><?php echo $row["nomeProduto"];?></h2>
  </div>
  <div class="mdl-card__supporting-text">
    <?php
    echo $row["descricao"];
    ?>
  </div>
</div>

    </div>
    </div>
        <?php
                }
    }
    ?>
        
        

    <!-- 
    <div class="mdl-cell mdl-cell--4-col">
        
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
</div>
    </div>
    
    
    <div class="mdl-cell mdl-cell--4-col">
        
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
</div>
        
    </div>
    
</div>

    <div class="mdl-grid" style="margin-left: 90px;">
     
     <div class="mdl-cell mdl-cell--4-col">
         
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  
</div>

     </div>
     
     
     <div class="mdl-cell mdl-cell--4-col">
       
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  
</div>

     </div>
     
     
     <div class="mdl-cell mdl-cell--4-col">
         
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  
</div>

     </div>

 </div>
    
    <div class="mdl-grid" style="margin-left: 90px;">
        
        <div class="mdl-cell mdl-cell--4-col">
            
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  
</div>

        </div>
        
        
        <div class="mdl-cell mdl-cell--4-col">
            
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  
</div>

        </div>
        
        
        <div class="mdl-cell mdl-cell--4-col">
            
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
 
</div>

        </div>
</div>
    
  
    
</body>

    <?php 
       include 'footer.php';
    ?>  
</html> 


