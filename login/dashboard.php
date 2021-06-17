<?php
  session_start();

  if(!isset($_SESSION['adminLoginId'])){
    header("location: index.php");
  }

  // logout function
  if (isset($_POST['logout']))
  {
    session_destroy();
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ProDocs | Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <form method="POST">
    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
      <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
      <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
        <img
             class="rounded-pill img-fluid"
             width="65"
             src="img/admin.png"
             alt="">
        <div class="ms-2">
          <h5 class="fs-6 mb-0">
            <a class="text-decoration-none">Hi ! Admin</a>
          </h5>
          <p class="mt-1 mb-0">admin@prodocs.in</p>
        </div>
      </div>
    
      <ul class="categories list-unstyled">
        <li class="">
          <i class="uil-estate fa-fw"></i><a href="dashboard.php"> Dashboard</a>
        </li>
        <li class="has-dropdown1">
          <i class="uil-chart-pie-alt"></i><a href="orders.php"> My Orders</a>
          <ul class="sidebar-dropdown list-unstyled">
            <li><a href="#">Last 1 week</a></li>
            <li><a href="#">Last 1 Month</a></li>
            <li><a href="#">Last 1 Year</a></li>
          </ul>
        </li>
        <li class="">
          <i class="uil-sign-out-alt"></i>
            <button class="no-style" name="logout">logout</button>
        </li>
      </ul>
    </aside>
    </form>

    <section id="wrapper">
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid mx-2">
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="uil-bars text-white"></i>
            </button>
            <a class="navbar-brand" href="#">Prodocs <span class="main-color"> Dashboard</span></a>
          </div>
          <div class="collapse navbar-collapse" id="toggle-navbar">
            <ul class="navbar-nav ms-auto">
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Dashboard
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="p-4">
        <div class="welcome">
          <div class="content rounded-3 p-3">
            <h1 class="fs-3">Welcome to Dashboard</h1>
            <p class="mb-0">Hello Admin, Welcome to your awesome dashboard!</p>
          </div>
        </div>
    
        <section class="statistics mt-4">
          <div class="row">
            <div class="col-lg-4">
              <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Orders</span>
                  </div>
                  <p class="fs-normal mb-0">Total order till now.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">1000</h3> <span class="d-block ms-2">Orders</span>
                  </div>
                  <p class="fs-normal mb-0">Online Orders</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box d-flex rounded-2 align-items-center p-3">
                <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                <div class="ms-3">
                  <div class="d-flex align-items-center">
                    <h3 class="mb-0">500</h3> <span class="d-block ms-2">Orders</span>
                  </div>
                  <p class="fs-normal mb-0">COD Orders</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    
        <section class="statis mt-4 text-center">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <div class="box bg-primary p-3">
                <i class="uil-eye"></i>
                <h3>1,500</h3>
                <p class="lead">Total Orders</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
              <div class="box bg-danger p-3">
                <i class="uil-eye"></i>
                <h3>200</h3>
                <p class="lead">Last Week Orders</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
              <div class="box bg-warning p-3">
                <i class="uil-eye"></i>
                <h3>1300</h3>
                <p class="lead">Last Month Orders</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="box bg-success p-3">
                <i class="uil-eye"></i>
                <h3>1,500</h3>
                <p class="lead">Last Year Orders</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>