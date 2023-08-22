<?php
header("Content-Type: application/json; utf-8;");
require '../../server/connect.php';
require '../../server/control.php';
error_reporting(0);


if ($angeris['owner'] == 1) {

    if (isset($_POST)) {
        $ekleyen = $angeris['key_ad'];
        $eklenentarih = date('d.m.Y');
        $kad = htmlspecialchars($_POST['k_ad']);
        $kpas = htmlspecialchars($_POST['k_pas']);
    
       $kontrol = $conn->query("SELECT * FROM users WHERE key_pas='$kpas'")->fetch();
    
       if ($kontrol["key_pas"] == $kpas) {
    
        echo json_encode(["status" => "false"]);
        die();
        
       }else{
    
        $adminekle = $conn->prepare("INSERT INTO users SET key_ad='$kad',key_pas='$kpas',role='1',createddate='$eklenentarih',enddate='0',ipadres='0',security='1',endkey='0',owner='0',banned='0',createdadmin='$ekleyen'");
        $adminekle->execute();
        if ($adminekle == true) {
    
            echo json_encode(["status" => "true", "k_ad" => $kad, "k_pas" => $kpas]);
            die();
        }
       }
    }
   
}else{
    echo json_encode(["status" => "false", "error" => "owner error"]);
    die();
}

?>