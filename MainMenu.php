<!DOCTYPE html>
<html lang="en">
<head>

<?php
include('session.php');
?>

<meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Cleaning Management HRIS</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="robots" content="all,follow">
          <!-- Bootstrap CSS-->
          <link rel="stylesheet" href="vendorbootstrap/bootstrap/css/bootstrap.min.css">
          <!-- Font Awesome CSS-->
          <link rel="stylesheet" href="vendorbootstrap/font-awesome/css/font-awesome.min.css">
          <!-- Fontastic Custom icon font-->
          <link rel="stylesheet" href="css/fontastic.css">
          <!-- Google fonts - Roboto -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
          <!-- jQuery Circle-->
          <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
          <!-- Custom Scrollbar-->
          <link rel="stylesheet" href="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
          <!-- theme stylesheet-->
          <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
          <!-- Custom stylesheet - for your changes-->
          <link rel="stylesheet" href="css/custom.css">
          <!-- Favicon-->
          <link rel="shortcut icon" href="css/faviconlogo.ico">
          <!-- Tweaks for older IEs--><!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <body>
          <!-- Side Navbar -->
          <nav class="side-navbar">
            <div class="side-navbar-wrapper">
              <!-- Sidebar Header    -->
              <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img src="img/avatar-10.jpg" alt="person" class="img-fluid rounded-circle">
                  <h2 class="h5"><?php echo $usernamecleaner; ?></h2><span><?php echo $position; ?></span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="MainMenu.php"> <i class="icon-home"></i>Home</a></li>   
                  <li><a href="leave.php"> <i class="fa fa-calendar"></i>Apply Leave</a></li>                     
                  <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll</a>
                  <ul id="PayrollManager" class="collapse list-unstyled ">
                      <li><a href="SalaryDetails.php">Salary Details</a></li>
                      <li><a href="claims.php">Request Claims</a></li>
                    </ul>
                  </li>
              </div>
          </nav>
          <div class="page">
            <!-- navbar-->
            <header class="header">
              <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>CLEANING MANAGEMENT SYSTEM</span><strong class="text-primary"> HRIS</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                      <!-- Notifications dropdown-->
                      <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>10 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Log out-->
                      <li class="nav-item"><a href="SignIn.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
<!-- Header Section-->
<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
<!-- JavaScript files-->
<script src="vendorbootstrap/jquery/jquery.min.js"></script>
<script src="vendorbootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendorbootstrap/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendorbootstrap/chart.js/Chart.min.js"></script>
<script src="vendorbootstrap/jquery-validation/jquery.validate.min.js"></script>
<script src="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Ajax google api -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script src="js/charts-home.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>

<!-- Extra css files -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

 table {
  border-collapse: collapse;
  width: auto;
  color: #D5DBDF;
  font-family: serif;
  font-size: 15px;
  text-align: center;
  }
  
  th {
  background-color: #475056 ;
  color: white;
  font-size: 16px;
  }
  tr:nth-child(even) {background-color: #D5DBDF}

  .bottom-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-60%); 
        } 


  #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 15px 12px 30px;
  margin-left: 180px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}


.cards {
background-color:  #D5DBDF;
}   

.container{
  background-color : #D5DBDF;
}


h2{

  font-family: "Roboto", sans-serif;
}

</style> 


<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <br></br>
          <div class="w3-display-bottomleft w3-container w3-text-black">
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Profile</b></p>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-user-o fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $usernamecleaner; ?></p>
          <p><i class="fa fa-id-badge fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $position; ?></p>
          <p><i class="fa fa-id-card-o fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $NRIC; ?></p>
          <p><i class="fa fa-globe fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $country; ?></p>
          <p><i class="fa fa-genderless fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $gender; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Assigned Places</b></p>
          <p><?php $y= 0; foreach($assignedplace as $rows){ $y++; echo $rows."<br>"; } ?></p>
          <br>

          <!-- <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div> -->

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <div class="w3-container">
        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Claims</b></p>
        <p>Claims Rquested. Claims will take 3 working hours to be processed.</p>
        
        <div class = "card" style = "width: auto;">
            <div class = "card-body" style = "width: auto;">
                <div class = "table-responsive"> 
              <table class = "table table-bordered table-sm" id = "tableclaim" >
                <thread> 
                <tr> 
                <th>No</th>
                <th>Date Applied</th>
                <th>Claim Type</th>
                <th>Amount (RM)</th>
                <th>Status</th>
                </tr>
                </thread>
                <tbody>
                <tr> 
                <?php $i = 0; foreach($totalclaims[0] as $row){$i++; ?>
                <?php if(strpos($row['ID'],$user_check) !== false) {?>
                <td><?php echo $i; ?></td> 
                <td><?php echo $row['todaydate']; ?></td>
                <td><?php echo $row['claimtype']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['Status']; ?></td>
                
               </tr>

                  <?php
                  }}
                  ?>
                </tbody>
                      </table>
                      </div>
                      </div>
                      </div>
                  <hr>
        </div>
        <div class="w3-container">

        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Leaves Applied</b></p>
          <p>Leaves Applied. If there are any problems with approval please contact the administrator for further action.</p>
          
          <div class = "card" style = "width: auto;">
            <div class = "card-body" style = "width: auto;">
                <div class = "table-responsive"> 
              <table class = "table table-bordered table-sm" id = "tableclaim">
                <thread> 
                <tr> 
                <th>No</th>
                <th>Reason</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                </tr>
                </thread>
                <tbody>
                <tr> 

                <?php $i = 0; foreach($totalleave[0] as $row){$i++; ?>
                <?php if(strpos($row['ID'],$user_check) !== false) {?>
                <td><?php echo $i; ?></td> 
                <td><?php echo $row['Reason']; ?></td>
                <td><?php echo $row['StartDate']; ?></td>
                <td><?php echo $row['EndDate']; ?></td>
                <td><?php echo $row['Status']; ?></td>
                
               </tr>
                </tbody>
                 </table>
               <?php } } ?>
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
</html>
