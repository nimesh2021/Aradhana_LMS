<?php
include 'header.php';
include 'connection.php';
$res=mysqli_query($link,"SELECT * FROM employee  WHERE role ='Advisor'");
$res1=mysqli_query($link,"SELECT aid FROM employee  WHERE role ='Advisor'");
?>
<title>LMS|Add Schedule</title>


<div class="content" style="left:100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add a new Schedule</h4>
                            </div>
                            <div class="content">
                                <form method="POST" id = "form1" name="form1">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="Date" class="form-control" placeholder="" name="date1" required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Time</label>
                                                <input type="Time" class="form-control" placeholder="" name="time1" required>
                                            </div>
                                        </div>
                                        
                                    </div>

                                   

                                    

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Group</label></br>
                                                <select id="group1" name="group1" >
                                                <option  value="Morning">Morning</option>
                                                <option  value="Mid-Day">Mid-Day</option>
                                                <option  value="Evening">Evening</option>
                                                
                                                </Select>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    

                                    <!--- test starts -->

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Advisor</label></br>
                                                <select id="aid" name="aid" >
                                                <?php
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<option value=".$row["aid"].">".$row["fname"]."</option>";
                                                }
                                                ?>
                                                
                                                
                                                
                                                </Select>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <!--- test ends -->

                                    <input type="submit" class="btn btn-info btn-fill " value="Submit" name = "submit1" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                   <?php
                   
                   if(isset($_POST["submit1"])){

                    if (!mysqli_query($link,"INSERT into schedule (date,time1,group1,aid) values('$_POST[date1]','$_POST[time1]','$_POST[group1]','$_POST[aid]')")){
                        echo mysqli_error($link);
                    }

                    ?>

                    <script>
                    alert("Schedule Added!!");
                     </script>


                    <?php
                       


                   }
                   ?>

                </div>
            </div>
        </div>


        





<?php
include 'footer.php';
?>