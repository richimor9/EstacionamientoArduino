<?php
   	include("conexion.php");


    $con = mysql_connect($host, $user, $pw);
    mysql_select_db($db,$con);
                     
    mysql_query("INSERT INTO `cajonLog`(`id`,`cajon1`, `cajon2` , `cajon3`) VALUES (1, '" . $_GET['cajon1'] . "', '" . $_GET['cajon2'] . "', '" . $_GET['cajon3'] . "')
    ON DUPLICATE KEY UPDATE
      cajon1 = '" . $_GET['cajon1'] . "',
      cajon2 = '" . $_GET['cajon2'] . "',
      cajon3 = '" . $_GET['cajon3'] . "'", $con);
  

  


?>