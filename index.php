<?php

echo "bpm";

<?php  
  
$conn = oci_connect('bpm', 'bpm', '//10.10.0.31/bpm)');  
  
if (!$conn) {  
  
    $e = oci_error();  
  
    print htmlentities($e['message']);  
  
    exit;  
  
}else {  
  
    echo "连接oracle成功！";  
  
}  
  
?> 