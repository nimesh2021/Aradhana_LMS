<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='img/favicon.ico' type='image/x-icon' >
    <title>LOG IN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<style>
    .form-gap {
    padding-top: 70px;
}
    
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
<body class="back-custom">

 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><img src="assets/img/logo.png" alt="Logo" height="100" width="100"></i></h3>
                  <h3 class="text-center">ARADHANA DRIVING SCHOOL | LMS</h3>
                  <h2 class="text-center">Verify</h2>
                  <p>You can reset password  here.</p>
                  <div class="panel-body">
    
                    <form id="form" role="form" autocomplete="off" name="form1" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon"></span>
                          <input id="username" name="username" placeholder="E-mail" class="form-control"  type="text" required> </br>
                          <input id="phone" name="phone" placeholder="Phone No" class="form-control"  type="text" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <input name="submit1" class="btn btn-lg btn-primary btn-block" value="Verify" type="submit">
                        
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>

                   <?php
                   $username1;
                    if(isset($_POST["submit1"])){

                        $phone =$_POST["phone"];
                        $username = $_POST["username"];

                        $result = mysqli_query($link,"SELECT* FROM employee WHERE email = '$username';");
		
                        $row = mysqli_fetch_array($result);
                        if($row['email'] == $username && $row['tp'] == $phone ){
                            
                            //redirecting to index page
                            header('Location: reset.php?id='.$row['aid']);
                            
                            
                            
                            
                        }else{

                         
                            
                        
                            echo '<span style="color:#FF0000;text-align:center;">Failed to Login.Please check credentials and try again!</span>';
                           
                            header(' URL=login.php');
                            die();
                        }



                    }
                   
                   


                   ?>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
</body>
</html>