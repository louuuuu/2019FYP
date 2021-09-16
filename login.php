<?php
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT password, level, username ";
        $query.= "FROM user ";
        $query.= "WHERE password = '$password' AND  username = '$username' ";
        //echo $query;

        $result = mysqli_query($connection, $query);
        
        if (!$result){
            die("query is wrong");
        }
        
        $row = mysqli_fetch_array($result);
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            session_start();
            
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['level'];
            
            if  ($_SESSION['login_level'] == 1) {
                    header('location: home_stu.php');
                } else if ($_SESSION['login_level'] == 2) {
                    header('location: home_sup.php');
                } else if ($_SESSION['login_level'] == 3) {
                    header('location: home_ad.php');          
                } else {
                    header('location:loginfailed.php');
            }
        } else {
            header('location:loginfailed.php');    
        }
        mysqli_free_result ($result);
    }
}
mysqli_close($connection);
?>









<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FYP - login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image" img src="logo.jpg" style=" height: 400px;"><img src="img/fyplogo.jpg" width="450" height="400">
                </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">FYP Management System</h1>
                  </div>
                    


                  
                  <form action="login.php" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" placeholder="Enter username..." class="form-control form-control-user" >
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" placeholder="Password" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">

                      
                  </form>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>











