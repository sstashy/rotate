<?php
error_reporting(0);
include("../../server/control.php");
        if(isset($_POST)) {
            $ip_bilgi = file_get_contents('http://ip-api.com/json/'.$_POST['ip']);
            $json_coz = json_decode($ip_bilgi, true);

        }


            ?>

<td><?php echo $json_coz['query']; ?> </td>

<td><?php echo $json_coz['country']; ?> </td>

<td><?php echo $json_coz['countryCode']; ?> </td>

<td><?php echo $json_coz['regionName']; ?> </td>

<td><?php echo $json_coz['region']; ?> </td>

<td><?php echo $json_coz['city']; ?> </td>

<td><?php echo $json_coz['zip']; ?> </td>

<td><?php echo $json_coz['lat']; ?> </td>

<td><?php echo $json_coz['lon']; ?> </td>

<td><?php echo $json_coz['timezone']; ?> </td>

<td><?php echo $json_coz['isp']; ?> </td>
  
<td><?php echo $json_coz['org']; ?> </td>

<td><?php echo $json_coz['as']; ?> </td> 
<td><?php  echo '"></script>?>' ; ?>