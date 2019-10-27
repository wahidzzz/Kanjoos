<?php include('server.php') ?>
<?php
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
    <style>
    .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: left;
        }
@media only screen and (max-width: 992px) {
#rowId{
    margin-top:0px;
    overflow:scroll;
  }
}
    </style>
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
                <h3 class="white-text name" style="font-size:30px;padding-bottom:30px;"><strong><?php echo $_SESSION['username']; ?></strong>'s Profile</h3>
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
            <div class="col s12 m4 l6">
                <div class="card-panel">
                    <div class="row">
                        <form method="post" action="profile.php">
				           <?php include('errors.php'); ?>
				           <div class="col s6 input-group">
					          <label>Username</label>
					          <input type="text" name="username" placeholder="New username"  required>
                           </div>
                           <div class="col s6 input-group">
                               <label>Email</label>
					           <input type="text" name="email" placeholder="Your Current Email" required>
                           </div>
                           <div class="col s12 input-group">
					          <label>Password</label>
					          <input type="password" name="password_1" placeholder="New password" required>
				          </div>
				          <div class="col s12 input-group">
					          <label>Confirm password</label>
					          <input type="password" name="password_2" placeholder="Confirm" required >
				          </div>
                          <div class="col s6 input-group">
					          <button type="submit" class="btn indigo" name="update_user">Update</button>
				          </div>
				          <div class="col s6 input-group">
                              <button type="reset" class="btn pink" name="update_user" value="Reset">Cancel</button>
				          </div>  
                      </form>
                   </div>
		        </div>
	        </div>
            <div class="col s12 m4 l6">
                <div class="card-panel">
                   <div class="row">
                      <h3 class="flow-text">
                         Profile Update Instructions
                      </h3>
                      <ul>
                        <li>You Can change your username to something or else enter you old Username</li><br>
                        <li>Account Email is not changable as it Ensure uniqueness of each user, Will be available in Future Update</li><br>
                        <li>You can enter new Password or use old one, Please Remember this password for login purpose.</li>
                        <li>Password recovery is not available in this version, user is advised to remember,save or write every password enterd</li>
                      </ul>
                   </div>
                </div>
            </div>
        </div>
        <div id="rowId" style="padding-bottom:0px;" class="row card-panel lowrow blue lighten-2">
        <div class="col s4 hoverable" style="margin-top:-50px;">
          <img class="promo responsive-img" src="./img/link-girl.svg" />
          <br>
          <h5 class="center blue-darker-2-text container">We Understand you are busy</h5>
          <br>
        </div>
        <div class="col s4 hoverable lowcol">
          <img class="promo responsive-img" src="./img/link-guy.svg" />
          <br>
          <h5 class="center blue-darker-2-text container">That is the reason we do this</h5>
          <br>
        </div>
        <div class="col s4 hoverable lowcol">
          <img class="promo responsive-img" src="./img/mobile-girl.svg" />
          <br>
          <h5 class="center blue-darker-2-text container">We want you to live easy life</h5>
          <br>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/preloader.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
                 $(".button-collapse").sideNav();
        });
    </script>
</body>

</html>