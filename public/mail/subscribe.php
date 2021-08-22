<?php
$email = $_POST['subemail'];



$txt = $email;

 $myfile = file_put_contents('subscribe.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

echo "success";
?>
