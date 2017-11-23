


<?php 
 echo ' 
     <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11&appId=784686741736301";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>
        
<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Empresa</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Contato</a></li> <!--Linkar pra página com o Tawk To -->
        
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Redes Sociais</h1>
      <ul class="mdl-mega-footer__link-list">
      <div class="fb-page"
  data-href="https://www.facebook.com/DivSabor" 
  data-width="340"
  data-hide-cover="false"
  data-show-facepile="true">
  </div>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Localização</h1>
      <ul class="mdl-mega-footer__link-list">
          
          
          
    <!-- API DO MAPS --> 
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 20%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 60%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: -29.7504076, lng: -50.2054378},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXNkS6EclADgdgv6zeFMP5P66jV-OLRQQ&callback=initMap"
    async defer></script>
      </ul>
    </div>

  </div>

  <div class="mdl-mega-footer__bottom-section" >
    <ul class="mdl-mega-footer__link-list">
        <li><a href="https://www.wede.com.br/"><img src="images/logoWede.png" style="height: 30px; margin-right: 10px;">Wede Software House</a></li>
    </ul>
  </div>

</footer>
 '; 
?> 
    
    
