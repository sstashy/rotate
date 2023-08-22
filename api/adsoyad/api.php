<?php
include("../../server/control.php");

$baglanti = new mysqli("localhost", "root", "", "101m");
mysqli_query($baglanti,"SET CHARACTER SET 'utf8'");

error_reporting(0);

if (isset($_POST)) {
 $ad = htmlspecialchars($_POST['name']);
 $soyad = htmlspecialchars($_POST['surname']);
 $il = htmlspecialchars($_POST['nufus']);


  if (!empty($ad) && !empty($soyad) && empty($il)) {
    $sql = "SELECT * FROM 101m WHERE ADI='$ad' AND SOYADI='$soyad'";
    $result = $baglanti->query($sql);
  }
  if (!empty($ad) && !empty($soyad) && !empty($il)) {
    $sql = "SELECT * FROM 101m WHERE ADI='$ad' AND SOYADI='$soyad' AND NUFUSIL='$il'";
    $result = $baglanti->query($sql);
  }

   $resultangeris = array();
   if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
      <td>" . $row["TC"] . "</td>
      <td>" . $row["ADI"] . "</td>
      <td>" . $row["SOYADI"] . "</td>
      <td>" . $row["DOGUMTARIHI"] . "</td>
      <td>Telegram @infolanmam ❤️</td>
  </tr>";
       }
   }else{
    echo false;
   }

}else{
  echo false;
}
