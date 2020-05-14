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
  <title>Accounting Demo</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png">
  <!-- Plugins css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/material-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jqvmap.min.css" />
  <link id="mode-option" rel="stylesheet" type="text/css" href="assets/css/style.css" />
  
  <link rel="stylesheet" href="css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  <link href="css/bootstrap4-toggle.min.css" rel="stylesheet">
</head>

<body>
<?php
    require('db.php');
    $sql = 'SELECT * FROM `profile`';
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      while($row = mysqli_fetch_array($result)){
          $id = $row['id'];
          $name = $row['name'];
          $position = $row['position'];
          $company = $row['company'];
          $location = $row['location'];
          $profile = $row['profile'];
          $phone = $row['phone'];
          $email = $row['email'];
          $url = $row['url'];
          $social = $row['social'];
          $created_on = $row['created_on'];
      
          $return_arr[] = array("id" => $id,
                          "name" => $name,
                          "position" => $position,
                          "company" => $company,
                          "location" => $location,
                          "profile" => $profile,
                          'phone' => $phone,
                          'email' => $email,
                          'url' => $url,
                          'social' => $social,
                          'created_on' => $created_on);
      }
  } 
  
  $monthsql = 'SELECT * FROM `profile`
  WHERE MONTH(created_on) = MONTH(CURRENT_DATE())
  AND YEAR(created_on) = YEAR(CURRENT_DATE())';
  $monthresult = mysqli_query($con,$monthsql);
  $monthnum = mysqli_num_rows($monthresult);
  if ($monthnum > 0) {
    while($row = mysqli_fetch_array($monthresult)){
        $id = $row['id'];
        $name = $row['name'];
        $position = $row['position'];
        $company = $row['company'];
        $location = $row['location'];
        $profile = $row['profile'];
        $phone = $row['phone'];
        $email = $row['email'];
        $url = $row['url'];
        $social = $row['social'];
        $created_on = $row['created_on'];
    
        $monthreturn_arr[] = array("id" => $id,
                        "name" => $name,
                        "position" => $position,
                        "company" => $company,
                        "location" => $location,
                        "profile" => $profile,
                        'phone' => $phone,
                        'email' => $email,
                        'url' => $url,
                        'social' => $social,
                        'created_on' => $created_on);
    }
}
?>
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
                    <h4><?php echo $_SESSION['username'] ?></h4>
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
                  <li class="tb-dropdown-cta"><a href="logout.php">Sign Out</a></li>
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
  <div class="tb-sidebarheader tb-white-bg">
    <div class="tb-sidebarheader-in" data-scrollbar>
      <div class="tb-sidebar-nav">
        <div class="tb-sidebar-nav-title">
          <span class="tb-sidebar-nav-title-text">DASHBOARD</span>
          <span class="tb-sidebar-nav-title-dotline"><i class="material-icons-outlined">more_horiz</i></span>
        </div>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="#">
              <span class="tb-sidebar-link-title">
                <span class="tb-sidebar-link-icon"><i class="material-icons-outlined">home</i></span>
                <span class="tb-sidebar-link-text">Home</span>
              </span>
            </a>
          </li>
        </ul>
        <ul class="tb-sidebar-nav-list tb-mp0">
          <li>
            <a href="profile.php">
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
  <div class="tb-content tb-style1">
    <div class="tb-height-b30 tb-height-lg-b30"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="tb-sectin-heading tb-style1">
            <div class="tb-sectin-heading-left">
              <h2 class="tb-section-title">Good evening, <?php echo $_SESSION['username'] ?>.</h2>
              <div class="tb-section-sub-title">
                Here’s what’s happening with your business today.
              </div>
            </div>
          </div>
          <div class="tb-height-b30 tb-height-lg-b30"></div>
          <hr />
        </div>
      </div>
      <div class="tb-height-b30 tb-height-lg-b30"></div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="tb-card tb-style1">
            <div class="tb-card-body">
              <div class="tb-iconbox tb-style3">
                <div class="tb-iconbox-text">
                  <h3 class="tb-iconbox-heading"><?php echo $num; ?></h3>
                  <div class="tb-iconbox-sub-heading">Total Leads - Lifetime</div>
                  <div class="tb-icon tb-success-color">
                    <i class="material-icons-outlined">trending_up</i>
                  </div>
                  <div class="tb-progress-lavel tb-style1 tb-success-color">
                    <i class="material-icons-outlined">arrow_drop_up</i>5.5%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="tb-card tb-style1">
            <div class="tb-card-body">
              <div class="tb-iconbox tb-style3">
                <div class="tb-iconbox-text">
                  <h3 class="tb-iconbox-heading"><?php echo $monthnum; ?></h3>
                  <div class="tb-iconbox-sub-heading">Leads for this month</div>
                  <div class="tb-icon tb-danger-color">
                    <i class="material-icons-outlined">trending_down</i>
                  </div>
                  <div class="tb-progress-lavel tb-style1 tb-danger-color">
                    <i class="material-icons-outlined">arrow_drop_up</i>4.5%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="tb-card tb-style1">
            <div class="tb-card-body">
              <div class="tb-iconbox tb-style3">
                <div class="tb-iconbox-text">
                  <h3 class="tb-iconbox-heading">1000</h3>
                  <div class="tb-iconbox-sub-heading">Searches Left Fot Today</div>
                  <div class="tb-icon tb-success-color">
                    <i class="material-icons-outlined">trending_up</i>
                  </div>
                  <div class="tb-progress-lavel tb-style1 tb-success-color">
                    <i class="material-icons-outlined">arrow_drop_up</i>7.5%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .col -->
      </div>
      <div class="tb-height-b30 tb-height-lg-b30"></div>
      <div class="row">
        <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">Report</h2>
              </div>
              <div class="tb-card-heading-right">
                <!-- <div class="tb-card-heading-right">
                  <div class="tb-custom-select-wrap tb-style1">
                    <select name="#" class="tb-custom-select">
                      <option value="classic-fit1">Manage</option>
                      <option value="classic-fit2">CEO</option>
                      <option value="classic-fit3">Director</option>
                    </select>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="tb-card-body">
              <div class="tb-height-b15 tb-height-lg-b15"></div>
              <div class="tb-padd-lr-30">
                <div class="tb-chart-heading tb-style4">
                  <div class="tb-chart-heading-left">
                    <div class="tb-chart-heading-in">
                      <div class="tb-chart-heading-title">
                        <span>Searches - Green</span>
                        <span>Leads - Blue</span>
                      </div>
                      <div class="tb-chart-heading-number">
                        <span>0</span>
                        <span><?php echo $monthnum; ?></span>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="tb-chart-heading-right">
                    <a href="#" class="tb-btn tb-style3 tb-color1">Reconcile All Items</a>
                  </div> -->
                </div>
              </div>
              <div class="tb-chart-wrap tb-style11">
                <div class="tb-chart-in">
                  <canvas id="tb-chart5-type4" height="96"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .col -->
        <div class="col-lg-12">
          <div class="tb-card tb-style1">
            <div class="tb-card-heading">
              <div class="tb-card-heading-left">
                <h2 class="tb-card-title">All-time Entries</h2>
              </div>
              <!-- <div class="tb-card-heading-right">
                <a href="#" class="tb-btn tb-style1 tb-small">View All</a>
              </div> -->
            </div>
            <div class="tb-card-body">
              <div class="table-responsive" style="padding: 40px 10px 0px 10px">
                <div class="tb-table tb-style1 tb-type1">
                  <table id="example" class="display nowrap" style="width:100%">'
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Company</th>
                              <th>Location</th>
                              <th>Profile</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Url</th>
                              <th>Social</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($return_arr as $item): ?>
                          <tr>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['position'] ?></td>
                            <td><?php echo $item['company'] ?></td>
                            <td><?php echo $item['location'] ?></td>
                            <td><a href="<?php echo $item['profile'] ?>"><?php echo $item['profile'] ?></a></td>
                            <td><?php echo $item['phone'] ?></td>
                            <td><?php echo $item['email'] ?></td>
                            <td><?php echo $item['url'] ?></td>
                            <td><?php echo $item['social'] ?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                  </table>

                </div><!-- .tb-table -->
              </div>
            </div>
          </div>
        </div><!-- .col -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container-fluid -->
    <div class="tb-height-b60 tb-height-lg-b60"></div>
    <div class="tb-footer tb-style1">
      <div class="container-fluid">
        <div class="tb-footer-content">
          <div class="tb-copyride">
            Made with coffee & love by <a href="#">ThemeBubble</a> &
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

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.flash.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
  <script src="js/bootstrap4-toggle.min.js"></script>
  <script>
    $('#example').DataTable( {
            bDestory: true,
            dom: 'Bfrtip',
            buttons: [
                'copy',
                {
                extend: 'csv',
                text : 'CSV',
                filename: function(){
                                var d = new Date();
                                var n = d.getTime();
                                return 'myfile' + n;
                            }
                        },
                'excel', 'pdf', 'print'
            ],
            pageLength: 10,
        } );
  </script>
  <script>
    var jsArray = JSON.parse('<?php echo json_encode($monthreturn_arr); ?>');
    // console.log(jsArray);
    <?php 
    for($i = 1; $i <=  date('t'); $i++)
      {
        // add the date to the dates array
        $fulldates[] = date('Y') . "-" . date('m') . "-" . str_pad($i, 2, '0', STR_PAD_LEFT);
        $dates[] = date('m') . "-" . str_pad($i, 2, '0', STR_PAD_LEFT);

      }
    for($i = 0; $i < count($fulldates) - 1; $i++) {
      $start_date = $fulldates[$i];
      $end_date = $fulldates[$i+1];
      $datesql = "SELECT * FROM `profile` WHERE created_on >= '$start_date' and created_on < '$end_date'";
      $dateresult = mysqli_query($con,$datesql);
      $datenum = mysqli_num_rows($dateresult);
      $counts[] = $datenum;
    }
    ?>
    var dateArray = JSON.parse('<?php echo json_encode($dates); ?>');
    console.log(dateArray);
    var countArray = JSON.parse('<?php echo json_encode($counts); ?>');
    console.log(countArray);
    // Type4
    var ctx5 = document.querySelector("#tb-chart5-type4");
    var myChart5 = new Chart(ctx5, {
      type: "line",
      data: {
        labels: dateArray,
        datasets: [{
            label: "Leads",
            data: countArray,
            backgroundColor: "rgba(0, 122, 255, 0.1)",
            borderColor: "#007aff",
            borderWidth: 3,
            pointBackgroundColor: "#fff",
            pointDotRadius: 10
          },
          {
            label: "Search",
            data: [],
            backgroundColor: "rgba(52, 199, 89, 0.1)",
            borderColor: "#34c759",
            borderWidth: 3,
            pointBackgroundColor: "#fff",
            pointDotRadius: 10
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: false,
        tooltips: lineChartToolTips,
        scales: {
          yAxes: [{
            position: "left",
            ticks: {
              fontSize: 14,
              fontColor: "rgba(0, 0, 0, 0.4)",
              padding: 15,
              autoSkip: false,
              maxTicksLimit: 6,
              beginAtZero: true,
              steps: 10,
              stepValue: 5,
              max: 2000
            },
            gridLines: {
              color: "rgba(0, 0, 0, 0.1)",
              zeroLineWidth: 0,
              zeroLineColor: "transparent",
              drawBorder: false,
              tickMarkLength: 0
            }
          }],
          xAxes: scalesXaxes
        },
        elements: {
          point: {
            radius: 0
          }
        }
      }
    });
  </script>
</body>
</html>
