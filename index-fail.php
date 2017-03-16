<?php
ini_set('display_errors', 1);
error_reporting(~0);
echo "bpm...";

 
$db = '//10.10.0.31/bpm'; //e.g. '//192.168.1.1/orcl'
$user = 'bpm';
$pass = 'bpm';

$conn = new PDO($db,$user,$pass);
 
  
// $conn = oci_connect('bpm', 'bpm', '//10.10.0.31/bpm');  
  
if (!$conn) {  
    echo "连接oracle  NOT 成功！";  
    // $e = oci_error();  
    // echo $e
    // print htmlentities($e['message']);  
  
    exit;  
  
}else {  
  
    echo "连接oracle成功！";  
  
}  
  
