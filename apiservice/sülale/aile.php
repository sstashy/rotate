<?php include 
require("db.php");
error_reporting(0);
$data=array();
$baglanti = new mysqli('localhost', 'root', '', '101milyon');

include 'cyberinamcigi.php';

$auth_key = "katana";
if ($_GET['auth'] != $auth_key) {
    
    die ();
} else
if (isset($_GET["tcno"])) {
 $str = $_GET["tcno"];
 $sth = $baglanti->prepare("SELECT * FROM `101m`");
 $sql = "SELECT * FROM `101m` WHERE `TC` = '$str'";
 $result = $baglanti->query($sql);
 while($row = $result->fetch_assoc()) {
    $ekle=["yakinlik" => 'Kendisi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
    $data[]=$ekle;
    $sqlcocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
    $resultcocugu = $baglanti->query($sqlcocugu);
    $sqlkardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
    $resultkardesi = $baglanti->query($sqlkardesi);
    $sqlbabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
    $resultbabasi = $baglanti->query($sqlbabasi);
    $sqlanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
    $resultanasi = $baglanti->query($sqlanasi);
    $sqlkendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
    $resultkendicocugu = $baglanti->query($sqlkendicocugu);
    while($row = $resultkendicocugu->fetch_assoc()) {
        $ekle=["yakinlik" => 'Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;
        $sqlkendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
        $resultkendikendicocugu = $baglanti->query($sqlkendikendicocugu);        
    }
    while($row = $resultkardesi->fetch_assoc()) {
        $ekle=["yakinlik" => 'Kardeşi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;
        $sqlkardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
        $resultkardescocugu = $baglanti->query($sqlkardescocugu);
    }
    while($row = $resultbabasi->fetch_assoc()) {
        $ekle=["yakinlik" => 'Babası',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;

        $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
        $resultbabakardesi = $baglanti->query($sqlbabakardesi);
        $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
        $resultbabababasi = $baglanti->query($sqlbabababasi);
        $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
        $resultbabaanasi = $baglanti->query($sqlbabaanasi);  
  }
}
while($row = $resultanasi->fetch_assoc()) {
    $ekle=["yakinlik" => 'Annesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
    $data[]=$ekle;
    $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
    $resultannekardesi = $baglanti->query($sqlannekardesi);
    $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
    $resultannebabasi = $baglanti->query($sqlannebabasi);
    $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
    $resultanneanasi = $baglanti->query($sqlanneanasi);
}
}   
    $varmi=array('success'=>'true');
    echo json_encode($data);
?>