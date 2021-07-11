<?php
session_start();

$_SESSION['aid'];
$_SESSION['email'];
$_SESSION['fname'];
$_SESSION['lname'];
$_SESSION['email'];
$_SESSION['tp'];
$_SESSION['role'];


if(empty($_SESSION['aid'])){

    ?>

    <script type="text/javascript">
        alert("Please Login to view this page !");
        window.location = "login.php";
    </script>

    <?php
#}if ((time() - $_SESSION['time_stamp'])>90000000) {
}if (false) {
    ?>
    <script type="text/javascript">
        alert("You were Automatically logged out Due to inactivity!");
        window.location = "../login.php";
    </script>


    <?php
}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

   
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <link href="assets/css/main.css" rel="stylesheet" />
    
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">




    

</head>
<style>
    .navbar-custom { 
			background-color: #242424; 
		} 
		/* Modify brand and text color */ 
		
		.navbar-custom .navbar-brand, 
		.navbar-custom .navbar-text { 
			color: blue; 
		} 
    .back-custom { 
			background-color: #242424;
    }
</style>
<body class="back-custom ">

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/dashimage1.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                  <img src="assets/img/logo1.png" width="20%">
                </a>
            </div>

            <ul class="nav">
            <?php
                if($_SESSION['role']=="Admin"){
                ?>
                <li>
                    <a href="index.php">
                        <i class="pe-7s-culture"></i>
                        <p>HOME</p>
                    </a>
                </li>
                <?php
                }
                ?>
                
                <li>
                    <a href="my_account.php">
                        <i class="pe-7s-diamond"></i>
                        <p>MY PROFILE</p>
                    </a>
                </li>

                <?php
                if($_SESSION['role']=="Admin"){
                ?>
                
                <li>
                    <a href="add_users.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Student</p>
                    </a>
                </li>
                <li>
                    <a href="view_student.php">
                        <i class="pe-7s-users"></i>
                        <p>View Student</p>
                    </a>
                </li>
                <li>
                    <a href="add advisor.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Advisor</p>
                    </a>
                </li>
                <li>
                    <a href="view_advisor.php">
                        <i class="pe-7s-car"></i>
                        <p>View Advisor</p>
                    </a>
                </li>
                <?php
                }
                ?>
                <li>
                    <a href="add_sh.php">
                        <i class="pe-7s-note2"></i>
                        <p>Add Shedule</p>
                    </a>
                </li>
                <li>
                    <a href="view_sh.php">
                        <i class="pe-7s-date"></i>
                        <p>View Shedule</p>
                    </a>
                </li>
                <li>
                    <a href="results.php">
                        <i class="pe-7s-study"></i>
                        <p>Results</p>
                    </a>
                </li>
                <?php
                if($_SESSION['role']=="Admin"){
                ?>
                <li>
                    <a href="add admin.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add admin</p>
                    </a>
                </li>
            
                <li>
                    <a href="view_admin.php">
                        <i class="pe-7s-id"></i>
                        <p>View admin</p>
                    </a>
                </li>
                <?php
                }
                ?>
                
             
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-custom navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            
                        </li>
                        
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="my_account.php">
                                <i class="fa fa-user"></i>
								<p class="hidden-lg hidden-md">My Account</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--- your code start-->