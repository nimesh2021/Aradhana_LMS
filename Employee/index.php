<?php 

include 'header.php';
include 'connection.php';
//sql queries to get counts
//users
$res1 = mysqli_query($link,"SELECT COUNT(aid) AS count_users FROM employee WHERE role = 'User'");
$row1 = mysqli_fetch_array($res1);

//students
$res2 = mysqli_query($link,"SELECT COUNT(sid) AS count_student FROM student");
$row2 = mysqli_fetch_array($res2);

//advisors
$res3 = mysqli_query($link,"SELECT COUNT(aid) AS count_advisors FROM employee WHERE role ='Advisor'");
$row3 = mysqli_fetch_array($res3);

//admins
$res4 = mysqli_query($link,"SELECT COUNT(aid) AS count_admins FROM employee WHERE role ='Admin'");
$row4 = mysqli_fetch_array($res4);

$res5 = mysqli_query($link,"SELECT count(shid) as count_sh  FROM schedule");
$row5 = mysqli_fetch_array($res5);


?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
<style>
        body {
          margin: 0;
          padding: 0;
        }
  
        #map {
          position: absolute;
          top: 60px;
          left: 67%;
          bottom: 0;
          height: 897px;
          width: 530px;
          
        }
  
        .marker {
          background-image: url('assets/img/marker.png');
          background-size: cover;
          width: 50px;
          height: 50px;
          border-radius: 50%;
          cursor: pointer;
          }
  
          .mapboxgl-popup {
              max-width: 200px;
              }
  
              .mapboxgl-popup-content {
              text-align: center;
              font-family: 'Open Sans', sans-serif;
              }

              .size1 {
                font-size: 50px;
              }
   
        
        
  
      </style>









 <!--- your code start-->
 <div id="map"></div>

    <div style="top:600px; position:static;">
        <div class="card border-success bg-transparent mb-3" style="width: 18rem; height: 15rem;  position:absolute; left:3%;">
        
        <div class="card-body text-success">
            <h5 class="card-title">No of Students</h5>
            <div class="size1"><center><?php echo $row2["count_student"];?></center></div>
        </div>
        </div>

        <div class="card border-primary bg-transparent mb-6" style="width: 18rem; height: 15rem; position:absolute; left:20%;">

        <div class="card-body text-primary">
            <h5 class="card-title">No of Users</h5>
            <div class="size1"><center><?php echo $row1["count_users"];?></center></div>
        </div>
            </div>

            <div class="card border-danger bg-transparent mb-6" style="width: 18rem; height: 15rem; position:absolute; left:36%;">

        <div class="card-body text-danger">
            <h5 class="card-title">No of Advisors</h5>
            <div class="size1"><center><?php echo $row3["count_advisors"];?></center></div>
        </div>
            </div>

    </div>


    <div style="top:600px; position:static ">
        <div class="card border-warning bg-transparent mb-3" style="width: 18rem; height: 15rem; position:absolute; left:53%;">
        
        <div class="card-body text-warning">
            <h5 class="card-title">No of Admins</h5>
            <div style="font-size: 35px;"><center><?php echo $row4["count_admins"];?></center></div>
        </div>
        </div>

        <div class="card border-info bg-transparent mb-6" style="width: 18rem; height: 15rem; position:absolute; left:70%;">

        <div class="card-body text-info">
            <h5 class="card-title">No of Schedules</h5>
            <div style="font-size: 35px;"><center><?php echo $row5["count_sh"];?></center></div>
        </div>
            </div>

           

    </div>





        
            <!--- your code ends-->


<?php 

include 'footer.php'

?>