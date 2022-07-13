<?php

    $host = 'db4free.net:3306'; 
$dbuser = 'dkzhen19';
$dbpassword = 'Bandulan113';
$dbname = 'gamestore_native';

$registrasi = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($registrasi){
    mysqli_query($registrasi,'SET NAMES uff8');
    echo "Connection - successful </br>";
}
else {
    echo "Connection - failed </br>" . mysqli_connect_error();
}
?>
