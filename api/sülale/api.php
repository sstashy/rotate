﻿<?php
include("../../server/control.php");
error_reporting(0);
$baglanti = new mysqli("localhost", "root", "", "101m");
mysqli_query($baglanti,"SET CHARACTER SET 'utf8'");

if (isset($_POST)) {
   $str = $_POST["tc"];
    $sth = $baglanti->prepare("SELECT * FROM `101m`");
$sql = "SELECT * FROM `101m` WHERE `TC` = '$str'";
$result = $baglanti->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td> KENDİSİ </td>
                <td>" . $row["TC"] . "</td>
                <td>" . $row["ADI"] . "</td>
                <td>" . $row["SOYADI"] . "</td>
                <td>" . $row["DOGUMTARIHI"] . "</td>
                <td>" . $row["ANNEADI"] . "</td>
                <td>" . $row["ANNETC"] . "</td>
                <td>" . $row["BABAADI"] . "</td>
                <td>" . $row["BABATC"] . "</td>
                <td>" . $row["NUFUSIL"] . "</td>
                <td>" . $row["NUFUSILCE"] . "</td>
                <td>" . $row["UYRUK"] . "</td>
                <td>Telegram @infolanmam ❤️</td>
            ";
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
                echo "<tr>
                    <td> ÇOCUĞU </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
                </tr>";
                $sqlkendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultkendikendicocugu = $baglanti->query($sqlkendikendicocugu);    
                while($row = $resultkendikendicocugu->fetch_assoc()) {
                    echo "<tr>
                        <td> TORUNU </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    $sqlkendikendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultkendikendikendicocugu = $baglanti->query($sqlkendikendikendicocugu);    
                    while($row = $resultkendikendikendicocugu->fetch_assoc()) {
                        echo "<tr>
                            <td> TORUNUNUN ÇOCUĞU </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        
                    }
                }
            }
            while($row = $resultkardesi->fetch_assoc()) {
                echo "<tr>
                    <td> KARDEŞİ </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
                </tr>";
                $sqlkardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultkardescocugu = $baglanti->query($sqlkardescocugu);
                while($row = $resultkardescocugu->fetch_assoc()) {
                    echo "<tr>
                        <td> KARDEŞİNİN ÇOCUĞU </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    
                    $sqlkardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultkardeskardescocugu = $baglanti->query($sqlkardeskardescocugu);    
                    while($row = $resultkardeskardescocugu->fetch_assoc()) {
                        echo "<tr>
                            <td> KARDEŞİNİN TORUNU </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        $sqlkardeskardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultkardeskardeskardescocugu = $baglanti->query($sqlkardeskardeskardescocugu);    
                        while($row = $resultkardeskardeskardescocugu->fetch_assoc()) {
                            echo "<tr>
                                <td> KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            
                        }
                    }
                }
        
            }
        
            while($row = $resultbabasi->fetch_assoc()) {
                echo "<tr>
                    <td> BABASI </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
                </tr>";
                $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                $resultbabababasi = $baglanti->query($sqlbabababasi);
                $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                $resultbabaanasi = $baglanti->query($sqlbabaanasi);
        
                while($row = $resultbabakardesi->fetch_assoc()) {
                    echo "<tr>
                        <td> BABASININ KARDEŞİ </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    $sqlbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultbabakardescocugu = $baglanti->query($sqlbabakardescocugu);
                    while($row = $resultbabakardescocugu->fetch_assoc()) {
                        echo "<tr>
                            <td> BABASININ KARDEŞİNİN ÇOCUĞU </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        $sqlbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardescocugu);    
                        while($row = $resultbabakardesbabakardescocugu->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ KARDEŞİNİN TORUNU </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlbabakardesbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultbabakardesbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardesbabakardescocugu);    
                            while($row = $resultbabakardesbabakardesbabakardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> BABASININ KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                
                            }
                        }
        
                    }
                }
        
                    while($row = $resultbabababasi->fetch_assoc()) {
                        echo "<tr>
                            <td> BABASININ BABASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                        $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                        $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                        $resultbabababasi = $baglanti->query($sqlbabababasi);
                        $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                        $resultbabaanasi = $baglanti->query($sqlbabaanasi);
        
                        while($row = $resultbabakardesi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ BABASININ KARDEŞİ </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultbabababakardescocugu = $baglanti->query($sqlbabababakardescocugu);
                            while($row = $resultbabababakardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> BABASININ BABASININ KARDEŞİNİN ÇOCUĞU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                $sqlbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardescocugu);    
                                while($row = $resultbabababakardesbabababakardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                        <td> BABASININ BABASININ KARDEŞİNİN TORUNU </td>
                                        <td>" . $row["TC"] . "</td>
                                        <td>" . $row["ADI"] . "</td>
                                        <td>" . $row["SOYADI"] . "</td>
                                        <td>" . $row["DOGUMTARIHI"] . "</td>
                                        <td>" . $row["ANNEADI"] . "</td>
                                        <td>" . $row["ANNETC"] . "</td>
                                        <td>" . $row["BABAADI"] . "</td>
                                        <td>" . $row["BABATC"] . "</td>
                                        <td>" . $row["NUFUSIL"] . "</td>
                                        <td>" . $row["NUFUSILCE"] . "</td>
                                        <td>" . $row["UYRUK"] . "</td>
                                        <td>Telegram @infolanmam ❤️</td>
                                    </tr>";
                                    $sqlbabababakardesbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultbabababakardesbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardesbabababakardescocugu);    
                                    while($row = $resultbabababakardesbabababakardesbabababakardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                            <td> BABASININ BABASININ KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                            <td>" . $row["TC"] . "</td>
                                            <td>" . $row["ADI"] . "</td>
                                            <td>" . $row["SOYADI"] . "</td>
                                            <td>" . $row["DOGUMTARIHI"] . "</td>
                                            <td>" . $row["ANNEADI"] . "</td>
                                            <td>" . $row["ANNETC"] . "</td>
                                            <td>" . $row["BABAADI"] . "</td>
                                            <td>" . $row["BABATC"] . "</td>
                                            <td>" . $row["NUFUSIL"] . "</td>
                                            <td>" . $row["NUFUSILCE"] . "</td>
                                            <td>" . $row["UYRUK"] . "</td>
                                            <td>Telegram @infolanmam ❤️</td>
                                        </tr>";
                                        
                                    }
                                }
                            }
                        }
            
                        while($row = $resultbabababasi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ BABASININ BABASI </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            
                        }
                        while($row = $resultbabaanasi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ BABASININ ANASI </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            
                        }
        
                    }
                    while($row = $resultbabaanasi->fetch_assoc()) {
                        echo "<tr>
                            <td> BABASININ ANASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                        $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                        $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                        $resultbabababasi = $baglanti->query($sqlbabababasi);
                        $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                        $resultbabaanasi = $baglanti->query($sqlbabaanasi);
        
                        while($row = $resultbabakardesi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ ANNESİNİN KARDEŞİ </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultbabaannekardescocugu = $baglanti->query($sqlbabaannekardescocugu);
                            while($row = $resultbabaannekardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> BABASININ ANNESİNİN KARDEŞİNİN ÇOCUĞU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                $sqlbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardescocugu);    
                                while($row = $resultbabaannekardesbabaannekardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                        <td> BABASININ ANNESİNİN KARDEŞİNİN TORUNU </td>
                                        <td>" . $row["TC"] . "</td>
                                        <td>" . $row["ADI"] . "</td>
                                        <td>" . $row["SOYADI"] . "</td>
                                        <td>" . $row["DOGUMTARIHI"] . "</td>
                                        <td>" . $row["ANNEADI"] . "</td>
                                        <td>" . $row["ANNETC"] . "</td>
                                        <td>" . $row["BABAADI"] . "</td>
                                        <td>" . $row["BABATC"] . "</td>
                                        <td>" . $row["NUFUSIL"] . "</td>
                                        <td>" . $row["NUFUSILCE"] . "</td>
                                        <td>" . $row["UYRUK"] . "</td>
                                        <td>Telegram @infolanmam ❤️</td>
                                    </tr>";
                                    $sqlbabaannekardesbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultbabaannekardesbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardesbabaannekardescocugu);    
                                    while($row = $resultbabaannekardesbabaannekardesbabaannekardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                            <td> BABASININ ANNESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                            <td>" . $row["TC"] . "</td>
                                            <td>" . $row["ADI"] . "</td>
                                            <td>" . $row["SOYADI"] . "</td>
                                            <td>" . $row["DOGUMTARIHI"] . "</td>
                                            <td>" . $row["ANNEADI"] . "</td>
                                            <td>" . $row["ANNETC"] . "</td>
                                            <td>" . $row["BABAADI"] . "</td>
                                            <td>" . $row["BABATC"] . "</td>
                                            <td>" . $row["NUFUSIL"] . "</td>
                                            <td>" . $row["NUFUSILCE"] . "</td>
                                            <td>" . $row["UYRUK"] . "</td>
                                            <td>Telegram @infolanmam ❤️</td>
                                        </tr>";
                                        
                                    }
                                }
                            }
        
                        }
            
                        while($row = $resultbabababasi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ ANNESİNİN BABASI </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            
                        }
                        while($row = $resultbabaanasi->fetch_assoc()) {
                            echo "<tr>
                                <td> BABASININ ANNESİNİN ANASI </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            
                        }
        
                    }
                }
            }
            while($row = $resultanasi->fetch_assoc()) {
                echo "<tr>
                    <td> ANASI </td>
                    <td>" . $row["TC"] . "</td>
                    <td>" . $row["ADI"] . "</td>
                    <td>" . $row["SOYADI"] . "</td>
                    <td>" . $row["DOGUMTARIHI"] . "</td>
                    <td>" . $row["ANNEADI"] . "</td>
                    <td>" . $row["ANNETC"] . "</td>
                    <td>" . $row["BABAADI"] . "</td>
                    <td>" . $row["BABATC"] . "</td>
                    <td>" . $row["NUFUSIL"] . "</td>
                    <td>" . $row["NUFUSILCE"] . "</td>
                    <td>" . $row["UYRUK"] . "</td>
                    <td>Telegram @infolanmam ❤️</td>
                </tr>";
                $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                $resultannekardesi = $baglanti->query($sqlannekardesi);
                $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                $resultannebabasi = $baglanti->query($sqlannebabasi);
                $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                $resultanneanasi = $baglanti->query($sqlanneanasi);
        
                while($row = $resultannekardesi->fetch_assoc()) {
                    echo "<tr>
                        <td> ANNESİNİN KARDEŞİ </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    $sqlannekardescocugu = "SELECT * FROM `101m` WHERE `BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ";
                    $resultannekardescocugu = $baglanti->query($sqlannekardescocugu);
                    while($row = $resultannekardescocugu->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN KARDEŞİNİN ÇOCUĞU </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        
                        $sqlannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardescocugu);    
                        while($row = $resultannekardesannekardescocugu->fetch_assoc()) {
                            echo "<tr>
                                <td> ANNESİNİN KARDEŞİNİN TORUNU </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <tdTelegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlannekardesannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultannekardesannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardesannekardescocugu);    
                            while($row = $resultannekardesannekardesannekardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> ANNESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                
                            }
                        }
        
                    }
                }
        
                while($row = $resultannebabasi->fetch_assoc()) {
                    echo "<tr>
                        <td> ANNESİNİN BABASI </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                    $resultbabakardesi = $baglanti->query($sqlbabakardesi);
                    $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                    $resultbabababasi = $baglanti->query($sqlbabababasi);
                    $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                    $resultbabaanasi = $baglanti->query($sqlbabaanasi);
        
                    while($row = $resultbabakardesi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN BABASININ KARDEŞİ </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️ </td>
                        </tr>";
                        $sqlannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultannebabakardescocugu = $baglanti->query($sqlannebabakardescocugu);
                        while($row = $resultannebabakardescocugu->fetch_assoc()) {
                            echo "<tr>
                                <td> ANNESİNİN BABASININ KARDEŞİNİN ÇOCUĞU </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardescocugu);    
                            while($row = $resultannebabakardesannebabakardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> ANNESİNİN BABASININ KARDEŞİNİN TORUNU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                $sqlannebabakardesannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultannebabakardesannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardesannebabakardescocugu);    
                                while($row = $resultannebabakardesannebabakardesannebabakardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                        <td> ANNESİNİN BABASININ KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                        <td>" . $row["TC"] . "</td>
                                        <td>" . $row["ADI"] . "</td>
                                        <td>" . $row["SOYADI"] . "</td>
                                        <td>" . $row["DOGUMTARIHI"] . "</td>
                                        <td>" . $row["ANNEADI"] . "</td>
                                        <td>" . $row["ANNETC"] . "</td>
                                        <td>" . $row["BABAADI"] . "</td>
                                        <td>" . $row["BABATC"] . "</td>
                                        <td>" . $row["NUFUSIL"] . "</td>
                                        <td>" . $row["NUFUSILCE"] . "</td>
                                        <td>" . $row["UYRUK"] . "</td>
                                        <td>Telegram @infolanmam ❤️</td>
                                    </tr>";
                                    
                                }
                            }
        
                        }
                    }
        
                    while($row = $resultbabababasi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN BABASININ BABASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        
                    }
                    while($row = $resultbabaanasi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN BABASININ ANASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        
                    }
                }
                while($row = $resultanneanasi->fetch_assoc()) {
                    echo "<tr>
                        <td> ANNESİNİN ANASI </td>
                        <td>" . $row["TC"] . "</td>
                        <td>" . $row["ADI"] . "</td>
                        <td>" . $row["SOYADI"] . "</td>
                        <td>" . $row["DOGUMTARIHI"] . "</td>
                        <td>" . $row["ANNEADI"] . "</td>
                        <td>" . $row["ANNETC"] . "</td>
                        <td>" . $row["BABAADI"] . "</td>
                        <td>" . $row["BABATC"] . "</td>
                        <td>" . $row["NUFUSIL"] . "</td>
                        <td>" . $row["NUFUSILCE"] . "</td>
                        <td>" . $row["UYRUK"] . "</td>
                        <td>Telegram @infolanmam ❤️</td>
                    </tr>";
                    $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
                    $resultannekardesi = $baglanti->query($sqlannekardesi);
                    $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
                    $resultannebabasi = $baglanti->query($sqlannebabasi);
                    $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
                    $resultanneanasi = $baglanti->query($sqlanneanasi);
        
                    while($row = $resultannekardesi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN ANNESİNİN KARDEŞİ </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        $sqlanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultanneannekardescocugu = $baglanti->query($sqlanneannekardescocugu);
                        while($row = $resultanneannekardescocugu->fetch_assoc()) {
                            echo "<tr>
                                <td> ANNESİNİN ANNESİNİN KARDEŞİNİN ÇOCUĞU </td>
                                <td>" . $row["TC"] . "</td>
                                <td>" . $row["ADI"] . "</td>
                                <td>" . $row["SOYADI"] . "</td>
                                <td>" . $row["DOGUMTARIHI"] . "</td>
                                <td>" . $row["ANNEADI"] . "</td>
                                <td>" . $row["ANNETC"] . "</td>
                                <td>" . $row["BABAADI"] . "</td>
                                <td>" . $row["BABATC"] . "</td>
                                <td>" . $row["NUFUSIL"] . "</td>
                                <td>" . $row["NUFUSILCE"] . "</td>
                                <td>" . $row["UYRUK"] . "</td>
                                <td>Telegram @infolanmam ❤️</td>
                            </tr>";
                            $sqlanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                            $resultanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardescocugu);    
                            while($row = $resultanneannekardesanneannekardescocugu->fetch_assoc()) {
                                echo "<tr>
                                    <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNU </td>
                                    <td>" . $row["TC"] . "</td>
                                    <td>" . $row["ADI"] . "</td>
                                    <td>" . $row["SOYADI"] . "</td>
                                    <td>" . $row["DOGUMTARIHI"] . "</td>
                                    <td>" . $row["ANNEADI"] . "</td>
                                    <td>" . $row["ANNETC"] . "</td>
                                    <td>" . $row["BABAADI"] . "</td>
                                    <td>" . $row["BABATC"] . "</td>
                                    <td>" . $row["NUFUSIL"] . "</td>
                                    <td>" . $row["NUFUSILCE"] . "</td>
                                    <td>" . $row["UYRUK"] . "</td>
                                    <td>Telegram @infolanmam ❤️</td>
                                </tr>";
                                $sqlanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                $resultanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardescocugu);    
                                while($row = $resultanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {
                                    echo "<tr>
                                        <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNUNUN ÇOCUĞU </td>
                                        <td>" . $row["TC"] . "</td>
                                        <td>" . $row["ADI"] . "</td>
                                        <td>" . $row["SOYADI"] . "</td>
                                        <td>" . $row["DOGUMTARIHI"] . "</td>
                                        <td>" . $row["ANNEADI"] . "</td>
                                        <td>" . $row["ANNETC"] . "</td>
                                        <td>" . $row["BABAADI"] . "</td>
                                        <td>" . $row["BABATC"] . "</td>
                                        <td>" . $row["NUFUSIL"] . "</td>
                                        <td>" . $row["NUFUSILCE"] . "</td>
                                        <td>" . $row["UYRUK"] . "</td>
                                        <td>Telegram @infolanmam ❤️</td>
                                    </tr>";
                                    $sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                                    $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu);    
                                    while($row = $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {
                                        echo "<tr>
                                            <td> ANNESİNİN ANNESİNİN KARDEŞİNİN TORUNUNUN TORUNU </td>
                                            <td>" . $row["TC"] . "</td>
                                            <td>" . $row["ADI"] . "</td>
                                            <td>" . $row["SOYADI"] . "</td>
                                            <td>" . $row["DOGUMTARIHI"] . "</td>
                                            <td>" . $row["ANNEADI"] . "</td>
                                            <td>" . $row["ANNETC"] . "</td>
                                            <td>" . $row["BABAADI"] . "</td>
                                            <td>" . $row["BABATC"] . "</td>
                                            <td>" . $row["NUFUSIL"] . "</td>
                                            <td>" . $row["NUFUSILCE"] . "</td>
                                            <td>" . $row["UYRUK"] . "</td>
                                            <td>Telegram @infolanmam ❤️</td>
                                        </tr>";
                                        
                                }
        
                            }
                        }
        
                    }
        
                    while($row = $resultannebabasi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN ANNESİNİN BABASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                        
                    }
                    while($row = $resultanneanasi->fetch_assoc()) {
                        echo "<tr>
                            <td> ANNESİNİN ANNESİNİN ANASI </td>
                            <td>" . $row["TC"] . "</td>
                            <td>" . $row["ADI"] . "</td>
                            <td>" . $row["SOYADI"] . "</td>
                            <td>" . $row["DOGUMTARIHI"] . "</td>
                            <td>" . $row["ANNEADI"] . "</td>
                            <td>" . $row["ANNETC"] . "</td>
                            <td>" . $row["BABAADI"] . "</td>
                            <td>" . $row["BABATC"] . "</td>
                            <td>" . $row["NUFUSIL"] . "</td>
                            <td>" . $row["NUFUSILCE"] . "</td>
                            <td>" . $row["UYRUK"] . "</td>
                            <td>Telegram @infolanmam ❤️</td>
                        </tr>";
                    }
                    }
                }
        
            }
}else{
   echo false;
  
}
}else{
    echo false;
}


?>
