<?php
include 'connection.php';

$id = $_GET['id'];



if(!mysqli_query($link," UPDATE student SET exam = 'Fail' WHERE sid = $id"))
                                    
                                    {
                                    echo("Error description: " . mysqli_error($link));
                                    
                                    
                                    }else{
                                        header('Location: results.php');
                                    }


?>