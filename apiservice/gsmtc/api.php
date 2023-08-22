<?php 
require("cyberinamcigi.php");
header ('Content-type: text/html; charset=utf-8');
error_reporting(0);
include 'db.php';

$auth_key = "katana";
if ($_GET['auth'] != $auth_key) {
    
    die ();
} else {
    if (isset($_GET['gsm'])) {
        $gsm = $_GET['gsm'];
       
        $sql = "SELECT * FROM 116m WHERE GSM='$gsm'";
    }

    $cyberresult = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

    $cyberarray = array();
        while($cyberrow = mysqli_fetch_assoc($cyberresult)) {
            $cyberarray[] = $cyberrow;
        }
    
    

        
echo json_encode($cyberarray, JSON_UNESCAPED_UNICODE);

}
?>

























