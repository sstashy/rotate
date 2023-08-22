<?php 
require("db.php");
$data=array();
$baglanti = new mysqli('localhost', 'root', '', '101milyon');
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
        while($row = $resultkendikendicocugu->fetch_assoc()) {
            $ekle=["TORUNU" => 'Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;
            $sqlkendikendikendicocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultkendikendikendicocugu = $baglanti->query($sqlkendikendikendicocugu);    
            while($row = $resultkendikendikendicocugu->fetch_assoc()) {

                $ekle=["yakinlik" => 'TORUNUNUN ÇOCUĞU',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;

            }
        }
    }
    while($row = $resultkardesi->fetch_assoc()) {
        $ekle=["yakinlik" => 'Kardeşi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;
        $sqlkardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
        $resultkardescocugu = $baglanti->query($sqlkardescocugu);
        while($row = $resultkardescocugu->fetch_assoc()) {
            $ekle=["yakinlik" => 'Kardeşinin Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;

            $sqlkardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultkardeskardescocugu = $baglanti->query($sqlkardeskardescocugu);    
            while($row = $resultkardeskardescocugu->fetch_assoc()) {

                $ekle=["yakinlik" => 'Kardeşinin Torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;


                $sqlkardeskardeskardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultkardeskardeskardescocugu = $baglanti->query($sqlkardeskardeskardescocugu);    
                while($row = $resultkardeskardeskardescocugu->fetch_assoc()) {

                    $ekle=["yakinlik" => 'Kardeşinin Torununun Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;


                }
            }
        }

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

        while($row = $resultbabakardesi->fetch_assoc()) {

            $ekle=["yakinlik" => 'Hala/Amca',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;



            $sqlbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultbabakardescocugu = $baglanti->query($sqlbabakardescocugu);
            while($row = $resultbabakardescocugu->fetch_assoc()) {

                $ekle=["yakinlik" => 'Hala/Amca Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;



                $sqlbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardescocugu);    
                while($row = $resultbabakardesbabakardescocugu->fetch_assoc()) {

                    $ekle=["yakinlik" => 'Hala/Amca Torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;



                    $sqlbabakardesbabakardesbabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultbabakardesbabakardesbabakardescocugu = $baglanti->query($sqlbabakardesbabakardesbabakardescocugu);    
                    while($row = $resultbabakardesbabakardesbabakardescocugu->fetch_assoc()) {

                        $ekle=["yakinlik" => 'Hala/Amca Torunun Çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                        $data[]=$ekle;



                    }
                }

            }
        }

        while($row = $resultbabababasi->fetch_assoc()) {


            $ekle=["yakinlik" => 'Dedesi (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;


            $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
            $resultbabakardesi = $baglanti->query($sqlbabakardesi);
            $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
            $resultbabababasi = $baglanti->query($sqlbabababasi);
            $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
            $resultbabaanasi = $baglanti->query($sqlbabaanasi);

            while($row = $resultbabakardesi->fetch_assoc()) {


                $ekle=["yakinlik" => 'Dedesinin Kardeşi (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;


                $sqlbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultbabababakardescocugu = $baglanti->query($sqlbabababakardescocugu);
                while($row = $resultbabababakardescocugu->fetch_assoc()) {


                    $ekle=["yakinlik" => 'Dedesinin kardeşinin çocuğu (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;





                    $sqlbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardescocugu);    
                    while($row = $resultbabababakardesbabababakardescocugu->fetch_assoc()) {

                        $ekle=["yakinlik" => 'Dedesinin kardeşinin torunu (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                        $data[]=$ekle;




                        $sqlbabababakardesbabababakardesbabababakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultbabababakardesbabababakardesbabababakardescocugu = $baglanti->query($sqlbabababakardesbabababakardesbabababakardescocugu);    
                        while($row = $resultbabababakardesbabababakardesbabababakardescocugu->fetch_assoc()) {


                            $ekle=["yakinlik" => 'Dedesinin kardeşinin torununun çocuğu (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                            $data[]=$ekle;



                        }
                    }
                }
            }

            while($row = $resultbabababasi->fetch_assoc()) {


                $ekle=["yakinlik" => 'Dedesinin babası (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;




            }
            while($row = $resultbabaanasi->fetch_assoc()) {


                $ekle=["yakinlik" => 'Dedesinin babasının annesi (Baba Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;


            }

        }
        while($row = $resultbabaanasi->fetch_assoc()) {

            $ekle=["yakinlik" => 'Babaannesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;



            $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
            $resultbabakardesi = $baglanti->query($sqlbabakardesi);
            $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
            $resultbabababasi = $baglanti->query($sqlbabababasi);
            $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
            $resultbabaanasi = $baglanti->query($sqlbabaanasi);

            while($row = $resultbabakardesi->fetch_assoc()) {


                $ekle=["yakinlik" => 'Babaannesinin kardeşi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;



                $sqlbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultbabaannekardescocugu = $baglanti->query($sqlbabaannekardescocugu);
                while($row = $resultbabaannekardescocugu->fetch_assoc()) {


                    $ekle=["yakinlik" => 'Babaannesinin kardeşinin çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;


                    $sqlbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardescocugu);    
                    while($row = $resultbabaannekardesbabaannekardescocugu->fetch_assoc()) {

                        $ekle=["yakinlik" => 'Babaannesinin kardeşinin torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                        $data[]=$ekle;




                        $sqlbabaannekardesbabaannekardesbabaannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultbabaannekardesbabaannekardesbabaannekardescocugu = $baglanti->query($sqlbabaannekardesbabaannekardesbabaannekardescocugu);    
                        while($row = $resultbabaannekardesbabaannekardesbabaannekardescocugu->fetch_assoc()) {


                            $ekle=["yakinlik" => 'Babaannesinin kardeşinin torununun çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                            $data[]=$ekle;


                        }
                    }
                }

            }

            while($row = $resultbabababasi->fetch_assoc()) {


                $ekle=["yakinlik" => 'Babaannesinin babası',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;

            }
            while($row = $resultbabaanasi->fetch_assoc()) {

                $ekle=["yakinlik" => 'Babaannesinin annesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;


            }

        }
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

    while($row = $resultannekardesi->fetch_assoc()) {


        $ekle=["yakinlik" => 'Teyze/Dayı',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;

        $sqlannekardescocugu = "SELECT * FROM `101m` WHERE `BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ";
        $resultannekardescocugu = $baglanti->query($sqlannekardescocugu);
        while($row = $resultannekardescocugu->fetch_assoc()) {

            $ekle=["yakinlik" => 'Teyze/Dayı çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;



            $sqlannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardescocugu);    
            while($row = $resultannekardesannekardescocugu->fetch_assoc()) {


                $ekle=["yakinlik" => 'Teyze/Dayı torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;




                $sqlannekardesannekardesannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultannekardesannekardesannekardescocugu = $baglanti->query($sqlannekardesannekardesannekardescocugu);    
                while($row = $resultannekardesannekardesannekardescocugu->fetch_assoc()) {


                    $ekle=["yakinlik" => 'Teyze/Dayı torununun çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;


                }
            }

        }
    }

    while($row = $resultannebabasi->fetch_assoc()) {


        $ekle=["yakinlik" => 'Dedesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;



        $sqlbabakardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
        $resultbabakardesi = $baglanti->query($sqlbabakardesi);
        $sqlbabababasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
        $resultbabababasi = $baglanti->query($sqlbabababasi);
        $sqlbabaanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
        $resultbabaanasi = $baglanti->query($sqlbabaanasi);

        while($row = $resultbabakardesi->fetch_assoc()) {

            $ekle=["yakinlik" => 'Dedesinin kardeşi ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;


            $sqlannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultannebabakardescocugu = $baglanti->query($sqlannebabakardescocugu);
            while($row = $resultannebabakardescocugu->fetch_assoc()) {


                $ekle=["yakinlik" => 'Dedesinin kardeşinin çocuğu ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;

                $sqlannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardescocugu);    
                while($row = $resultannebabakardesannebabakardescocugu->fetch_assoc()) {


                    $ekle=["yakinlik" => 'Dedesinin kardeşinin torunu ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;



                    $sqlannebabakardesannebabakardesannebabakardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultannebabakardesannebabakardesannebabakardescocugu = $baglanti->query($sqlannebabakardesannebabakardesannebabakardescocugu);    
                    while($row = $resultannebabakardesannebabakardesannebabakardescocugu->fetch_assoc()) {


                        $ekle=["yakinlik" => 'Dedesinin kardeşinin torununun çocuğu ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                        $data[]=$ekle;



                    }
                }

            }
        }

        while($row = $resultbabababasi->fetch_assoc()) {


            $ekle=["yakinlik" => 'Dedesinin babası ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;


        }
        while($row = $resultbabaanasi->fetch_assoc()) {

            $ekle=["yakinlik" => 'Dedesinin annesi ( Anne Tarafı )',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;




        }
    }
    while($row = $resultanneanasi->fetch_assoc()) {


        $ekle=["yakinlik" => 'Anneannesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
        $data[]=$ekle;



        $sqlannekardesi = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["BABATC"] ."' OR `ANNETC` = '" . $row["ANNETC"] ."' ) ";
        $resultannekardesi = $baglanti->query($sqlannekardesi);
        $sqlannebabasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["BABATC"] ."' ";
        $resultannebabasi = $baglanti->query($sqlannebabasi);
        $sqlanneanasi = "SELECT * FROM `101m` WHERE `TC` = '" . $row["ANNETC"] ."' ";
        $resultanneanasi = $baglanti->query($sqlanneanasi);

        while($row = $resultannekardesi->fetch_assoc()) {

            $ekle=["yakinlik" => 'Anneannesinin kardeşi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
            $data[]=$ekle;

            $sqlanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
            $resultanneannekardescocugu = $baglanti->query($sqlanneannekardescocugu);
            while($row = $resultanneannekardescocugu->fetch_assoc()) {

                $ekle=["yakinlik" => 'Anneannesinin kardeşinin çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;



                $sqlanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                $resultanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardescocugu);    
                while($row = $resultanneannekardesanneannekardescocugu->fetch_assoc()) {

                    $ekle=["yakinlik" => 'Anneannesinin kardeşinin torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                    $data[]=$ekle;


                    $sqlanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                    $resultanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardescocugu);    
                    while($row = $resultanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {


                        $ekle=["yakinlik" => 'Anneannesinin kardeşinin torununun çocuğu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                        $data[]=$ekle;

                        $sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu = "SELECT * FROM `101m` WHERE NOT `TC` = '". $row["TC"] ."'  AND (`BABATC` = '" . $row["TC"] ."' OR `ANNETC` = '" . $row["TC"] ."' ) ";
                        $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu = $baglanti->query($sqlanneannekardesanneannekardesanneannekardesanneannekardescocugu);    
                        while($row = $resultanneannekardesanneannekardesanneannekardesanneannekardescocugu->fetch_assoc()) {


                            $ekle=["yakinlik" => 'Anneannesinin kardeşinin torununun torunu',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                            $data[]=$ekle;


                        }

                    }
                }

            }

            while($row = $resultannebabasi->fetch_assoc()) {



                $ekle=["yakinlik" => 'Anneannesinin babası',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;


            }
            while($row = $resultanneanasi->fetch_assoc()) {

                $ekle=["yakinlik" => 'Anneannesinin annesi',"tc"=>$row["TC"],"adi"=>$row["ADI"],"soyadi"=>$row["SOYADI"],"dtarih"=>$row["DOGUMTARIHI"],"anneadi"=>$row["ANNEADI"],"annetc"=>$row["ANNETC"],"babaadi"=>$row['BABAADI'],"babatc"=>$row['BABATC'],"il"=>$row['NUFUSIL'],"ilce"=>$row['NUFUSILCE'],"uy"=>$row['UYRUK']];
                $data[]=$ekle;

            }
        }
    }

}
}   
    $varmi=array('success'=>'true');
    echo json_encode($data);



?>