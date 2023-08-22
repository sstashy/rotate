<?php
include("../../server/control.php");

$baglanti = new mysqli("localhost", "root", "", "secmen");
mysqli_query($baglanti,"SET CHARACTER SET 'utf8'");

error_reporting(0);

if (isset($_POST)) {
 $ad = htmlspecialchars($_POST['name']);
 $soyad = htmlspecialchars($_POST['surname']);
 $il = htmlspecialchars($_POST['nufus']);


  if (!empty($ad) && !empty($soyad)) {
    $sql = "SELECT * FROM secmen WHERE ADI='$ad' AND SOYADI='$soyad'";
    $result = $baglanti->query($sql);
  }
  if (!empty($ad) && !empty($soyad) && !empty($il)) {
    $sql = "SELECT * FROM secmen WHERE ADI='$ad' AND SOYADI='$soyad' AND NUFUSILCESI='$il'";
    $result = $baglanti->query($sql);
  }
  if (!empty($ad) && !empty($il)) {
    $sql = "SELECT * FROM secmen WHERE ADI='$ad' AND NUFUSILI='$il'";
    $result = $baglanti->query($sql);
  }

   $resultangeris = array();
   if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["ANAADI"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["DOGUMYERI"] . "</td>
                    <td>" . $row["CINSIYETI"] . "</td>
                    <td>" . $row["NUFUSILI"] . "</td>
                    <td>" . $row["NUFUSILCESI"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
  </tr>";
       }
   }else{
    echo true;
   }

}else{
  echo true;
}
