<?php
                   $password = 12345678;
                   if(isset($_POST["submit1"])){

                    if (!mysqli_query($link,"INSERT into student (fname,lname,dob,gender,email,tp,address,nic,password) values('$_POST[fname]','$_POST[lname]','$_POST[dob1]','$_POST[gender]','$_POST[email]','$_POST[phone]','$_POST[address1]','$_POST[nic]','$password')")){
                        mysqli_error($link);
                    }

                    ?>

                    <script>
                    alert("Student Added!!");
                     </script>


                    <?php
                       


                   }
                   ?>