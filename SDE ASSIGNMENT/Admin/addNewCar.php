<?php
            $model=$_POST["model"];
            $number=$_POST["number"];
            $seat=$_POST["seat"];
            $rent=$_POST["rent"];
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql="INSERT INTO avcar (model,number,seat,rent) VALUES ('$model','$number','$seat','$rent')";
            if ($conn->query($sql) === TRUE) {
                        echo 1;
            } else {
                        // echo "Error: " . $sql . "<br>" . $conn->error;
                        echo 0;
            }
            mysqli_close($conn);
?>