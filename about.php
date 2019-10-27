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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KANJOOS.com</title>
  <style>
.lowrow{
  margin-top:-15px;
}
.lowcol{
  margin-top:-150px;
}
@media only screen and (max-width: 992px) {
#rowId{
    margin-top:0px;
    height:400px;
    overflow:scroll;
  }
  .lowcol{
  margin-top:0px;
}
}

</style>
</head>

<body onload="hidePreloader()" class="indigo lighten-5">
  <div id="preloader"></div>
  <nav class="blue">
    <div class="nav wrapper">
      <div class="container">
        <a href="#" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
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
          <h3 class="white-text name" style="font-size:30px;padding-bottom:30px;">Thanks,&nbsp;<strong><?php echo $_SESSION['username']; ?></strong></h3>
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
      <a href="./profile.php"><i class="material-icons indigo-text">face</i>Profile
      </a>
    </li>
    <div class="divider"></div>
    <li>
      <a href="index.php?logout='1'"><i class="material-icons indigo-text">exit_to_app</i>Logout
      </a>
    </li>
  </ul>




  <!--SideNav Finished-->

    <div class="content">
      <div id="rowId" class="row card-panel blue lighten-3">
        <div class="col s4 hoverable">
          <img class="promo responsive-img" src="./img/secure.svg" />
          <h4 class="flow-text">Necessity of Kanjoos</h4>
          <p>
            Tourists usually are predisposed to follow a certain schedule by travel agencies’ packages 
            when visiting a different regions and are quite restricted in their choices.
            <br>
            This web service asks the clients for the general area they want to visit through selection options, 
            and plans are adjusted accordingly.
          </p>
          <hr>
        </div>
        <div class="col s4 hoverable">
          <img class="promo responsive-img" src="./img/mobile-guy.png" />
          <h4 class="flow-text">Available for Everyone</h4>
          <p>
              We are living in an era where technology has become a vital part of our lives. 
              Everything that we do be it on a small or large scale is somehow connected to technology.
              Using smart phones has become a way of living, that is why Kanjoos is Available to Everyone with
              the rich and very responsive UI.
          </p>
          <hr>
        </div>
        <div class="col s4 hoverable">
          <img class="promo responsive-img" src="./img/social.svg" />
          <h4 class="flow-text">Distinctive Attributes</h4>
          <p> 
            The plan drawn can be adjusted and/or 
            modified according to the current conditions as the client is going through this tour.
            This web service encourages people to travel outdoors and 
            provides support throughout the whole travel experience.
          </p>
          <hr>
        </div>
      </div>
      <div id="rowId" class="row card-panel lowrow blue lighten-2">
        <div class="col s4 hoverable lowcol">
          <img class="promo responsive-img" src="./img/stats.png" />
          <h4 class="flow-text">Productive Growth</h4>
          <p>
            ‘Productivity’ is nothing but the reduction in wastage of resources.
            productivity implies development of an attitude of mind and constant urge to find better, cheaper, easier,
            quicker and safer means of doing a job, manufacturing a product and providing service.
          </p>
          <hr>
        </div>
        <div class="col s4 hoverable">
          <img class="promo responsive-img" src="./img/Handmade.png" />
          <h4 class="flow-text">Specially Crafted</h4>
          <p>
            In the highly competitive world where user want some personal touch which also influences the Customer relationship,
            Kanjoos is in the top of the game And for that reason this research was done, 
            and also for the deep study about what people look for in public web service.
          </p>
          <hr>
        </div>
        <div class="col s4 hoverable lowcol">
          <img class="promo responsive-img" src="./img/organized.svg" />
          <h4 class="flow-text">Clean and Easy UI</h4>
          <p> 
            User interface (UI) design is the process of making interfaces in 
            software or computerized devices with a focus on looks or style.
            Kanjoos aim to create designs users will find easy to use and pleasurable. UI design typically refers to graphical 
            user interfaces each of which element in precisely planned and arranged in user friendly manner
          </p>
          <hr>
        </div>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".button-collapse").sideNav();
      });
    </script>

</body>
</html>