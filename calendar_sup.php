<?php
$pagelevel=2;
require('logincheck.php');
require('db.php');

?>

<html lang="en">
    
<head>
    
          <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- demo stylesheet -->
    <link type="text/css" rel="stylesheet" href="./helpers/demo.css?v=2020.1.4279" />
    <link type="text/css" rel="stylesheet" href="./helpers/media/layout.css?v=2020.1.4279" />
    <link type="text/css" rel="stylesheet" href="./helpers/media/elements.css?v=2020.1.4279" />

	<!-- helper libraries -->
	<script src="./helpers/jquery-1.12.2.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
    <script src="./js/daypilot-all.min.js?v=2020.1.4279" type="text/javascript"></script>

    <!-- daypilot themes -->
	<link type="text/css" rel="stylesheet" href="./themes/areas.css?v=2020.1.4279" />

	<link type="text/css" rel="stylesheet" href="./themes/month_white.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/month_green.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/month_transparent.css?v=2020.1.4279" />
    <link type="text/css" rel="stylesheet" href="./themes/month_traditional.css?v=2020.1.4279" />

	<link type="text/css" rel="stylesheet" href="./themes/navigator_8.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/navigator_white.css?v=2020.1.4279" />

	<link type="text/css" rel="stylesheet" href="./themes/calendar_transparent.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/calendar_white.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/calendar_green.css?v=2020.1.4279" />
    <link type="text/css" rel="stylesheet" href="./themes/calendar_traditional.css?v=2020.1.4279" />

    <link type="text/css" rel="stylesheet" href="./themes/scheduler_8.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/scheduler_white.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/scheduler_green.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/scheduler_blue.css?v=2020.1.4279" />
    <link type="text/css" rel="stylesheet" href="./themes/scheduler_traditional.css?v=2020.1.4279" />
	<link type="text/css" rel="stylesheet" href="./themes/scheduler_transparent.css?v=2020.1.4279" />


        <!-- /head -->  
    
    



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FYP Calendar System</title>

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
      <div id="content" style="margin-left: 0px;">

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
    <div id="main">
        <div id="container" >

	            <div>

<!-- /top -->
<div id="dp"></div>
<div id="touch"></div>
<script type="text/javascript">
    var dp = new DayPilot.Calendar("dp");
    // view
    dp.startDate = DayPilot.Date.today();
    dp.viewType = "Week";
    dp.allDayEventHeight = 25;

    dp.eventDeleteHandling = "Update";
    dp.onEventDelete = function(args) {
        alert("deleting: " + args.e.text());
    };

    // bubble, with async loading
    dp.bubble = new DayPilot.Bubble({
        onLoad: function(args) {
            var ev = args.source;
            //alert("event: " + ev);
            args.async = true;  // notify manually using .loaded()

            // simulating slow server-side load
            setTimeout(function() {
                args.html = "testing bubble for: <br>" + ev.text();
                args.loaded();
            }, 500);
        }
    });

    dp.contextMenu = new DayPilot.Menu({
        items: [
        {text:"Show event ID", onclick: function() {alert("Event value: " + this.source.value());} },
        {text:"Show event text", onclick: function() {alert("Event text: " + this.source.text());} },
        {text:"Show event start", onclick: function() {alert("Event start: " + this.source.start().toStringSortable());} },
        {text:"Delete", onclick: function() { dp.events.remove(this.source); } }
    ]});

    // event moving
    dp.onEventMoved = function (args) {
        dp.message("Moved: " + args.e.text());
    };

    // event resizing
    dp.onEventResized = function (args) {
        dp.message("Resized: " + args.e.text());
    };

    // event creating
    dp.onTimeRangeSelected = function (args) {
        var name = prompt("New event name:", "Event");
        dp.clearSelection();
        if (!name) return;
        var e = new DayPilot.Event({
            start: args.start,
            end: args.end,
            id: DayPilot.guid(),
            resource: args.resource,
            text: name
        });
        dp.events.add(e);
        dp.message("Created");
    };
    dp.onTimeRangeRightClick = function(args) {
        window.console && console.log(args);
    };
    dp.onTimeRangeDoubleClicked = function(args) {
        alert("DoubleClick: start: " + args.start + " end: " + args.end + " resource: " + args.resource);
    };
    dp.onEventClick = function(args) {
    };
    dp.eventDoubleClickHandling = "Enabled";
    dp.onEventDoubleClick = function(args) {
        alert("double click");
    };
    dp.showEventStartEnd = true;
    dp.scrollLabelsVisible = true;

    var e = new DayPilot.Event({
        start: DayPilot.Date.today().addHours(12),
        end: DayPilot.Date.today().addHours(15),
        id: DayPilot.guid(),
        text: "Special event"
    });
    dp.events.add(e);

    dp.contextMenuSelection = new DayPilot.Menu({
        items: [
            {
                'text': 'Create new event (JavaScript)', 'onclick': function () {
                dp.events.add(new DayPilot.Event({
                    start: this.source.start,
                    end: this.source.end,
                    text: "New event",
                    resource: this.source.resource
                }));
            }
            },
            {'text': '-'},
            {
                'text': 'Show selection details', 'onclick': function () {
                alert('Start: ' + this.source.start + '\nEnd: ' + this.source.end + '\nResource id: ' + this.source.resource);
            }
            },
            {
                'text': 'Clean selection', 'onclick': function () {
                dp.clearSelection();
            }
            }]
    });
    dp.timeRangeSelectingStartEndEnabled = true;
    dp.init();
</script>

<!-- bottom -->
                </div>
            </div>
	        </div>
        </div>
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