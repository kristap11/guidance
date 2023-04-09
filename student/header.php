<?php
  session_start();
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/sidebar.css" />
  <link rel="stylesheet" href="../assets/css/card.css" />

  <link rel="stylesheet" href="assets/icons/css/all.min.css">
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <main class="container-fluid">
    <ul class="topbar m-0 list-unstyled">
      <div class="topbarChild d-flex justify-content-between align-items-center">
        <li class="topBarLogo text-dark">
          <div class="logo-details d-flex align-items-center">
            <i class="bx bx-menu rounded-circle" id="btn"></i>
            <a href="studDashboard.php">
              <img class="ms-2 ms-sm-3 my-auto" src="logo.png" width="35" height="35" alt="bcp-logo" /></a>
            <a href="studDashboard.php" style="text-decoration:none">
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
            </a>
            <div class="my-auto search-boxContainer d-none d-lg-block">
              <input type="text" class="form-control search-box" type="search" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1" />
            </div>
          </div>
        </li>
        <div class="d-flex align-items-center justify-content-end">
          <li>
            <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
            <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
          </li>
          <li>
            <div class="nav-item dropdown my-auto ms-4">
              <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <h5 class="m-0 d-none d-sm-block"> <?php echo $_SESSION['username']; ?></h5>
                <img class="ms-0 ms-sm-3" src="man.png" width="32" height="32" alt="profile-picture" />
              </a>
              <ul class="dropdown-menu border shadow dropdownContainer">
                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
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
      <div class="sidebar close rounded shadow">
        <ul class="nav-list p-0 m-0">
          <li class="d-block d-lg-none">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search..." />
            <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="studDashboard.php">
              <i class="bx bx-grid-alt"></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>
          <li>
            <a href="newAppointment.php">
              <i class='bx bxs-user-detail'></i>
              <span class="links_name">New Appointment</span>
            </a>
            <span class="tooltip">New Appointment</span>
          </li>
          <li>
            <a href="appointmentReservation.php">
              <i class='bx bxs-calendar'></i>
              <span class="links_name">Appointment Reservation</span>
            </a>
            <span class="tooltip">Appointment Reservation</span>
          </li>
          <li>
            <a href="evaluation.php">
              <i class='bx bxs-calendar'></i>
              <span class="links_name">Evaluation</span>
            </a>
            <span class="tooltip">Appointment</span>
          </li>
        </ul>
      </div>