<?php 

$con = new mysqli("localhost", "root", "", "101milyon");

if ($con->connect_errno > 0) {
    die("<b>Veritabanına bağlanamadık amk<br><br>Hata Nedeni:</b>" . $con->connect_error);
}

?>