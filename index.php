<?php
echo "INDEX...";
ini_set('display_errors', 1);
error_reporting(~0);
echo "bpm...??????";

// $tns = <<<XML
// (DESCRIPTION =
//     (ADDRESS_LIST =
//       (ADDRESS = (PROTOCOL = TCP)(HOST = 10.10.0.31)(PORT = 1521))
//     )
//     (CONNECT_DATA =
//       (SERVICE_NAME = bpm)
//     )
//   )
// XML;

$db_username = "bpm";
$db_password = "bpm";

try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
    echo "WORKING..."
}catch(PDOException $e){
    echo ($e->getMessage());
}


?>