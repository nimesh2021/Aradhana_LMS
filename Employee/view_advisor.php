<?php
include 'header.php';
include 'connection.php';

$res=mysqli_query($link,"SELECT * FROM employee  WHERE role ='Advisor'");
?>
<title>View advisor</title>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Advisor</h4>
                                <p class="category">All Users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>
                                        <th>Date of Birth</th>
                                    	<th>Gender</th>
                                    	<th>Email</th>
                                        <th>Contact No</th>
                                    	<th>Address</th>
                                        <th>NIC/Passport</th>
                                        <th>Role</th>
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row=mysqli_fetch_array($res))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; echo $row["aid"]; echo "</td>";
                                            echo "<td>"; echo $row["fname"]; echo "</td>";     
                                            echo "<td>"; echo $row["lname"]; echo "</td>";
                                        	echo "<td>"; echo $row["dob"]; echo "</td>";
                                            echo "<td>"; echo $row["gender"]; echo "</td>";
                                            echo "<td>"; echo $row["email"]; echo "</td>";
                                            echo "<td>"; echo $row["tp"]; echo "</td>";
                                            echo "<td>"; echo $row["address"]; echo "</td>";
                                            echo "<td>"; echo $row["nic"]; echo "</td>";
                                            echo "<td>"; echo $row["role"]; echo "</td>";
                                       echo "</tr>";
                                        
                                     }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>









<?php
include 'footer.php';
?>