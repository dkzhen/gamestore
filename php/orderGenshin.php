<?php
include 'koneksi.php';

$userid = $_POST['userid'];
$server = $_POST['server'];
$nominal = $_POST['brandtype'];
$payment = $_POST['paymentmethod'];
$email = $_POST['email'];

$input = mysqli_query($registrasi,"insert into pesanan_genshin (user_id,server,nominal,payment,email) values('$userid','$server','$nominal','$payment','$email')");
      if($input){
            echo"<script>alert('Pesanan Berhasil');window.location.href='../pesanan_genshin.php';</script>";
        }else{
            echo"<script>alert('Maaf Pesanan Gagal!');window.location.href='../genshin.php';</script>";
        }
?>