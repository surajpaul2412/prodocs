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

require("connection.php");
$result = mysqli_query($con,"SELECT * FROM orders ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ProDocs | Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <style type="text/css">
      th{
        color: #fff !important;
      }
      td{
        color: #ccc !important;
      }
    </style>
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
            <a class="text-decoration-none">Hy ! Admin</a>
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
                  Dashboard <span class="iconify" data-icon="uil:angle-right" data-inline="false"></span> Orders
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="p-4">
        <div class="welcome">
          <div class="content rounded-3 p-3">
            <h1 class="fs-3 mb-4">Your Orders (All)</h1>


<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">S.No</th>
        <th scope="col">Order_id</th>
        <th scope="col">MOP</th>
        <th scope="col">Customer_id</th>
        <th scope="col">Amount</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Address</th>
        <th scope="col">Landmark</th>
        <th scope="col">State</th>
        <th scope="col">City</th>
        <th scope="col">Pincode</th>
        <th scope="col">Order_Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
        <td><?php echo $i+1; ?>.</td>
        <td class="text-success"><?php echo $row['order_id']; ?></td>
        <td>
          <div class="badge badge-info" style="background:blue;">
          <?php
            $details = mysqli_query($con,"SELECT * FROM order_details WHERE order_id='".$row['order_id']."'");

            if(mysqli_num_rows($details) > 0){
              while($row1 = mysqli_fetch_array($details)){
                if (isset($row1['id'])){
                  echo "Via Paytm";
                }
              }
            }else{
              echo "COD";
            }
          ?>
          </div>
        </td>
        <td><?php echo $row['customer_id']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo substr($row['address'], 0, 35); ?></td>
        <td><?php echo substr($row['landmark'], 0, 35); ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['pincode']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
    </tbody>
  </table>
</div>

          </div>
        </div>

      </div>
    </section>

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>

<?php
  mysqli_close($con);
?>