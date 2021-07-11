<?php
include 'header.php';
include 'connection.php';
include 'validation.php';
?>
<title>LMS|Add Student</title>


<div class="content" style="left:100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                
                            <center> <h4 id = "errMsg" class="title" style="color:red;"></h4></center>
                               <h4 class="title">Add a new Student</h4> 
                            </div>
                            <div class="content">
                                <form method="POST" id = "form1" name="form1">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="lasrt Name" name ="lname" required>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="Date" class="form-control" placeholder="Date of Birth" name ="dob1" required>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select id="gender" name="gender" >
                                                <option  value="Male">Male</option>
                                                <option  value="Female">Female</option>
                                                </Select>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name ="email" required>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="number" class="form-control" placeholder="0710000000 or 710000000" name ="phone" required>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" name ="address1" required>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>NIC/Passport No</label>
                                                <input type="text" class="form-control" placeholder="NIC/Passport No" name ="nic" required>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Package</label>
                                                <select id="package" name="package" >
                                                <option  value="Package 1">Package 1</option>
                                                <option  value="Package 2">Package 2</option>
                                                <option  value="Package 3">Package 3</option>
                                                <option  value="Package 4">Package 4</option>
                                                </Select>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Group</label>
                                                <select id="group1" name="group1" >
                                                <option  value="Morning">Morning</option>
                                                <option  value="Mid-Day">Mid-Day</option>
                                                <option  value="Evening">Evening</option>
                                                </Select>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <input type="submit" class="btn btn-info btn-fill " value="Submit" name = "submit1" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                   <?php
                   $password = 12345678;
                   $exam = "Not Attempted";
                   if(isset($_POST["submit1"])){
                       $f_name = check_strings($_POST["fname"]);
                       $l_name = check_strings($_POST["lname"]);
                       $phone_size = phone_length($_POST["phone"]);
                       $nic_size = check_nic($_POST["nic"]);

                    if($f_name){
                        ?>
                        <script>
                            document.getElementById("errMsg").innerHTML= "Wrong Name!!";
                            
                            </script>
                        <?php

                    }elseif($l_name){

                        ?>
                        <script>
                            document.getElementById("errMsg").innerHTML= "Wrong Last Name!!";
                            
                            </script>
                        <?php

                    }elseif($phone_size){

                        ?>
                         <script>
                            document.getElementById("errMsg").innerHTML= "Wrong Phone Number!!";
                            
                            </script>
                        <?php

                    }elseif($nic_size){

                        ?>
                         <script>
                            document.getElementById("errMsg").innerHTML= "Wrong NIC Number!!";
                            
                            </script>
                        <?php

                    }else{
                        if (!mysqli_query($link,"INSERT into student (fname,lname,dob,gender,email,tp,address,nic,package,group1,password,exam) values('$_POST[fname]','$_POST[lname]','$_POST[dob1]','$_POST[gender]','$_POST[email]','$_POST[phone]','$_POST[address1]','$_POST[nic]','$_POST[package]','$_POST[group1]','$password','$exam')")){
                            mysqli_error($link);
                        }
                        ?>
                        <script>
                            alert("User Added!");
                        </script>

                        <?php
                    }

                    
                       


                   }
                   ?>

                </div>
            </div>
        </div>


        





<?php
include 'footer.php';
?>