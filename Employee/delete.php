<?php
include 'connection.php';
//delete student
$stringValue = $_GET['id'];

    if (!mysqli_query($link,"DELETE FROM student WHERE sid=$stringValue")){
        mysqli_error($link);
    }

    ?>
    <script>
       alert("Student Deleted Successfully");
         window.location = "view_student.php";

    </script>
    <?php

?>