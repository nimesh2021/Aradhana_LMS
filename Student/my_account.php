<?php 
include 'header.php';
include 'connection.php';

$res=mysqli_query($link,"SELECT * FROM student WHERE sid = '$_SESSION[sid]'");
$row=mysqli_fetch_array($res);
?>

<title>My Account</title>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Account</h4>
                            </div>
                            <div class="content">
                                <form method="POST" name="form1">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Aradhana Driving School">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Role</label>
                                                <input type="text" class="form-control" placeholder="Username" name="email"  value="Student"  disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" value=<?php echo $row["email"];?> placeholder="Email" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="fname"  value=<?php echo $row["fname"];?> required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value=<?php echo $row["lname"];?> required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address"  value=<?php echo $row["address"];?> required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone No</label>
                                                <input type="text" class="form-control" placeholder="phone" name="phone" value=<?php echo $row["tp"];?> required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIC</label>
                                                <input type="text" class="form-control" placeholder="nic" name="nic"  value=<?php echo $row["nic"];?> disabled>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <input type="submit" class="btn btn-info btn-fill " name="submit1" value ="Update">
                                    <div class="clearfix"></div>
                                </form></br>
                                <a href="reset.php?id=<?php echo $_SESSION['sid'];  ?>"><button class="btn btn-info btn-fill">Reset Password </button> </a>
                                



                                <!-- SQL query -->

                                    <?php
                                    if(isset($_POST["submit1"])){
                                        

                                        if(!mysqli_query($link," UPDATE student SET fname = '$_POST[fname]', lname = '$_POST[lname]', address = '$_POST[address]', tp = '$_POST[phone]' WHERE sid = $_SESSION[sid]"))
                                    
                                    {
                                    echo("Error description: " . mysqli_error($link));
                                    
                                    
                                    }else{
                                        ?>
                                        <script>
                                            alert("Details Updated Successfully");
                                            window.location = "my_account.php";
                                    
                                            
                                            
                                            
                                        </script>
                                    
                                            <?php
                                    }
                                
                                
                                    
                                
                                
                                
                                
                                
                                        }
                                
                                
                                        ?>





                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                            
                                <img src="assets/img/cover.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/default-avatar.png" alt="..."/>

                                      <h4 class="title"> <?php echo $row["fname"]." ".$row["lname"];?><br />
                                         <small><?php echo "Student";?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo $row["email"]?> <br>
                                                    <?php echo $row["tp"]?> <br>
                                                    <?php echo $row["nic"]?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        



<?php 

include 'footer.php'

?>