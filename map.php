<?php 
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <!--Import MapBox Api-->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />

  <!--Import MapBox Api-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/mumbai-map.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KANJOOS.com</title>
</head>

<body onload="hidePreloader()" class="blue">
  <div id="preloader"></div>
  <div class="row">
    <div id='menu' class="right">
      <a href="./index.php" class="waves-effect waves-light btn-small btn indigo"><i class="material-icons left">chevron_left</i>Back</a>
      <input id='streets-v11' class="waves-effect waves-light btn-small btn indigo" type='button' value='Light'>
      <input id='dark-v10' class="waves-effect waves-light btn-small btn indigo" type='button' value='Dark'>
    </div>
    <div id='map'></div>
    <div id="mapStyle" class='map-overlay top'>
      <div class='map-overlay-inner'>
        <fieldset>
          <label>Select layer</label>
          <select class="browser-default" id='layer' name='layer'>
            <option value='water'>Water</option>
            <option value='building'>Buildings</option>
          </select>
        </fieldset>
        <fieldset>
          <label>Choose a color</label>
          <div id='swatches'></div>
        </fieldset>
      </div>
    </div>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoaWR6enoiLCJhIjoiY2p5dmV4Y3J0MG4xajNubWRneTl6aHI2ZyJ9.jqMgqer2nLqnhPFxx4sYdA';
      var bounds = [
        [72.7752250707669, 18.8784699215539], // Southwest coordinates
        [72.9843568989015, 19.2739209930007] // Northeast coordinates
      ];
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [72.853578, 19.013971],
        zoom: 11,
        maxBounds: bounds
      });
      var layerList = document.getElementById('menu');
      var inputs = layerList.getElementsByTagName('input');

      function switchLayer(layer) {
        var layerId = layer.target.id;
        map.setStyle('mapbox://styles/mapbox/' + layerId);
      }

      for (var i = 0; i < inputs.length; i++) {
        inputs[i].onclick = switchLayer;
      }
      map.addControl(new mapboxgl.NavigationControl());
      map.addControl(new mapboxgl.FullscreenControl());
    </script>
  </div>
  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/mumbai-map.js"></script>
  <script type="text/javascript" src="js/preloader.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>