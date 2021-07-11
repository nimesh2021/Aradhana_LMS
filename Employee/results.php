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
                                <h4 class="title">Results</h4>
                                <p class="category">Results</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>SID</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>
                                        <th>Result</th>
                                        <th>Action</th>
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row=mysqli_fetch_array($res))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; ?> <a href="edit_student.php?id=<?php echo $row["sid"]; ?>"style="color: Blue;"><?php echo  $row["sid"];  ?></a> <?php   echo "</td>";
                                        	echo "<td>"; ?> <a href="edit_student.php?id=<?php echo $row["sid"]; ?>"style="color: Blue;"><?php echo  $row["fname"];  ?></a> <?php   echo "</td>";
                                        	echo "<td>"; echo $row["lname"]; echo "</td>";
                                            echo "<td>"; echo $row["exam"]; echo "</td>";
                                            echo "<td>"; ?> <a href="results_pass.php?id=<?php echo $row["sid"]; ?>"style="color: Blue;"><?php echo  "<div class='pass'>PASS</div>";  ?></a> <a href="results_fail.php?id=<?php echo $row["sid"]; ?>"style="color: RED;"><?php echo  "<div class='fail'>FAIL</div>";  ?></a> <a href="results_clear.php?id=<?php echo $row["sid"]; ?>"style="color: GREEN;"><?php echo  "<div class='clear'>CLEAR</div>";  ?></a> <?php   echo "</td>";
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