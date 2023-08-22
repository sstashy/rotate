<?php
error_reporting(0);
include("../../server/control.php");
if (isset($_POST)) {

    echo true;
}


$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$olayyeri = $_POST["olayyeri"];
$il = $_POST['il'];
$gsm =$_POST['telno'];
$ilce = $_POST['ilce'];
$konu = $_POST['konu'];
$beyan = $_POST['beyan'];


    $ch = curl_init();
    curl_setopt_array($ch , array(

        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://onlineislemler.egm.gov.tr/sayfalar/ihbar.aspx', // CODED BY İnfolanmam :)
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => [
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$DropDownListIl' => "$il",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$DropDownListIlce' => "$ilce",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_ad' => "$ad",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_soyad' => "$soyad",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_telefon' => "$gsm",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_email' => "infolanmam@gmail.com",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_konu' => "$konu",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_olayyeri' => "$olayyeri",
            'ctl00$ctl37$g_866b0f8a_3abe_4117_93d8_a540423922f8$ctl00$txt_aciklama' => "$beyan"
        ],

        CURLOPT_FOLLOWLOCATION => 1,
    ));
       $resp = curl_exec($ch);
        curl_close($ch);
        echo $resp;
       */

?>