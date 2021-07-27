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
 

 <style>
.sub{
    color:white;
    font-size: 15px;
    text-align: left;
}
.box1 {
    display: block;
  width: 18rem;
  height: 15rem;
  border: 2px solid #6eba6a;
  padding: 20px;
  margin: 30px;
}
.box2 {
    display: block;
  width: 18rem;
  height: 15rem;
  border: 2px solid #c93c3c;
  padding: 20px;
  margin: 30px;
}

.box3 {
    display: block;
  width: 18rem;
  height: 15rem;
  border: 2px solid #d1bd5a;
  padding: 20px;
  margin: 30px;
}

.box4 {
    display: block;
  width: 18rem;
  height: 15rem;
  border: 2px solid #3152f7;
  padding: 20px;
  margin: 30px;
}


.container > div {
    float: left;
}
.head1{
    color:#6eba6a;
    font-size: 50px;
    text-align: center;
}
</style>



<div class="container">

<div class="col-1 box1">
   <p class ="sub">Total Users</p>
   <p class="head1"><?php echo $row1['count_users']; ?></p>
</div>

<div class="col-1 box2">
    <p class ="sub">Total Students</p>
    <p class="head1"><?php echo $row2['count_student']; ?></p>
</div>

<div class="col-1 box3">
   <p class ="sub">Total Advisors</p>
  <p class="head1"><?php echo $row3['count_advisors']; ?></p>
</div>

<div class="col-1 box4">
    <p class ="sub">Total Admins</p>
    <p class="head1"><?php echo $row4['count_admins']; ?></p>
</div>

</div>

<?php 

include 'footer.php'

?>