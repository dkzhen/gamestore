<?php

    $registrasi = mysqli_connect("db4free.net","dkzhen19","Bandulan113","gamestore_native");

    //check koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
?>
