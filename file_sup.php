<?php
$pagelevel=2;
require('logincheck.php');
require('db.php');

$query  = "SELECT * FROM file";
$result = mysqli_query($connection, $query);

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FYP Management System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home_sup.php" style="padding-top: 20px;padding-bottom: 20px;width: 220px;height: 240px;">
          
        <div class="logo2.jpg">
            <img src="img/sup.jpg" width="160" height="160" />
          </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home_sup.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>



      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>



      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="http://localhost/fyp/chat/index.php">Chat</a>
            <a class="collapse-item" href="file_sup.php">Files</a>
            <a class="collapse-item" href="calendar_sup.php">Calendar</a>
            <a class="collapse-item" href="feedback_sup.php">Feedback</a>
              <a class="collapse-item" href="score_sup.php">Score</a> 
              <a class="collapse-item" href="news_sup.php">News</a> 
            <a class="collapse-item" href="https://outlook.office365.com">E-mail</a>   
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Sign out</span></a>
      </li>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
            
            <div class="header" style="color: black; font-size: 30px;height: 50px;"> Final Year Project Management System
            </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Banerjee Jodeep</span>
                <img class="img-profile rounded-circle" src="img/sup.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
          
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <div class="d-sm-flex align-items-center mb-4">
                        <div style="width: 900px;">
                            <h4 class="card-title mb-sm-0">FYP files</h4></div>
                        <div class="template-demo">
                            <button type="button" class="btn btn-dark btn-rounded btn-fw"><a href="upload_sup.php" style="color: white;">Upload Files</a></button></div>
                          
                      </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>

                            <th class="font-weight-bold">File name</th>
                            <th class="font-weight-bold">Date</th>
                            <th class="font-weight-bold">Download</th>
                          </tr>
                        </thead>
     <?php
    
while($row = mysqli_fetch_array($result)){
    echo"<tr>";

    echo"<td>" . $row["file_name"] . "</td>";
    echo"<td>" . $row["file_date"] . "</td>";
    echo"<td><a href=uploads/download.php?filename=". $row["file_name"] .">Download</a></td>";
    echo"</tr>";
}

    
    ?>  
                                 
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          <!-- Content Row -->
          
          
        </div>
      </div>

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>