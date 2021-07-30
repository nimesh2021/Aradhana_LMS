<?php
session_start();

unset($_SESSION['aid']);
UNSET($_SESSION['email']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['tp']);
unset($_SESSION['role']);



header('Location: ../login.php');

?>