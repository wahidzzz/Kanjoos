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
        <div class="background indigo"></div>
        <a href="#user"> <img class="responsive-img" src="img/counter-guy.svg"></a>
        <h3 class="white-text head" style="font-size:30px; padding-bottom:30px;">Recommendations</h3>
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
      <div class="col s12 m4 l3 card">
        <div class="card-image waves-effect waves-block waves-light">
          <br /><img class="activator" src="img/dadar.jpg" />
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Dadar<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Dadar<i class="material-icons right">close</i></span>
          <p>
            Dadar is the first planned suburb of Mumbai. It is a densely populated residential and shopping neighbourhood. It is also a prominent railway and bus service hub with local and national connectivity.
          </p>
          <p><a class="recLink" data-value="dadar" onclick="OpenPopup('https://en.wikipedia.org/wiki/Dadar', 'About Dadar', 600, 400);">Know More</a></p>
          </p>
        </div>
      </div>
      <div class="col s12 m4 l3 card">
        <div class="card-image waves-effect waves-block waves-light">
          <br /><img class="activator" src="img/matunga.jpg" />
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Matunga<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Matunga<i class="material-icons right">close</i></span>
          <p>
            Matunga is a locality in the heart of Mumbai City towards downtown Mumbai. It is serviced by the Matunga Road station on the Western line, Matunga on the Central Line and King's Circle station on the Harbour Line.
          </p>
          <p><a class="recLink" data-value="matunga" onclick="OpenPopup('https://en.wikipedia.org/wiki/Matunga', 'About Matunga', 600, 400);">Know More</a></p>
        </div>
      </div>
      <div class="col s12 m4 l3 card">
        <div class="card-image waves-effect waves-block waves-light">
          <br /><img class="activator" src="img/wadala.jpg" />
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Wadala<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Wadala<i class="material-icons right">close</i></span>
          <p>
            Wadala has a large number of old temples, university campuses and is also home to a former world's largest IMAX dome theater. It is also home to the Vidyalankar Educational Campus, whose building design has won an international award viz.
          </p>
          <p><a class="recLink" data-value="wadala" onclick="OpenPopup('https://en.wikipedia.org/wiki/Wadala', 'About Wadala', 600, 400);">Know More</a></p>
        </div>
      </div>
      <div class="col s12 m4 l3 card">
        <div class="card-image waves-effect waves-block waves-light">
          <br /><img class="activator" src="img/sion.jpg" />
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Sion<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Sion<i class="material-icons right">close</i></span>
          <p>
            Sion is a neighbourhood of Mumbai. In the 17th century the village formed the boundary between Mumbai and Salsette Island. The British named it marking the end of the city. The name remained even after Mumbai was joined to the Salsette and extended up to Mulund.
          </p>
          <p>
            <a class="recLink" data-value="sion" href="#" onclick="OpenPopup('https://en.wikipedia.org/wiki/Sion,_Mumbai', 'About Sion', 600, 400);">Know More
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col l6 m6 s12">
        <ul id="recTable" class="collection with-header">
          <li class="collection-header indigo">
            <h5 class="white-text">Recommendations
              <a href="#" onclick="loadRecData()"><i id="addData" class="material-icons right">playlist_add</i></a>
              <a href="#" onclick="refRecData()"><i class="material-icons right">cached</i></a>
            </h5>
          </li>
          <div id="recData">
            <li class="collection-item">Vivah Fashion</li>
            <li class="collection-item">Vivah Fashion</li>
            <li class="collection-item">Vivah Fashion</li>
            <li class="collection-item">Vivah Fashion</li>
            <li class="collection-item">Vivah Fashion</li>
          </div>
        </ul>
      </div>
      <div class="col l6 m6 s12">
        <ul id="favTable" class="collection with-header">
          <li class="collection-header indigo">
            <h5 class="white-text">All Time Favourites
            </h5>
          </li>
          <li class="collection-item">Vivah Fashion</li>
          <li class="collection-item">Vivah Fashion</li>
          <li class="collection-item">Vivah Fashion</li>
          <li class="collection-item">Vivah Fashion</li>
          <li class="collection-item">Vivah Fashion</li>
        </ul>
      </div>
    </div>
  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/records.js"></script>
  <script type="text/javascript" src="js/preloader.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".button-collapse").sideNav();
    });
  </script>
</body>

</html>