<?php
include 'header.php';
include 'connection.php';

$date_today = date("Y-m-d");



$res=mysqli_query($link,"SELECT s.shid AS shid,s.date AS date, s.time1 AS time1, s.group1 AS group1,a.fname AS fname, a.lname AS lname from employee a, schedule s 
WHERE a.aid=s.aid");

$res1=mysqli_query($link,"SELECT s.shid AS shid,s.date AS date, s.time1 AS time1, s.group1 AS group1,a.fname AS fname, a.lname AS lname from employee a, schedule s 
WHERE a.aid=s.aid AND s.date >= '$date_today'");
?>
<title>View Schedules</title>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Schedules</h4>
                                <p class="category">All Schedules</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>SHID</th>
                                    	<th>Date</th>
                                    	<th>Time</th>
                                        <th>Group</th>
                                    	<th>Advisor</th>
                                    	
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row=mysqli_fetch_array($res))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; echo $row["shid"]; echo "</td>";
                                        	echo "<td>"; echo $row["date"]; echo "</td>";
                                        	echo "<td>"; echo $row["time1"]; echo "</td>";
                                        	echo "<td>"; echo $row["group1"]; echo "</td>";
                                            echo "<td>"; echo $row["fname"]." ".$row["lname"]; echo "</td>";
                                            
                                       echo "</tr>";
                                        
                                     }
                                        ?>
                                    </tbody>
                                </table>

                            </div>


                            <div class="header">
                                <h4 class="title">Upcoming</h4>
                                <p class="category">Upcoming Schedules</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>SHID</th>
                                    	<th>Date</th>
                                    	<th>Time</th>
                                        <th>Group</th>
                                    	<th>Advisor</th>
                                    	
                                    	
                                    </thead>
                                    <tbody>

                                    <?php
                                    while($row1=mysqli_fetch_array($res1))
                                     {
                                       echo "<tr>";
                                            echo "<td>"; echo $row1["shid"]; echo "</td>";
                                        	echo "<td>"; echo $row1["date"]; echo "</td>";
                                        	echo "<td>"; echo $row1["time1"]; echo "</td>";
                                        	echo "<td>"; echo $row1["group1"]; echo "</td>";
                                            echo "<td>"; echo $row1["fname"]." ".$row1["lname"]; echo "</td>";
                                            
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