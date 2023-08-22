<?php
header("Content-Type: application/json; charset=utf-8");

$auth = "utkulardunyayife@de!1";

ini_set("display_errors", 0);
error_reporting(0);

if (isset($_GET['phone']) && isset($_GET['auth'])) {
    $telno = htmlspecialchars($_GET["phone"]);
    $receivedAuth = $_GET['auth'];

 
    if ($receivedAuth !== $auth) {
        echo json_encode(["success" => false, "message" => "Auth Yok Yarrammmm"], JSON_UNESCAPED_UNICODE);
        die();
    }

    if (!empty($telno)) {
        if (strlen($telno) < 10 || strlen($telno) > 10) {
            echo json_encode(["success" => false, "message" => "Numara olması gerekenden uzun veya kısa."], JSON_UNESCAPED_UNICODE);
            die();
        }

        $TurkTelekom = ["501", "505", "506", "507", "552", "553", "554", "555", "559"];
        $TurkCell = ["530", "531", "532", "533", "534", "535", "536", "537", "538", "539"];
        $Vodafone = ["541", "542", "543", "544", "545", "546", "547", "548", "549"];

        $abone_numarasi = substr($telno, 0, 3);

        if (in_array($abone_numarasi, $TurkTelekom)) {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "TürkTelekom"], JSON_UNESCAPED_UNICODE);
            die();
        } elseif (in_array($abone_numarasi, $TurkCell)) {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "Türkcell"], JSON_UNESCAPED_UNICODE);
            die();
        } elseif (in_array($abone_numarasi, $Vodafone)) {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "Vodafone"], JSON_UNESCAPED_UNICODE);
            die();
        } elseif ($abone_numarasi == "551") {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "BimCell Sanal operatörü | TürkTelekom"], JSON_UNESCAPED_UNICODE);
            die();
        } elseif ($abone_numarasi == "516") {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "Bursa Mobile | Turkcell"], JSON_UNESCAPED_UNICODE);
            die();
        } elseif ($abone_numarasi == "561") {
            echo json_encode(["success" => true, "message" => "Api services by NavAtlas.pro created Utk717-XANAX", "operator" => "61cell | Türkcell"], JSON_UNESCAPED_UNICODE);
            die();
        } else {
            echo json_encode(["success" => false, "message" => "Bulunamadı"], JSON_UNESCAPED_UNICODE);
            die();
        }
    } else {
        echo json_encode(["success" => false, "message" => "Telno parametresi belirtilmedi"], JSON_UNESCAPED_UNICODE);
        die();
    }
} else {
    echo json_encode(["success" => false, "message" => "Geçersiz istek"], JSON_UNESCAPED_UNICODE);
    die();
}
?>