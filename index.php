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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <!--Import MapBox Api-->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />
  <!--Import MapBox Api-->
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KANJOOS.com</title>
</head>

<body onload="hidePreloader()" class="blue lighten-4">
  <div id="preloader"></div>
  <nav class="blue">
    <div class="nav wrapper">
      <div class="container">
        <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>

        <a href="#" class="brand-logo center">KANJOOS.COM</a>
      </div>
    </div>
  </nav>

  <ul class="side-nav fixed" id="sidenav">
    <li>
      <div class="user-view">
        <?php if (isset($_SESSION['username'])) : ?>
          <div class="background indigo"></div>
          <a href="#user"><img class="responsive-img" src="img/counter-guy.svg"></a>
          <h3 class="center white-text" style="font-size:30px;padding-bottom:30px;"> Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h3>
        <?php endif ?>
      </div>
    </li>

    <li>
      <a href="./index.php"><i class="material-icons indigo-text">dashboard</i>Dashboard
      </a>
    </li>

    <li>
      <a href="./records.php"><i class="material-icons indigo-text">description</i>Recommendations
      </a>
    </li>

    <li>
      <a href="./map.php"><i class="material-icons indigo-text">maps</i>Mumbai-Map
      </a>
    </li>
    <li>
      <a href="./about.php"><i class="material-icons indigo-text">bookmark</i>About
      </a>
    </li>
    <li>
      <a href="./profile.php"><i class="material-icons indigo-text">face</i>Profile </a>
    </li>
    <div class="divider"></div>
    <li>
      <a href="index.php?logout='1'"><i class="material-icons indigo-text">exit_to_app</i>Logout
      </a>
    </li>
  </ul>

  <!--SideNav Finished-->

  <div class="content">

    <div class="row">
      <div class="col s12 l4">
        <div class="card-panel center">
          <h5 class="left indigo-text"><i class="material-icons indigo-text"></i>BUDGET</h5>
          <a>
            <span id="priceVal" class="right indigo btn box white-text"></span>
          </a>
          <input type="range" min="200" max="2500" step="100" id="priceRange" />
        </div>
      </div>
      <div class="col s12 l4">
        <div class="card-panel center">
          <div class="input-field ">
            <select id="type" onchange="getType()">
              <option value="" disabled selected>Pick out Likings</option>
              <option value="food">Food</option>
              <option value="travel">Travel</option>
              <option value="fashion">Fashion</option>
              <option value="hotels">Hotels</option>
            </select>
            <label class="indigo-text"><b>Things you can look for</b></label>
          </div>
        </div>
      </div>
      <div class="col s12 l4">
        <div class="card-panel center">
          <div class="input-field ">
            <select id="region" onchange="getRegion()">
              <option value="" disabled selected>Select Region</option>
              <option value="wadala">Wadala</option>
              <option value="dadar">Dadar</option>
              <option value="matunga">Matunga</option>
              <option value="sion">Sion</option>
            </select>
            <label class="indigo-text"><b>Regions Available</b></label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Map Starts here-->
  <div class="content">
    <div class="row">
      <div class="row card-panel">
        <label>Results will be diplayed here</label>
        <div id='index-map' style='width: 100%; height: 500px;'></div>
        <pre id=' coordinates' class='coordinates'></pre>

        <script>
          mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoaWR6enoiLCJhIjoiY2p5dmV4Y3J0MG4xajNubWRneTl6aHI2ZyJ9.jqMgqer2nLqnhPFxx4sYdA';
          var bounds = [
            [72.7752250707669, 18.8784699215539], // Southwest coordinates
            [72.9843568989015, 19.2739209930007] // Northeast coordinates
          ];
          var map = new mapboxgl.Map({
            container: 'index-map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [72.853578, 19.013971],
            zoom: 10,
            maxBounds: bounds
          });
          map.addControl(new mapboxgl.FullscreenControl());
          map.addControl(new mapboxgl.NavigationControl());
        </script>
      </div>
    </div>
  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/preloader.js"></script>

</body>

</html>