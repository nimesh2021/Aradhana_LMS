<?php
include 'header.php';
include 'connection.php';
?>
<title>Add a User</title>


<div class="content" style="left:100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add a User</h4>
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
                                                <input type="text" class="form-control" placeholder="Phone No" name ="phone" required>
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

                                  

                                    


                                    
                                    <input type="submit" class="btn btn-info btn-fill " value="Submit" name = "submit1" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
        <?php
                   $password = 12345678;
                   if(isset($_POST["submit1"])){

                    if (!mysqli_query($link,"INSERT into employee (fname,lname,dob,gender,email,tp,address,nic,password,role) values('$_POST[fname]','$_POST[lname]','$_POST[dob1]','$_POST[gender]','$_POST[email]','$_POST[phone]','$_POST[address1]','$_POST[nic]','$password','User')")){
                        mysqli_error($link);
                    }

                    ?>

                    <script>
                    alert("Admin Added!!");
                     </script>


                    <?php
                       


                   }
                   ?>

       





<?php
include 'footer.php';
?>