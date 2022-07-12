<?php

    $registrasi = mysqli_connect("localhost","root","","registrasi");

    //check koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
?>