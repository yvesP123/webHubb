<?php
if (isset($_POST['encrypt'])) 
{
    $simple_string=$_POST['text'];
    echo"Orginal Data:".$simple_string;
    echo"<br>";
    $ciphering="AES-128-CTR";
    $option=0;
    $encryption_iv='1234567890123456';
    $encryption_key="hello";
    $encryption=openssl_encrypt($simple_string,$ciphering,$encryption_key,$option,$encryption_iv);
    echo"Encrypted data:".$encryption;
    echo"<br>";
}
if (isset($_POST['dencrypt'])) {
$text=$_POST['text'];  
$simple_string=$_POST['text'];
echo"Orginal Data:".$simple_string;
echo"<br>";
$ciphering="AES-128-CTR";
$option=0;
$dencryption_iv='1234567890123456';
$dencryption_key="hello";
$dencryption=openssl_encrypt($simple_string,$ciphering,$dencryption_key,$option,$dencryption_iv);
echo"dencrypted data:".$dencryption;
echo"<br>";  
}

?>