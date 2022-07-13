<?php

$registrasi = mysqli_connect('db4free.net','dkzhen19','Bandulan113','gamestore-native');
if($registrasi){
    mysqli_query($registrasi,'SET NAMES uff8');
    echo "Connection - successful </br>";
}
else {
    echo "Connection - failed </br>" . mysqli_connect_error();
}
?>
