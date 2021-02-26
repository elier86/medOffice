<?php
session_start();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>medOffice</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/overview.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
    <form class="form-dark w-100" action="appointAllSearch.inc.php" method="POST">
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">medOffice</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" name="search">
  <button type="submit" name="submit-search" class="btn btn-dark btn-outline-large">Search</button>
  </form>


  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <form class="signOut" action="logout.inc.php" method="post">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sign Out</button>
      </form>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard.php">
              <span data-feather="home">(current)</span>
              Dashboard
            </a>
            <li class="nav-item">
              <a class="nav-link" href="../patients.php">
                <span data-feather="file"></span>
                Patients <span class="sr-only"></span>
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="../nurses.php">
              <span data-feather="shopping-cart"></span>
              Nurses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../doctors.php">
              <span data-feather="users"></span>
              Doctors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../appointment.php">
              <span data-feather="bar-chart-2"></span>
              Appointments
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>See reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="../reports.php">
              <span data-feather="file-text"></span>
              Reports
            </a>
          </li>
        </ul>
      </div>
    </nav>
