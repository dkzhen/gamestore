<?php
include 'koneksi.php';

$userid = $_POST['userid'];
$nominal = $_POST['brandtype'];
$payment = $_POST['paymentmethod'];
$email = $_POST['email'];

$input = mysqli_query($registrasi,"insert into pesanan_pubg (user_id,nominal,payment,email) values('$userid','$nominal','$payment','$email')");
      if($input){
            echo"<script>alert('Pesanan Berhasil');window.location.href='../pesanan_pubg.php';</script>";
        }else{
            echo"<script>alert('Maaf Pesanan Gagal!');window.location.href='../pubgm.php';</script>";
        }
?>