<?php
session_start();
if(!isset($_SESSION["username"])){
  echo "<script>location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="theme_bubble" />
  <!-- Page Title -->
  <title>Profile</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png">
  <!-- Plugins css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jqvmap.min.css" />
  <link id="mode-option" rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
  <div class="tb-height-b60 tb-height-lg-b60"></div>
  <header class="tb-header tb-style1 tb-sticky-menu">
    <div class="tb-main-header">
      <div class="tb-main-header-in">
        <div class="tb-main-header-left">
          <a href="index.html" class="tb-logo-link tb-light-logo"><img src="assets/img/logo-light.svg" alt="logo-light" /></a>
          <a href="index.html" class="tb-logo-link tb-dark-logo"><img src="assets/img/logo-dark.svg" alt="logo-dark" /></a>
          <!-- For Site Title -->
          <!-- <span class="tb-site-title">
            <a href="index.html">Logo</a>
          </span> -->
        </div>
        <div class="tb-main-header-right">
          <div class="tb-nav-wrap tb-fade-up">
            <div class="tb-nav-toggle">
              <i class="material-icons-outlined">more_vert</i>
            </div>
            <nav class="tb-nav tb-desktop-nav">
            </nav>
            <!-- .tb-nav -->
          </div>
          <!-- .tb-nav-wrap -->
          <ul class="tb-ex-nav tb-style1 tb-flex tb-mp0">
            <li>
              <div class="tb-toggle-body tb-search-area tb-style1">
                <span class="tb-toggle-btn tb-ex-nav-btn tb-search-btn">
                  <i class="material-icons-outlined">search</i>
                </span>
                <div class="tb-dropdown tb-search-dropdown">
                  <form action="#" class="tb-search tb-style1">
                    <input type="text" placeholder="Search..." class="tb-search-input">
                    <div class="tb-toggle-cross">
                      <i class="material-icons-outlined">close</i>
                    </div>
                    <button class="tb-search-submit"><i class="material-icons-outlined">search</i></button>
                  </form>
                </div>
              </div>
            </li>
            <li>
              <div class="tb-toggle-body tb-message-area tb-style1">
                <span class="tb-toggle-btn tb-ex-nav-btn tb-message-btn">
                  <i class="material-icons-outlined">email</i>
                  <span class="tb-ex-nav-label">9</span>
                </span>
                <div class="tb-dropdown tb-notify-dropdown">
                  <h2 class="tb-nofify-title">
                    <span class="tb-nofify-title-left">Messages</span>
                    <span class="tb-nofify-title-right"><a href="#">Mark All as Read</a></span>
                  </h2>
                  <ul class="tb-nofify-list tb-style1 tb-mp0">
                    <li>
                      <a href="#">
                        <div class="tb-nofify-thumb">
                          <img src="assets/img/msg/msg1.png" alt="msg1">
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">
                            Bob Dylan
                            <span class="tb-online-status tb-live"></span>
                          </h3>
                          <div class="tb-msg">
                            Contrary to popular belief, Lorem Ipsum is...
                          </div>
                          <span class="tb-notify-time">12:23</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="active">
                        <div class="tb-nofify-thumb">
                          <img src="assets/img/msg/msg2.png" alt="">
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">
                            David Gilmour
                            <span class="tb-online-status"></span>
                          </h3>
                          <div class="tb-msg">
                            Contrary to popular belief, Lorem Ipsum is...
                          </div>
                          <span class="tb-notify-time">12:23</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-thumb">
                          <img src="assets/img/msg/msg3.png" alt="">
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">
                            Jeff Beck
                            <span class="tb-online-status tb-live"></span>
                          </h3>
                          <div class="tb-msg">
                            Contrary to popular belief, Lorem Ipsum is...
                          </div>
                          <span class="tb-notify-time">12:23</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-thumb">
                          <img src="assets/img/msg/msg4.png" alt="">
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">
                            Guthrie Govan
                            <span class="tb-online-status"></span>
                          </h3>
                          <div class="tb-msg">
                            Contrary to popular belief, Lorem Ipsum is...
                          </div>
                          <span class="tb-notify-time">12:23</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-thumb">
                          <img src="assets/img/msg/msg5.png" alt="">
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">
                            Eric Johnson
                            <span class="tb-online-status"></span>
                          </h3>
                          <div class="tb-msg">
                            Contrary to popular belief, Lorem Ipsum is...
                          </div>
                          <span class="tb-notify-time">12:23</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <a href="#" class="tb-btn tb-style2">SEE ALL <i class="material-icons-outlined">navigate_next</i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="tb-toggle-body tb-notice-area tb-style1">
                <span class="tb-toggle-btn tb-ex-nav-btn tb-notice-btn">
                  <i class="material-icons-outlined">notifications</i>
                  <span class="tb-ex-nav-label">3</span>
                </span>
                <div class="tb-dropdown tb-notify-dropdown">
                  <ul class="tb-nofify-list tb-style1 tb-mp0">
                    <li>
                      <a href="#" class="tb-nofify-list-in">
                        <div class="tb-nofify-icon tb-icon-color2">
                          <i class="material-icons-outlined">supervisor_account</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">Invite your friends to dashboard.</h3>
                          <span class="tb-notify-time">5 hour ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="tb-nofify-list-in">
                        <div class="tb-nofify-icon tb-icon-color4">
                          <i class="material-icons-outlined">calendar_today</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">3 Tasks pending this month.</h3>
                          <span class="tb-notify-time">6 hour ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="tb-nofify-list-in">
                        <div class="tb-nofify-icon tb-icon-color3">
                          <i class="material-icons-outlined">favorite_border</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">7 People loved your activity.</h3>
                          <span class="tb-notify-time">9 hour ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="tb-nofify-list-in">
                        <div class="tb-nofify-icon tb-icon-color2">
                          <i class="material-icons-outlined">chat_bubble_outline</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">John commented on activity.</h3>
                          <span class="tb-notify-time">1 day ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="tb-nofify-list-in">
                        <div class="tb-nofify-icon tb-icon-color1">
                          <img src="assets/img/msg/msg1.png" alt="msg1" />
                        </div>
                        <div class="tb-nofify-text">
                          <h3 class="tb-nofify-text-head">Click your picture or add an account.</h3>
                          <span class="tb-notify-time">2 days ago</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <a href="#" class="tb-btn tb-style2">SEE ALL <i class="material-icons-outlined">navigate_next</i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="tb-toggle-body tb-app-area tb-style1">
                <span class="tb-toggle-btn tb-ex-nav-btn tb-sidebar-btn">
                  <i class="material-icons-outlined">apps</i>
                </span>
                <div class="tb-dropdown tb-notify-dropdown">
                  <h2 class="tb-nofify-title">Quick Navigation</h2>
                  <ul class="tb-nofify-list tb-style2 tb-mp0">
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color1">
                          <i class="material-icons-outlined">bar_chart</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Chart</h3>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color2">
                          <i class="material-icons-outlined">bubble_chart</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Big Data</h3>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color3">
                          <i class="material-icons-outlined">folder_open</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Storage</h3>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color4">
                          <i class="material-icons-outlined">security</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Security</h3>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color3">
                          <i class="material-icons-outlined">layers</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Themes</h3>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="tb-nofify-icon tb-icon-color2">
                          <i class="material-icons-outlined">attach_file</i>
                        </div>
                        <div class="tb-nofify-text">
                          <h3>Upload</h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <hr>
                  <a href="#" class="tb-btn tb-style2">SEE ALL <i class="material-icons-outlined">navigate_next</i></a>
                </div>
              </div>
            </li>
            <li>
              <div class="tb-toggle-body tb-profile-nav tb-style1">
                <div class="tb-toggle-btn tb-profile-nav-btn">
                  <div class="tb-profile-nav-text">
                    <span>Welcome,</span>
                    <h4><?php echo $_SESSION['username']?></h4>
                  </div>
                  <div class="tb-profile-nav-img">
                    <img src="assets/img/profile-pic.png" alt="profile">
                  </div>
                </div>
                <ul class="tb-dropdown tb-style1">
                  <li>
                    <a href="#"><i class="material-icons-outlined">account_circle</i>My Profile</a>
                  </li>
                  <li>
                    <a href="#"><i class="material-icons-outlined">settings</i>Settings</a>
                  </li>
                  <li>
                    <a href="#"><i class="material-icons-outlined">videocam</i>Upload</a>
                  </li>
                  <li>
                    <a href="#"><i class="material-icons-outlined">help</i>Help</a>
                  </li>
                  <li class="tb-dropdown-cta"><a href="#">Sign Out</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header><!-- .tb-header -->
  <div class="tb-sidebarheader-toggle">
    <div class="tb-button-bar1"></div>
    <div class="tb-button-bar2"></div>
    <div class="tb-button-bar3"></div>
  </div><!-- .tb-sidebarheader-toggle -->
  <div class="tb-sidebarheader">
    <div class="tb-sidebarheader-in" data-scrollbar>
      <div class="tb-sidebar-nav">
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">DASHBOARD</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="index.php">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">home</i></span>
                <span class="tb-sidebar-link-text">Home</span>
              </span>
            </a>
          </li>
        </ul><!-- .tb-sidebar-nav-list -->
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="#">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">account_circle</i></span>
                <span class="tb-sidebar-link-text">Profile</span>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div><!-- .tb-sidebarheader -->
  <div class="tb-content tb-style1 tb-profile-content">
    <div class="tb-content tb-style3">
      <div class="tb-profile-sidebar">
        <div class="tb-profile-sidebar-cross">
          <i class="material-icons-outlined">close</i>
        </div>
        <div class="tb-profile-sidebar-btn">
          <i class="material-icons-outlined">chat_bubble_outline</i>
        </div>
        <div class="tb-profile-sidebar-body" data-scrollbar>
          <div class="tb-height-b20 tb-height-lg-b20"></div>
          <div class="tb-user-heading tb-style1">
            <h2 class="tb-user-title">YOUR PAGES</h2>
          </div>
          <ul class="tb-user-list tb-mp0">
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg1.png" alt="msg1">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Oscar Khan</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg2.png" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Lucy Walker</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg3.png" alt="">
                  <span class="tb-online-status"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Natalia Sanz</h3>
                </div>
              </a>
            </li>
          </ul>
          <div class="tb-height-b20 tb-height-lg-b20"></div>
          <div class="tb-user-heading tb-style1">
            <h2 class="tb-user-title">GROUPS</h2>
          </div>
          <ul class="tb-user-list tb-mp0">
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg4.png" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Rose King</h3>
                  <div class="tb-group-member">Sarah, Richard, Mar...</div>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg5.png" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Nia Matos</h3>
                  <div class="tb-group-member">Daniela, Anaiah, Tam...</div>
                </div>
              </a>
            </li>
          </ul>
          <div class="tb-height-b20 tb-height-lg-b20"></div>
          <div class="tb-user-heading tb-style1">
            <h2 class="tb-user-title">FRIENDS</h2>
          </div>
          <ul class="tb-user-list tb-mp0">
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/msg/msg6.png" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Taelynn Thorpe</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/01.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Arden Dean</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/02.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Rene Wells</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/03.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Iina Jutila</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/04.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Macie Naquin</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/05.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Ferdinand Karl</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/06.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Abriella Bond</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/07.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Aarav Lynn</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="tb-user tb-style1">
                <div class="tb-user-img">
                  <img src="assets/img/contact/08.jpg" alt="">
                  <span class="tb-online-status tb-live"></span>
                </div>
                <div class="tb-user-info">
                  <h3 class="tb-user-name">Jaxon Clarke</h3>
                </div>
              </a>
            </li>
          </ul>
          <div class="tb-height-b20 tb-height-lg-b20"></div>
        </div>
        <div class="tb-sidebar-footer">
          <form action="#" class="tb-search tb-style2">
            <input type="text" placeholder="Search" class="tb-search-input">
            <button type="submit"><i class="material-icons-outlined">search</i></button>
          </form>
          <ul class="tb-icon-group tb-style1 tb-mp0">
            <li>
              <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">group_add</i></a>
            </li>
            <li>
              <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">edit</i></a>
            </li>
            <li>
              <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">settings</i></a>
            </li>
          </ul>
        </div>
      </div><!-- .tb-profile-sidebar -->
      <div class="container-fluid">
        <div class="tb-height-b30 tb-height-lg-b30"></div>
        <div class="tb-profile-thumb tb-bg tb-dynamicbg" data-src="assets/img/profile/profile-thumb.jpg">
          <div class="tb-overlay tb-style1"></div>
          <div class="tb-profile-info">
            <div class="tb-profile-pic"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
            <div class="tb-profile-text">
              <h2 class="tb-profile-name">David Robertson</h2>
              <div class="tb-profile-email">@DaveLee</div>
            </div>
          </div>
        </div>
        <div class="tb-page-nav tb-style1">
          <ul class="tb-mp0">
            <li class="tb-active"><a href="#">Timeline</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Likes</a></li>
          </ul>
        </div>
        <div class="tb-height-b30 tb-height-lg-b30"></div>
        <div class="tb-newsfeed-row">
          <div class="tb-newsfeed-col-1">
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-heading">
                <div class="tb-card-heading-left">
                  <h2 class="tb-card-title">About</h2>
                </div>
                <div class="tb-card-heading-right">
                  <div class="tb-toggle-body tb-drop-toggle tb-style2">
                  <span class="tb-toggle-btn">
                    <i class="material-icons-outlined">more_vert</i>
                  </span>
                  <div class="tb-dropdown tb-notify-dropdown tb-drop-dropdown">
                    <ul class="tb-drop-dropdown-list tb-mp0">
                      <li><a href="#">Edit</a></li>
                      <li><a href="#">More Info</a></li>
                      <li><a href="#">Others</a></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <div class="tb-about-text">Multidisciplinary designer, front-end developer & growth enthusiast.</div>
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <ul class="tb-list tb-style1 tb-mp0">
                    <li><i class="material-icons">location_on</i>Lives in <a href="#">Paris, France</a></li>
                    <li><i class="material-icons-outlined">school</i>Went to <a href="#">St. Martin University</a></li>
                    <li><i class="material-icons-outlined">work_outline</i>Works at <a href="#">Weebfy</a></li>
                    <li><i class="material-icons-outlined">public</i><a href="#">www.weebfy.com</a></li>
                  </ul>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <ul class="tb-horizontal-list tb-style1 tb-mp0">
                    <li>
                      <div class="tb-list-title">Views</div>
                      <div class="tb-list-number">1.2M</div>
                    </li>
                    <li>
                      <div class="tb-list-title">Likes</div>
                      <div class="tb-list-number">14.8M</div>
                    </li>
                    <li>
                      <div class="tb-list-title">Followes</div>
                      <div class="tb-list-number">9.5M</div>
                    </li>
                  </ul>
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-heading">
                <div class="tb-card-heading-left">
                  <h2 class="tb-card-title">Photos</h2>
                </div>
                <div class="tb-card-heading-right">
                  <div class="tb-toggle-body tb-drop-toggle tb-style2">
                  <span class="tb-toggle-btn">
                    <i class="material-icons-outlined">more_vert</i>
                  </span>
                  <div class="tb-dropdown tb-notify-dropdown tb-drop-dropdown">
                    <ul class="tb-drop-dropdown-list tb-mp0">
                      <li><a href="#">Edit</a></li>
                      <li><a href="#">More Info</a></li>
                      <li><a href="#">Others</a></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <ul class="tb-image-gallery tb-style1 tb-mp0">
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo1.jpg" class="tb-zoom-effect-in" alt="photo1"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo2.jpg" class="tb-zoom-effect-in" alt="photo2"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo3.jpg" class="tb-zoom-effect-in" alt="photo3"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo4.jpg" class="tb-zoom-effect-in" alt="photo4"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo5.jpg" class="tb-zoom-effect-in" alt="photo5"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo6.jpg" class="tb-zoom-effect-in" alt="photo6"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo7.jpg" class="tb-zoom-effect-in" alt="photo7"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo8.jpg" class="tb-zoom-effect-in" alt="photo8"></a></li>
                    <li><a href="#" class="tb-zoom-effect"><img src="assets/img/profile/photo9.jpg" class="tb-zoom-effect-in" alt="photo9"></a></li>
                  </ul>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
                <hr>
                <a href="#" class="tb-btn tb-style2">SEE ALL FRIENDS<i class="material-icons-outlined">navigate_next</i></a>
              </div>
            </div>
          </div><!-- .col -->
          <div class="tb-newsfeed-col-2">
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-heading">
                <div class="tb-card-heading-left">
                  <h2 class="tb-card-title">Create Post</h2>
                </div>
              </div>
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
                    <div class="tb-custom-input-area">
                      <div class="tb-custom-input-field" contentEditable=true data-placeholder="What’s on your mind, David?"></div>
                    </div>
                  </div>
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                  <div class="tb-post-option">
                    <ul class="tb-icon-group tb-style1 tb-mp0">
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">photo_size_select_actual</i></a>
                      </li>
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">videocam</i></a>
                      </li>
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">note_add</i></a>
                      </li>
                      <li>
                        <a href="#" class="tb-icon-group-icon"><i class="material-icons-outlined">sentiment_satisfied_alt</i></a>
                      </li>
                      <li>
                        <div class="tb-toggle-body tb-drop-style1 tb-left-dropdown">
                          <span class="tb-toggle-btn tb-style1 tb-icon-group-icon">
                            <i class="material-icons-outlined">more_vert</i>
                          </span>
                          <div class="tb-dropdown">
                            <ul class="tb-drop-dropdown-list tb-mp0">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">More Info</a></li>
                              <li><a href="#">Others</a></li>
                            </ul>
                          </div>
                        </div><!-- .tb-toggle-body -->
                      </li>
                    </ul>
                    <div class="tb-share-btn">
                      <a href="#" class="tb-btn tb-style1 tb-medium">Share</a>
                    </div>
                  </div>
                  <div class="tb-height-b15 tb-height-lg-b15"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Bob Dylan</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Nov 21, 2020</a></li>
                        <li><a href="#">Paris</a></li>
                        <li><a href="#"><i class="material-icons-outlined">people</i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style1">
                    <div class="tb-post-text">“I think of a hero as someone who understands the degree of responsibility that comes with his freedom.”</div>
                    <div class="tb-height-b10 tb-height-lg-b10"></div>
                    <div class="tb-profile-post-meta">
                      <div class="tb-post-view-wrap">
                        <div class="tb-post-view-imoges">
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo1.png" alt=""></a>
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo2.png" alt=""></a>
                        </div>
                        <div class="tb-post-view">
                          <a href="#">Dan Beck</a>, 
                          <a href="#">David Mathews</a> 
                          <span>and</span> 
                          <a href="#">1 other</a>
                        </div>
                      </div>
                      <div class="tb-post-comments"><a href="#">9 Comments</a></div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">thumb_up_alt</i> Like</a></li>
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Comment</a></li>
                    <li><a href="#"><i class="material-icons-outlined">open_in_new</i> Share</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Bob Dylan</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Nov 21, 2020</a></li>
                        <li><a href="#">Paris</a></li>
                        <li><a href="#"><i class="material-icons-outlined">people</i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style2">
                    <div class="tb-post-text">The day that I found out the Met Gala theme was “camp”, that same day we called marty, the King of Camp! We met up in Miami right after the holidays last year and saw the sketches! I learned so much about couture from this genius man, it was beyond couture, it was art! #friends #bff</div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <ul class="tb-image-gallery tb-style2 tb-mp0">
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height1 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo10.jpg"></div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo11.jpg"></div>
                        </a>
                        <div class="tb-height-b10 tb-height-lg-b10"></div>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo12.jpg"></div>
                        </a>
                      </li>
                    </ul>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-profile-post-meta">
                      <div class="tb-post-view-wrap">
                        <div class="tb-post-view-imoges">
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo1.png" alt=""></a>
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo2.png" alt=""></a>
                        </div>
                        <div class="tb-post-view">
                          <a href="#">Dan Beck</a>, 
                          <a href="#">David Mathews</a> 
                          <span>and</span> 
                          <a href="#">1 other</a>
                        </div>
                      </div>
                      <div class="tb-post-comments"><a href="#">9 Comments</a></div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">thumb_up_alt</i> Like</a></li>
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Comment</a></li>
                    <li><a href="#"><i class="material-icons-outlined">open_in_new</i> Share</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Bob Dylan</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Nov 21, 2020</a></li>
                        <li><a href="#">Paris</a></li>
                        <li><a href="#"><i class="material-icons-outlined">people</i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style2">
                    <div class="tb-post-text">The day that I found out the Met Gala theme was “camp”, that same day we called marty, the King of Camp! We met up in Miami right after the holidays last year and saw the sketches! I learned so much about couture from this genius man, it was beyond couture, it was art! #friends #bff</div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <ul class="tb-image-gallery tb-style2 tb-mp0">
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo15.jpg"></div>
                        </a>
                        <div class="tb-height-b10 tb-height-lg-b10"></div>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo16.jpg"></div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo17.jpg"></div>
                        </a>
                        <div class="tb-height-b10 tb-height-lg-b10"></div>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height2 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo18.jpg"></div>
                        </a>
                      </li>
                    </ul>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-profile-post-meta">
                      <div class="tb-post-view-wrap">
                        <div class="tb-post-view-imoges">
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo1.png" alt=""></a>
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo2.png" alt=""></a>
                        </div>
                        <div class="tb-post-view">
                          <a href="#">Dan Beck</a>, 
                          <a href="#">David Mathews</a> 
                          <span>and</span> 
                          <a href="#">1 other</a>
                        </div>
                      </div>
                      <div class="tb-post-comments"><a href="#">9 Comments</a></div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">thumb_up_alt</i> Like</a></li>
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Comment</a></li>
                    <li><a href="#"><i class="material-icons-outlined">open_in_new</i> Share</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
            <div class="tb-height-b30 tb-height-lg-b30"></div>
            <div class="tb-card tb-style1 tb-height-auto">
              <div class="tb-card-body">
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b20 tb-height-lg-b20"></div>
                  <div class="tb-user tb-style3">
                    <div class="tb-user-img"><img src="assets/img/profile/profile-pic.jpg" alt=""></div>
                    <div class="tb-user-info">
                      <h3 class="tb-user-name">Bob Dylan</h3>
                      <ul class="tb-post-label tb-style1 tb-mp0"><!-- • -->
                        <li><a href="#">Nov 21, 2020</a></li>
                        <li><a href="#">Paris</a></li>
                        <li><a href="#"><i class="material-icons-outlined">people</i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <div class="tb-post tb-style2">
                    <div class="tb-post-text">The day that I found out the Met Gala theme was “camp”, that same day we called marty, the King of Camp! We met up in Miami right after the holidays last year and saw the sketches! I learned so much about couture from this genius man, it was beyond couture, it was art! #friends #bff</div>
                    <div class="tb-height-b15 tb-height-lg-b15"></div>
                    <ul class="tb-image-gallery tb-style2 tb-mp0">
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height1 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo13.jpg"></div>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="tb-zoom-effect">
                          <div class="tb-gallery-img tb-gallery-img-height1 tb-zoom-effect-in tb-bg tb-dynamicbg" data-src="assets/img/profile/photo14.jpg"></div>
                        </a>
                      </li>
                    </ul>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                    <div class="tb-profile-post-meta">
                      <div class="tb-post-view-wrap">
                        <div class="tb-post-view-imoges">
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo1.png" alt=""></a>
                          <a href="#" class="tb-post-imog"><img src="assets/img/imo2.png" alt=""></a>
                        </div>
                        <div class="tb-post-view">
                          <a href="#">Dan Beck</a>, 
                          <a href="#">David Mathews</a> 
                          <span>and</span> 
                          <a href="#">1 other</a>
                        </div>
                      </div>
                      <div class="tb-post-comments"><a href="#">9 Comments</a></div>
                    </div>
                    <div class="tb-height-b20 tb-height-lg-b20"></div>
                  </div>
                </div>
                <hr>
                <div class="tb-padd-lr-30">
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                  <ul class="tb-horizontal-list tb-style2 tb-mp0">
                    <li><a href="#"><i class="material-icons-outlined">thumb_up_alt</i> Like</a></li>
                    <li><a href="#"><i class="material-icons-outlined">mode_comment</i> Comment</a></li>
                    <li><a href="#"><i class="material-icons-outlined">open_in_new</i> Share</a></li>
                  </ul>
                  <div class="tb-height-b10 tb-height-lg-b10"></div>
                </div>
              </div>
            </div>
          </div><!-- .col -->
        </div>
      </div>
      <div class="tb-height-b60 tb-height-lg-b60"></div>
      <div class="tb-footer tb-style1">
        <div class="tb-footer-content container-fluid">
          <div class="tb-copyride">
            Made with coffee &amp; love by <a href="#">ThemeBubble</a> &amp;
            <a href="#">Weebfy</a> ©All rights reserved.
          </div>
          <ul class="tb-footer-nav tb-mp0 tb-flex">
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
    </div>
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

