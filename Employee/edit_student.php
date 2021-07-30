<?php 
include 'header.php';
include 'connection.php';

$id = $_GET['id'];

$res=mysqli_query($link,"SELECT * FROM student WHERE sid = $id");
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
                                            <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control"  placeholder="Email" name="email" value=<?php echo $row["email"];?> required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="fname"  value=<?php echo $row["fname"];?> required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Fisr Name</label>
                                                <input type="text" class="form-control" name="lname" value=<?php echo $row["lname"];?> placeholder="Last Lane"required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" class="form-control" placeholder="Phone" name="tp"  value=<?php echo $row["tp"];?> required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" name="address" value=<?php echo $row["address"];?> required>
                                            </div>
                                        </div>
                                    </div>

                             

                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>NIC</label>
                                                <input type="text" class="form-control" placeholder="nic" name="nic"  value=<?php echo $row["nic"];?> required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <input type="submit" class="btn btn-info btn-fill " name="submit1" value ="Update">
                                    <div class="clearfix"></div>
                                </form></br>
                                
                                <a href="delete.php?id=<?php echo $id; ?>"><button class="btn btn-danger btn-fill">Delete </button> </a>
                                
                                    
                                            


                                <!-- SQL query -->

                                    <?php
                                    if(isset($_POST["submit1"])){
                                        

                                        if(!mysqli_query($link," UPDATE student SET fname = '$_POST[fname]', lname = '$_POST[lname]',email = '$_POST[email]',nic = '$_POST[nic]', address = '$_POST[address]', tp = '$_POST[tp]' WHERE sid = $id"))
                                    
                                    {
                                    echo("Error description: " . mysqli_error($link));
                                    
                                    
                                    }else{
                                        ?>
                                        <script>
                                            alert("Details Updated Successfully");
                                            window.location = "edit_student.php?id=<?php echo $id ?>";
                                    
                                            
                                            
                                            
                                        </script>
                                    
                                            <?php
                                    }
                                
                                
                                    
                                
                                
                                
                                
                                
                                        }
                                
                                
                                        ?>





                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>


        



<?php 

include 'footer.php'

?>