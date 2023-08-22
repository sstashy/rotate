<?php
ob_start();
error_reporting(0);
session_start();
include("connect.php");
if (isset($_SESSION['key'])) {
    
}else{
    header("Location: /login.decart");
}

$key = $_SESSION['key'];
$angeris = $conn->query("SELECT * FROM users WHERE key_pas='{$key}'")->fetch();

$eklenentarih = $angeris['createddate'];
$bitistarih = $angeris['enddate'];
$tarih1 = strtotime($eklenentarih);
$tarih2 = strtotime($bitistarih);

$angerissayi = $conn->query("SELECT COUNT(*) FROM users WHERE role ='1' or role='2' or role='0'")->fetchColumn();

if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

  if ($angeris['banned']==1) {
    session_destroy();
    header("Location: login.decart");
    exit();
}

if ($angeris['security'] == 1) {
  
}else if ($angeris['ipadres'] != "$ip_address") {

  $kaydet = $conn->prepare("UPDATE users SET banned='1' WHERE key_pas = '{$key }'");
  $kaydet->execute();
     session_destroy(); 
     header("Location: login.decart");
    exit();
  
}


$sürebitiş = date('d.m.Y');

$shivas = $conn->query("SELECT * FROM users WHERE enddate='$sürebitiş'")->fetch();


if ($shivas['enddate'] == $sürebitiş) {
  $teamshivas = $conn->prepare("UPDATE users SET endkey='1' WHERE enddate='$sürebitiş'");
  $teamshivas->execute();

}

if ($angeris['endkey'] == 1) {
       session_destroy();
     header("Location: login.decart");
    exit();
}

if ($angeris['role'] == 0) {
    header("Location: index.decart");
    exit();
}
?>