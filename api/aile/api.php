<?php
include("../../server/control.php");
error_reporting(0);
$baglanti = new mysqli('localhost', 'root', '', '101m');
mysqli_query($baglanti,"SET CHARACTER SET 'utf8'");
if (isset($_POST)) {
    $tc = $_POST['tc'];
    $angerisnewapi = $baglanti->prepare("SELECT * FROM 101m");

  $sql = "SELECT * FROM 101m WHERE TC = '$tc'";
    $result = $baglanti->query($sql);

 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            echo "<tr>
                <td> Kendisi </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
            </tr>";
        
        
            $sqlcocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultcocugu = $baglanti->query($sqlcocugu);
        
            $sqlkardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
            $resultkardesi = $baglanti->query($sqlkardesi);
            $sqlbabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
            $resultbabasi = $baglanti->query($sqlbabasi);
            
            $sqlannesi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
            $resultannesi = $baglanti->query($sqlannesi);
        
        
            while($row = $resultkardesi->fetch_assoc()) {
        
                 echo "<tr>
                    <td> Kardeşi </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
                </tr>";
                 $sqlkendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultkendikendicocugu = $baglanti->query($sqlkendikendicocugu);    
                while($row = $resultkendikendicocugu->fetch_assoc()) {
                    echo "<tr>
                        <td> Kardeşinin Çocuğu </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
        
                }
                
            }
        
            while ($row = $resultbabasi->fetch_assoc()) {
                 echo "<tr>
                    <td> Babası </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
                </tr>";
            }
            while ($row = $resultannesi->fetch_assoc()) {
                 echo "<tr>
                    <td> Annesi </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
                </tr>";
            }
            while ($row = $resultcocugu->fetch_assoc()) {
                 echo "<tr>
                    <td>Çocuğu </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
                </tr>";
                 $sqltorunu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resulttorunu = $baglanti->query($sqltorunu);    
                while($row = $resulttorunu->fetch_assoc()) {
                    echo "<tr>
                        <td> Torunu </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
        
                }
        
               
            }
        
           
        
            }
    }else{
        echo false;
    }

}else{
    echo false;
}

?>