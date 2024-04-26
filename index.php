<?php
echo "0";
$file = 'pc.php';
file_put_contents($file,str_replace('find','replace',file_get_contents($file)));
?>
