<?php
            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $email=$_POST["email"];
            $pass=$_POST["password"];
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql="INSERT INTO adminreg (localname,phone,email,pass) VALUES ('$name','$phone','$email','$pass')";
            if ($conn->query($sql) === TRUE) {
                        echo 1;
            } else {
                        // echo "Error: " . $sql . "<br>" . $conn->error;
                        echo 0;
            }
            mysqli_close($conn);
?>