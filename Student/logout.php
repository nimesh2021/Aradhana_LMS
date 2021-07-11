<?php
session_start();

unset($_SESSION['sid']);
UNSET($_SESSION['email']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['nic']);
unset($_SESSION['tp']);
unset($_SESSION['package']);
unset($_SESSION['group1']);





header('Location: login.php');

?>