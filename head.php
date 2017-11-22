

<?php
echo '
    

         <style>
       /* Style the tab buttons */
.tablink {
    background-color: #7AA55D;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

/* Change background color of buttons on hover */
.tablink:hover {
    background-color: #777;
}

/* Set default styles for tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}

        </style> 

<button class="tablink">LOGO</button>
<a href="index.php"><button class="tablink" onclick="openCity("Paris", this, "green">Home</button></a>
<a href="cardapio.php"><button class="tablink" onclick="openCity("Paris", this, "green")">Cardápio</button></a>
<button class="tablink" onclick="openCity("Paris", this, "green")">Orçamento</button> 
'; 
?>