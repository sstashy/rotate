<?php 
require("cyberinamcigi.php");
header ('Content-type: text/html; charset=utf-8');
error_reporting(0);
include 'db.php';


$auth_key = "vithobababizipavyonagotur";
if ($_GET['auth'] != $auth_key) {
    
    die ();
} else {
    if (isset($_GET['tc'])) {
        $tc = $_GET['tc'];
       
        $sql = "SELECT * FROM 116m WHERE TC='$tc'";
    }

    $cyberresult = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

    $cyberarray = array();
        while($cyberrow = mysqli_fetch_assoc($cyberresult)) {
            $cyberarray[] = $cyberrow;
        }
    
    

        
echo json_encode($cyberarray, JSON_UNESCAPED_UNICODE);

}
?>

























