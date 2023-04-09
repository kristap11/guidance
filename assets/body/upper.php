<?php
  session_start();
if($_SESSION['role'] == "Counselor"){
   
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="900">
    <meta charset="UTF-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <!--<link rel="stylesheet" href="../../submod_style/counseling.css"/> -->
    <!-- <link rel="stylesheet" href="assets/icons/css/all.min.css"> -->
    
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Guidance And Counseling system</title>
    <link rel="icon" href="assets/images/newLogin/logo.png" type="image/png">
  </head>
  <body>
    <main class="container-fluid text-secondary">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">GUIDANCE AND COUNSELING</div>
              <!-- <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div> -->
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <h5 class="m-0 d-none d-sm-block text-dark fw">welcome, <?php  echo $_SESSION['role'];echo "&nbsp";echo $_SESSION['lname']; ?></h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="logout">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
        <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
            <a href="home">
                <i><ion-icon class="mt-3" name="grid-sharp"></ion-icon></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            
            <li>
              <div class="iocn-link arrow">
                <a class="">
                <i><ion-icon class="mt-1" name="chatbubbles-sharp"></ion-icon></i>
                  <span class="links_name">Counseling Service &emsp;&emsp;<i class="bx bx-chevron-down arrow" id="arror"></i></span>
                </a>
                
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="individual">Individual Counseling</a></li>
                <li><a href="group">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            
            <li>
              <a href="profiling">
              <i><ion-icon class="mt-3" name="people-sharp"></ion-icon></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            
            <li>
              <a href="visitlogs">
              <i><ion-icon class="mt-3" name="log-in-sharp"></ion-icon></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation">
              <i><ion-icon  class="mt-3" name="search-sharp"></ion-icon></i>
                <span class="links_name">Guidance Posting</span>
              </a>
              <span class="tooltip">Guidance Posting</span>
            </li>
            <li>
              <a href="scholarship">
              <i><ion-icon class="mt-3" name="school-sharp"></ion-icon></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res">
              <i><ion-icon class="mt-3" name="document-text-sharp"></ion-icon></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation">
              <i><ion-icon class="mt-3" name="id-card-sharp"></ion-icon></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="report">
              <i><ion-icon class="mt-3" name="analytics-sharp"></ion-icon></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
        
          <li>
          </ul>
        </div>
        <?php }elseif($_SESSION['role'] == "Staff"){
       ?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css" />

    <!-- Fontware CDN Link -->
    <link rel="stylesheet" href="../assets/icons/css/all.min.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
    <title>Guidance And Counseling system</title>
    <link rel="icon" href="assets/images/newLogin/logo.png" type="image/png">

   
</head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <a href="home.php">
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="../assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              /></a>
              <a href="home.php" style="text-decoration:none" ><div class="logo_name text-dark ms-1 ms-sm-3">GUIDANCE & COUNSELING</div></a>
              
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block text-dark fw">welcome, <?php  echo $_SESSION['role'];echo "&nbsp";echo $_SESSION['lname']; ?></h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="../assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
      <div class="sidebar close rounded-1 shadow">
          <ul class="nav-list p-0 m-0">
            <li>
              <a href="dashboard.php">
                <i><ion-icon class="mt-3" name="grid-sharp"></ion-icon></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="visitlogs.php">
              <i><ion-icon class="mt-3" name="log-in-sharp"></ion-icon></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
                <i><ion-icon  class="mt-3" name="search-sharp"></ion-icon></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
              <i><ion-icon class="mt-3" name="school-sharp"></ion-icon></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
              <i><ion-icon class="mt-3" name="document-text-sharp"></ion-icon></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="report.php">
              <i><ion-icon class="mt-3" name="analytics-sharp"></ion-icon></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        
       
       <?php }elseif($_SESSION['role'] == "Super_Admin") {
       
  
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="900">
    <meta charset="UTF-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.2/datatables.min.js"></script>
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <!--<link rel="stylesheet" href="submod_style/counseling.css"/> -->
    <!-- <link rel="stylesheet" href="assets/icons/css/all.min.css"> -->
    
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Guidance And Counseling system</title>
    <link rel="icon" href="assets/images/newLogin/logo.png" type="image/png">
  </head>
  <body>
    <main class="container-fluid text-secondary">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">GUIDANCE AND COUNSELING</div>
              <!-- <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div> -->
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block text-dark fw">welcome, <?php  echo $_SESSION['role'];echo "&nbsp";echo $_SESSION['lname']; ?></h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="logout">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
        <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
            <a href="superadmindashboard">
                <i><ion-icon class="mt-3" name="grid-sharp"></ion-icon></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            
            <li>
              <div class="iocn-link arrow">
                <a class="">
                <i><ion-icon class="mt-1" name="chatbubbles-sharp"></ion-icon></i>
                  <span class="links_name">Counseling Service &emsp;&emsp;<i class="bx bx-chevron-down arrow" id="arror"></i></span>
                </a>
                
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="../individual">Individual Counseling</a></li>
                <li><a href="group">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            
            <li>
              <a href="profiling">
              <i><ion-icon class="mt-3" name="people-sharp"></ion-icon></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            
            <li>
              <a href="visitlogs">
              <i><ion-icon class="mt-3" name="log-in-sharp"></ion-icon></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation">
              <i><ion-icon  class="mt-3" name="search-sharp"></ion-icon></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship">
              <i><ion-icon class="mt-3" name="school-sharp"></ion-icon></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res">
              <i><ion-icon class="mt-3" name="document-text-sharp"></ion-icon></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation">
              <i><ion-icon class="mt-3" name="id-card-sharp"></ion-icon></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="report">
              <i><ion-icon class="mt-3" name="analytics-sharp"></ion-icon></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
            <li>
            <a href="student/newAppointment">
              <i class='bx bxs-user-detail'></i>
              <span class="links_name">New Appointment</span>
            </a>
          </li>
          
          </ul>
        </div>

       
       <?php }else{
       header ("Location: index?login=PLEASE LOGIN AGAIN");
       } ?>
        