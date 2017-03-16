<?php

echo "bpm...";

 
  
$conn = oci_connect('bpm', 'bpm', '//10.10.0.31/bpm');  
  
if (!$conn) {  
    echo "连接oracle  NOT 成功！";  
    $e = oci_error();  
    echo $e
    // print htmlentities($e['message']);  
  
    exit;  
  
}else {  
  
    echo "连接oracle成功！";  
  
}  
  
