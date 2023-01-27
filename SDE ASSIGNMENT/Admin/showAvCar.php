<?php
            $conn=mysqli_connect("localhost","root","","rentcar")or die("Connection fail");
            $sql="SELECT * FROM avcar";
            $result=mysqli_query($conn,$sql) or die("Sql not run");
            $output="";
            if(mysqli_num_rows($result)>0){
                        $s=1;
                        while($row=mysqli_fetch_assoc($result)){
                                    $output.="
                                    <tr>
                                                <td>$s</td>
                                                <td>{$row["model"]}</td>
                                                <td>{$row["number"]}</td>
                                                <td>{$row["seat"]}</td>
                                                <td>{$row["rent"]}</td>
                                    </tr>";
                                    $s++;
                        }
                        mysqli_close($conn);
            }
            echo $output;
?>