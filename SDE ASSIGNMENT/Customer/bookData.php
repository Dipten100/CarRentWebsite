<?php
            $email=$_POST["email"];
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql3="SELECT * FROM bookdetails WHERE email='$email'";
            $result3=mysqli_query($conn,$sql3) or die("Sql3 not run");
            $output="";
            $sl=1;
            if(mysqli_num_rows($result3)>0){
                        while($row=mysqli_fetch_assoc($result3)){
                                    $output.="<tr>
                                                            <th scope='row>$sl</th>
                                                            <td>{$row["model"]}</td>
                                                            <td>{$row["number"]}</td>
                                                            <td>{$row["seat"]}</td>
                                                            <td>{$row["rent"]}</td>
                                                            <td>{$row["startDate"]}</td>
                                                            <td>{$row["endDate"]}</td>
                                                </tr>";
                                                $sl++;
                        }
                        mysqli_close($conn);
            }
            echo $output;
?>