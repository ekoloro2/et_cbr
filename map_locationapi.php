<?php
include 'include/include_head.php';
?>
<!DOCTYPE html>
<html>
<head>

  <style>
   /*    html,body{
         height: 100%;
         width: 100%;
         margin: 0;
         padding: 0;
       }*/
        #map {
         height: 90%;
         width: 100%;
         /*background-color: grey;*/
        }
  </style>
  <title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-8" id="map"></div>
      <div class="col">
        2 of 3
      </div>
    </div>
  </div>
  <script>
       function initMap() {
         var uluru = {lat: 16.833942, lng: 100.262228 };
         // var uluru = {lat: 16.789298, lng: 101.050892};
         // 17.8806018,101.4711614,7z
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 7,
           center: uluru
         });

         var marker = new google.maps.Marker({
           position: uluru,
           map: map
         });

       }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Q08GZVHA3-W9eZstsk3dgZRUrCoqBqU&callback=initMap">
  </script>
</body>
</html>