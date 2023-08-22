<?php
session_start();
require '../../server/connect.php';
error_reporting(0);
if ($_POST) {
$tarih = date('d.m.Y');
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

    $keyad = htmlspecialchars($_POST['keyad'],ENT_QUOTES);
    $key = htmlspecialchars($_POST['key'],ENT_QUOTES);
   $sorgu = $conn->query("SELECT * FROM users WHERE key_pas='$key'")->fetch();
   if ($sorgu['key_pas'] != $key) {
    $kaydet = $conn->prepare("INSERT INTO users SET key_ad='$keyad', key_pas='$key', role='0',createddate='$tarih',enddate='',ipadres='$ip_address',security='',endkey='',owner='',banned='',createdadmin='Kayıt oldu'");
    $kaydet->execute();
    echo true;
   }else{
    echo false;
   }
    
}