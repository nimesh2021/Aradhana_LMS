<?php
include 'header.php';
include 'connection.php';

$res=mysqli_query($link,"SELECT * FROM student");
?>
<title>View Users</title>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student</h4>
                                <p class="category">All Users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>SID</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>
                                        <th>Date of Birth</th>
                                    	<th>Gender</th>
                                    	<th>Email</th>
                                        <th>Contact No</th>
                                    	<th>Address</th>
                                        <th>NIC/Passport</th>
                                        <th>Package</th>
                                        <th>Group</th>
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row=mysqli_fetch_array($res))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; ?> <a href="edit_student.php?id=<?php echo $row["sid"]; ?>"style="color: Blue;"><?php echo  $row["sid"];  ?></a> <?php   echo "</td>";
                                        	echo "<td>"; ?> <a href="edit_student.php?id=<?php echo $row["sid"]; ?>"style="color: Blue;"><?php echo  $row["fname"];  ?></a> <?php   echo "</td>";
                                        	echo "<td>"; echo $row["lname"]; echo "</td>";
                                        	echo "<td>"; echo $row["dob"]; echo "</td>";
                                            echo "<td>"; echo $row["gender"]; echo "</td>";
                                            echo "<td>"; echo $row["email"]; echo "</td>";
                                            echo "<td>"; echo $row["tp"]; echo "</td>";
                                            echo "<td>"; echo $row["address"]; echo "</td>";
                                            echo "<td>"; echo $row["nic"]; echo "</td>";
                                            echo "<td>"; echo $row["package"]; echo "</td>";
                                            echo "<td>"; echo $row["group1"]; echo "</td>";
                                       echo "</tr>";
                                        
                                     }
                                        ?>
                                    </tbody>
                                </table>
                                
                                

                            </div>
                            
                        </div>
                        <button class="btn btn-info btn-fill" onclick="window.location='add_users.php'">Add a new Student</button>
                    </div>


                    


                </div>
            </div>
        </div>









<?php
include 'footer.php';
?>