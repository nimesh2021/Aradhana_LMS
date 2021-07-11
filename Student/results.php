<?php
include 'header.php';
include 'connection.php';

$res=mysqli_query($link,"SELECT * FROM student WHERE sid ='$_SESSION[sid]'");
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
                                        
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row=mysqli_fetch_array($res))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; echo $row["sid"]; echo "</td>";
                                            echo "<td>"; echo $row["fname"]; echo "</td>";
                                            echo "<td>"; echo $row["lname"]; echo "</td>";
                                            echo "<td>"; echo $row["exam"]; echo "</td>";
                                            
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