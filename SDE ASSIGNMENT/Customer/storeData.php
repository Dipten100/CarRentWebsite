<?php
            $id=$_POST["id"];
            $email=$_POST["email"];
            $Start=$_POST["StartDate"];
            $End=$_POST["EndDate"];
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql="SELECT * FROM avcar WHERE no='$id'";
            $result=mysqli_query($conn,$sql) or die("Sql not run");
            if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                                    $model=$row["model"];
                                    $number=$row["number"];
                                    $seat= $row["seat"];
                                    $rent=$row["rent"];
                        }
                        $sql2="INSERT INTO bookdetails (model,number,seat,rent,startDate,endDate,email) VALUES ('$model','$number','$seat','$rent','$Start','$End','$email')";
                        $result2=mysqli_query($conn,$sql2) or die("Sql2 not run");
            }
            // $sql3="SELECT * FROM bookdetails WHERE email='$email'";
            // $result3=mysqli_query($conn,$sql3) or die("Sql3 not run");
            // $output="";
            // $sl=1;
            // if(mysqli_num_rows($result3)>0){
            //             while($row=mysqli_fetch_assoc($result3)){
            //                         $output.="<tr>
            //                                                 <th scope='row>$sl</th>
            //                                                 <td>{$row["model"]}</td>
            //                                                 <td>{$row["number"]}</td>
            //                                                 <td>{$row["seat"]}</td>
            //                                                 <td>{$row["rent"]}</td>
            //                                                 <td>{$row["startDate"]}</td>
            //                                                 <td>{$row["endDate"]}</td>
            //                                     </tr>";
            //                                     $sl++;
            //             }
            //             mysqli_close($conn);
            // }
            // echo $output;
?>