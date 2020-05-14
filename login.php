<?php
	session_start();
	require('db.php');

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
		$_SESSION['username'] = $username;
			// Redirect user to index.php
			echo "<script>location='index.php'</script>";
         } else {
			echo "<script>location='login.php'</script>";
		 }
		 echo $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta charset="utf-8">
<title>Login</title>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="theme_bubble" />
  <!-- Page Title -->
  <title>UI Kits- Alert</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png">
  <!-- Plugins css -->

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jqvmap.min.css" />
  <link id="mode-option" rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body class="tb-white-bg">
  <div class="tb-login-wrap tb-style1 tb-bg tb-dynamicbg" data-src="assets/img/signup/03.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form action="" class="tb-form tb-style2 tb-border"  method="post" name="login">
            <div class="tb-form-logo">
              <img src="assets/img/signup/signup-logo.png" alt="">
            </div>
            <div class="tb-height-b25 tb-height-lg-b25"></div>
            <h2 class="tb-form-title">Sign in to continue</h2>
            <div class="tb-form-subtitle">Don’t have an account? <a href="registration.php" class="tb-form-btn tb-style2">Sign up</a></div>
            <div class="tb-height-b25 tb-height-lg-b25"></div>
            <ul class="tb-social-area tb-style1 tb-mp0">
              <li><a href="#" class="tb-form-btn tb-style1 tb-colo2"><i class="fab fa-facebook-f"></i><span>Sign up with Facebook</span></a></li>
              <li><a href="#" class="tb-form-btn tb-style1 tb-colo3"><i class="fab fa-google-plus-g"></i><span>Sign up with Gmail</span></a></li>
            </ul>
            <div class="tb-height-b15 tb-height-lg-b15"></div>
            <div class="tb-form-separator">Or</div>
            <div class="tb-height-b15 tb-height-lg-b15"></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="tb-form-field">
                  <input type="text" name="username" placeholder="Email" required />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="tb-form-field">
                  <input type="password" name="password" placeholder="Password" required/>
                </div>
			  </div>
              <div class="col-lg-12">
                <div class="tb-height-b5 tb-height-lg-b5"></div>
                <div class="tb-form-field tb-forget-pass-wrap">
                  <div class="tb-checkbox-wrap tb-style1">
                    <span class="tb-checkbox tb-style3 tb-color2">
                      <input type="checkbox">
                      <span class="tb-checkbox-icon"><i class="material-icons">done</i></span>
                    </span>
                    <div class="tb-checkbox-text">Remember me</div>
                  </div>
                  <div class="tb-forget-pass-btn">
                    <a href="#" class="tb-form-btn tb-style2 tb-type1">Forgot password?</a>
                  </div>
                </div>
                <div class="tb-height-b20 tb-height-lg-b20"></div>
				<!-- <a href="#" class="tb-form-btn tb-style1 tb-color1"><span>Sign In</span></a> -->
				<input class="tb-form-btn tb-style1 tb-color1" name="submit" type="submit" value="Sign In" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- .container -->
  </div>

  <!-- Start Theme Options -->
  <div class="tb-theme-options tb-fade-tabs tb-tabs">
    <ul class="tb-theme-options-switch tb-mp0 tb-tab-links">
      <li>
        <a href="#set1">
          <div class="tb-theme-options-switch-btn tb-theme-options-toggle-switch-btn">
            <i class="material-icons-outlined">layers</i>
            <span class="tb-theme-options-switch-tooltip"><span>Demos</span></span>
          </div>
        </a>
      </li>
      <li class="tb-active">
        <a href="#set2">
          <div class="tb-theme-options-switch-btn tb-theme-options-toggle-switch-btn">
            <i class="material-icons-outlined">settings</i>
            <span class="tb-theme-options-switch-tooltip"><span>Settings</span></span>
          </div>
        </a>
      </li>
      <li>
        <a href="documentation.html" class="tb-theme-options-switch-btn tb-work-link">
          <i class="material-icons-outlined">contact_support</i>
          <span class="tb-theme-options-switch-tooltip"><span>Documentation</span></span>
        </a>
      </li>
      <li>
        <a href="#" class="tb-theme-options-switch-btn tb-work-link">
          <i class="material-icons-outlined">shopping_cart</i>
          <span class="tb-theme-options-switch-tooltip"><span>Buy</span></span>
        </a>
      </li>
    </ul>
    <div class="tb-theme-options-body tb-tab-content">
      <div class="tb-theme-options-demos tb-tab" data-scrollbar id="set1">
        <h2 class="tb-theme-options-settings-heading">Demos</h2>
        <div class="tb-mp0 tb-demo-list">
          <a href="analytics.html">
            <img src="assets/img/demos/light1.jpg" alt="analytics">
            <span>Analytics</span>
          </a>
          <a href="HR.html">
            <img src="assets/img/demos/light2.jpg" alt="HR">
            <span>HR</span>
          </a>
          <a href="crm.html">
            <img src="assets/img/demos/light3.jpg" alt="crm">
            <span>CRM</span>
          </a>
          <a href="crypto.html">
            <img src="assets/img/demos/light4.jpg" alt="crypto">
            <span>Crypto</span>
          </a>
          <a href="accounting.html">
            <img src="assets/img/demos/light5.jpg" alt="accounting">
            <span>Accounting</span>
          </a>
          <a href="project-management.html">
            <img src="assets/img/demos/light6.jpg" alt="project-management">
            <span>Project Management</span>
          </a>
          <a href="profile.html">
            <img src="assets/img/demos/light7.jpg" alt="profile">
            <span>Profile</span>
          </a>
          <a href="newsfeed.html">
            <img src="assets/img/demos/light8.jpg" alt="newsfeed">
            <span>Newsfeed</span>
          </a>
          <a href="roadmap.html">
            <img src="assets/img/demos/light9.jpg" alt="roadmap">
            <span>Roadmap</span>
          </a>
          <a href="email.html">
            <img src="assets/img/demos/light10.jpg" alt="email">
            <span>Email</span>
          </a>
          <a href="calendar.html">
            <img src="assets/img/demos/light11.jpg" alt="calendar">
            <span>Calendar</span>
          </a>
          <a href="team-collaboration.html">
            <img src="assets/img/demos/light12.jpg" alt="team-collaboration">
            <span>Team Collaboration</span>
          </a>
          <a href="messenger.html">
            <img src="assets/img/demos/light13.jpg" alt="messenger">
            <span>Messenger</span>
          </a>
          <a href="live-chat.html">
            <img src="assets/img/demos/light14.jpg" alt="live-chat">
            <span>Live Chat</span>
          </a>
          <a href="contact.html">
            <img src="assets/img/demos/light15.jpg" alt="contact">
            <span>Contact</span>
          </a>
          <a href="documentation.html">
            <img src="assets/img/demos/light16.jpg" alt="documentation">
            <span>Documentation</span>
          </a>
          <div class="tb-height-b50 tb-height-lg-b50"></div>
        </div>
      </div>
      <div class="tb-theme-options-settings tb-tab tb-active" id="set2">
        <h2 class="tb-theme-options-settings-heading">Settings</h2>
        <div class="tb-theme-options-ui">
          <div class="tb-height-b20 tb-height-lg-b20"></div>
          <h3 class="tb-theme-options-settings-subheading">UI STYLE</h3>
          <div class="tb-height-b10 tb-height-lg-b10"></div>
          <ul class="tb-color-switcher tb-mp0">
            <li class="tb-color-switch active-mode" data-color-mode="assets/css/style.css" data-chartjs-color="assets/js/chartjs.light.js">
              <span class="tb-color-check"></span> Light Mode
            </li>
            <li class="tb-color-switch" data-color-mode="assets/css/classic-style.css" data-chartjs-color="assets/js/chartjs.classic.js">
              <span class="tb-color-check"></span> Classic Mode
            </li>
            <li class="tb-color-switch" data-color-mode="assets/css/dark-style.css" data-chartjs-color="assets/js/chartjs.dark.js">
              <span class="tb-color-check"></span> Dark Mode
            </li>
            <li class="tb-color-switch" data-color-mode="assets/css/black-style.css" data-chartjs-color="assets/js/chartjs.black.js">
              <span class="tb-color-check"></span> Black Mode
            </li>
          </ul>
          <div class="tb-switch-seperator"></div>
          <div class="tb-height-b20 tb-height-lg-b20"></div>
          <h3 class="tb-theme-options-settings-subheading">Icon Switcher</h3>
          <div class="tb-height-b10 tb-height-lg-b10"></div>
          <ul class="tb-icon-switch-wrap tb-mp0">
            <li class="tb-icon-switch active-mode">
              <span class="tb-color-check"></span> Line Icons
            </li>
            <li class="tb-icon-switch">
              <span class="tb-color-check"></span> Solid Icons
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Theme Options -->
  
  <!-- Scripts -->
  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/chartjs.light.js"></script>
  <script src="assets/js/smooth-scrollbar.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

