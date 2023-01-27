<?php
            $email=$_POST["email"];
            $pass=$_POST["password"];
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql="SELECT * FROM adminreg WHERE email='$email' and pass='$pass'";
            $result=mysqli_query($conn,$sql) or die("Sql not run");
            if (mysqli_num_rows($result) > 0) {
                        // echo "success";
                        echo 1;
            } else {
                        // echo "0 results";
                        echo 0;
            }
            mysqli_close($conn);
?>