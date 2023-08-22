<?php
header("Content-Type: application/json; utf-8;");
require '../../server/connect.php';
require '../../server/control.php';
error_reporting(0);

if ($angeris['owner'] == 1) {
    
  if (isset($_POST)) {
    
   $duyuru = htmlspecialchars($_POST['text']);
   $eklenentarih = date('d.m.Y');
   $ekleyen = $angeris['key_ad'];

   $duyuruapi = $conn->prepare("INSERT INTO duyuru SET duyuruatan='$ekleyen',atılanduyuru='$duyuru',tarih='$eklenentarih'");
   $duyuruapi->execute();

   echo json_encode(["status" => "true"]);
   die();
  }

}else{
    echo json_encode(["status" => "false", "error" => "owner error"]);
}



?>