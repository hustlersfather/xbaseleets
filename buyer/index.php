<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="seller/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <style>

  </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed" style="transform: translateX(-100%);">
      <ul class="custom-scrollbar ps ps--active-x ps--active-y">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light waves-effect waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>
        
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">

            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-tachometer-alt"></i>Dashboards<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../dashboards/v-1.html" class="waves-effect">Version 1</a>
                  </li>
                  <li>
                    <a href="../dashboards/v-2.html" class="waves-effect">Version 2</a>
                  </li>
                  <li>
                    <a href="../dashboards/v-3.html" class="waves-effect">Version 3</a>
                  </li>
                  <li>
                    <a href="../dashboards/v-4.html" class="waves-effect">Version 4</a>
                  </li>
                  <li>
                    <a href="../dashboards/v-5.html" class="waves-effect">Version 5</a>
                  </li>
                  <li>
                    <a href="../dashboards/v-6.html" class="waves-effect">Version 6</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-image"></i>Pages<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../pages/login.html" class="waves-effect">Login</a>
                  </li>
                  <li>
                    <a href="../pages/register.html" class="waves-effect">Register</a>
                  </li>
                  <li>
                    <a href="../pages/pricing.html" class="waves-effect">Pricing</a>
                  </li>
                  <li>
                    <a href="../pages/about.html" class="waves-effect">About us</a>
                  </li>
                  <li>
                    <a href="../pages/single.html" class="waves-effect">Single post</a>
                  </li>
                  <li>
                    <a href="../pages/post.html" class="waves-effect">Post listing</a>
                  </li>
                  <li>
                    <a href="../pages/landing.html" class="waves-effect">Landing page</a>
                  </li>
                  <li>
                    <a href="../pages/customers.html" class="waves-effect">Customers</a>
                  </li>
                  <li>
                    <a href="../pages/invoice.html" class="waves-effect">Invoice</a>
                  </li>
                  <li>
                    <a href="../pages/page-creator.html" class="waves-effect">Page Creator</a>
                  </li>
                  <li>
                    <a href="../pages/support.html" class="waves-effect">Support</a>
                  </li>
                  <li>
                    <a href="../pages/chat.html" class="waves-effect">Chat</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-user"></i>Profile<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../profile/basic-1.html" class="waves-effect">Basic 1</a>
                  </li>
                  <li>
                    <a href="../profile/basic-2.html" class="waves-effect">Basic 2</a>
                  </li>
                  <li>
                    <a href="../profile/extended.html" class="waves-effect">Extended</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fab fa-css3"></i>CSS<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../css/grid.html" class="waves-effect">Grid system</a>
                  </li>
                  <li>
                    <a href="../css/media.html" class="waves-effect">Media object</a>
                  </li>
                  <li>
                    <a href="../css/utilities.html" class="waves-effect">Utilities / helpers</a>
                  </li>
                  <li>
                    <a href="../css/code.html" class="waves-effect">Code</a>
                  </li>
                  <li>
                    <a href="../css/icons.html" class="waves-effect">Icons</a>
                  </li>
                  <li>
                    <a href="../css/images.html" class="waves-effect">Images</a>
                  </li>
                  <li>
                    <a href="../css/typography.html" class="waves-effect">Typography</a>
                  </li>
                  <li>
                    <a href="../css/animations.html" class="waves-effect">Animations</a>
                  </li>
                  <li>
                    <a href="../css/colors.html" class="waves-effect">Colors</a>
                  </li>
                  <li>
                    <a href="../css/hover.html" class="waves-effect">Hover effects</a>
                  </li>
                  <li>
                    <a href="../css/masks.html" class="waves-effect">Masks</a>
                  </li>
                  <li>
                    <a href="../css/shadows.html" class="waves-effect">Shadows</a>
                  </li>
                  <li>
                    <a href="../css/skins.html" class="waves-effect">Skins</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-th"></i>Components<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../components/buttons.html" class="waves-effect">Buttons</a>
                  </li>
                  <li>
                    <a href="../components/cards.html" class="waves-effect">Cards</a>
                  </li>
                  <li>
                    <a href="../components/collapse.html" class="waves-effect">Collapse</a>
                  </li>
                  <li>
                    <a href="../components/date.html" class="waves-effect">Date picker</a>
                  </li>
                  <li>
                    <a href="../components/list.html" class="waves-effect">List group</a>
                  </li>
                  <li>
                    <a href="../components/panels.html" class="waves-effect">Panels</a>
                  </li>
                  <li>
                    <a href="../components/pagination.html" class="waves-effect">Pagination</a>
                  </li>
                  <li>
                    <a href="../components/popovers.html" class="waves-effect">Popovers</a>
                  </li>
                  <li>
                    <a href="../components/progress.html" class="waves-effect">Progress bars</a>
                  </li>
                  <li>
                    <a href="../components/stepper.html" class="waves-effect">Stepper</a>
                  </li>
                  <li>
                    <a href="../components/tabs.html" class="waves-effect">Tabs &amp; pills</a>
                  </li>
                  <li>
                    <a href="../components/tags.html" class="waves-effect">Tags, labels &amp; badges</a>
                  </li>
                  <li>
                    <a href="../components/time.html" class="waves-effect">Time picker</a>
                  </li>
                  <li>
                    <a href="../components/tooltips.html" class="waves-effect">Tooltips</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa far fa-check-square"></i>Forms<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../forms/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li>
                    <a href="../forms/extended.html" class="waves-effect">Extended</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-table"></i>Tables<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../tables/basic.html" class="waves-effect">Basic</a>
                  </li>
                  <li>
                    <a href="../tables/extended.html" class="waves-effect">Extended</a>
                  </li>
                  <li>
                    <a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-map"></i>Maps<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="../maps/google.html" class="waves-effect">Google Maps</a>
                  </li>
                  <li>
                    <a href="../maps/full.html" class="waves-effect">Full screen map</a>
                  </li>
                  <li>
                    <a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <!-- Simple link -->
            <li>
              <a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class="w-fa far fa-bell"></i>Alerts</a>
            </li>
            <li>
              <a href="../modals/modals.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-bolt"></i>Modals</a>
            </li>
            <li>
              <a href="../charts/charts.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-chart-pie"></i>Charts</a>
            </li>
            <li>
              <a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class="w-fa far fa-calendar-check"></i>Calendar</a>
            </li>
            <li>
              <a href="../sections/sections.html" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Sections</a>
            </li>

          </ul>
        </li>
        <!-- Side navigation links -->

      <div class="ps__rail-x" style="width: 240px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 213px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 255px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 104px;"></div></div></ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Grid</p>
      </div>

      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge red">3</span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item waves-effect waves-light" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item waves-effect waves-light" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item waves-effect waves-light" href="#">
              <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
              <span>Your campaign is about to end</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item waves-effect waves-light" href="#">Log Out</a>
            <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
          </div>
        </li>

      </ul>
      <!-- Navbar links -->

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>

    <div class="container-fluid">

      <h2 class="my-5 font-weight-bold">Grid system</h2>

      <!-- Section: Five grid tiers -->
      <section class="mb-5">

        <h4 class="mb-5 dark-grey-text font-weight-bold">Five grid tiers</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-sm-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-lg-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-lg-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-lg-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-4 mb-xl-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-xl-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-4 mb-xl-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-xl-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-xl-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->
        </div>

      </section>
      <!-- Section: Five grid tiers -->

      <!-- Section: Three equal columns -->
      <section class="mb-5">

        <h4 class="mb-5 pt-4 dark-grey-text font-weight-bold">Three equal columns</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Three equal columns -->

      <!-- Section: Two columns -->
      <section class="mb-5">

        <h4 class="mb-5 pt-4 dark-grey-text font-weight-bold">Two columns</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-md-8 mb-md-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-8</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Two columns -->

      <!-- Section: Mixed: mobile and desktop -->
      <section class="mb-5">

        <h4 class="mb-5 pt-4 dark-grey-text font-weight-bold">Mixed: mobile and desktop</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-12 col-md-8 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-12 .col-md-8</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-6 col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-md-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-md-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-6">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-md-6</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Mixed: mobile and desktop -->

      <!-- Section: Mixed: mobile, tablet, and desktop -->
      <section class="mb-5">

        <h4 class="mb-5 pt-4 dark-grey-text font-weight-bold">Mixed: mobile, tablet, and desktop</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-12 col-sm-6 col-lg-8 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-0">.col-12 .col-sm-6 .col-lg-8</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-lg-4 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-lg-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

        <div class="row">

          <!-- Grid column -->
          <div class="col-6 col-sm-4 mb-md-0 mb-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6. col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-6 col-sm-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class=" mb-0">.col-6 .col-sm-4</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Mixed: mobile, tablet, and desktop -->

      <!-- Section: Two columns with two nested columns -->
      <section class="mb-5 pb-3">

        <h4 class="mb-5 pt-4 dark-grey-text font-weight-bold">Two columns with two nested columns</h4>

        <div class="row">

          <!-- Grid column -->
          <div class="col-md-8 mb-md-0 mb-4">

            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="mb-4 mt-2">.col-md-8</p>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="card grey lighten-2 text-center z-depth-2">
                      <div class="card-body">
                        <p class="mb-0">.col-md-6</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card grey lighten-2 text-center z-depth-2">
                      <div class="card-body">
                        <p class="mb-0">.col-md-6</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
          </div>

          <!-- Grid column -->
          <div class="col-md-4">
            <div class="card white text-center z-depth-2">
              <div class="card-body">
                <p class="my-5">.col-md-4</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- Section: Two columns with two nested columns -->

      <!-- Section: Docs link -->
      <section>

        <!-- Panel -->
        <div class="card text-center">
          <h3 class="card-header primary-color white-text">Full documentation</h3>
          <div class="card-body">
            <p class="card-text">Read the full documentation for these components.</p>
            <a href="https://mdbootstrap.com/docs/jquery/layout/grid-usage/" target="_blank" class="btn btn-primary waves-effect waves-light">Learn
              more</a>
          </div>
        </div>

      </section>
      <!-- Section: Docs link -->

    </div>

  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="files/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="files/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="files/js/mdb.min.js"></script><div class="hiddendiv common"></div>

  <!-- Custom scripts -->
  <script>
    
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

  </script><div class="drag-target" style="left: 0px;"></div>




</body></html>