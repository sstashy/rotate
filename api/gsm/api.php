<?php
include("../../server/control.php");
error_reporting(0);
                     $aangeris = new mysqli('localhost', 'root', '', '116m');
                     mysqli_query($aangeris,"SET CHARACTER SET'utf8'");
                      if (isset($_POST)) {
                      $tc = $_POST['tc'];
                      $aanger = "SELECT * FROM illegalplatform_hackerdede1_gsm";
                      $sql = "SELECT * FROM illegalplatform_hackerdede1_gsm WHERE TC ='$tc'";
                      $result = $aangeris->query($sql);

                      if ($result->num_rows < 0 ) {
                        echo false;
                      }
                       while ($row = $result->fetch_assoc()) {
                   
                    echo "<tr>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["GSM"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
                      </tr>";

                     }
                         
                       }else{
                        echo false;
                       }

                    


                      ?>