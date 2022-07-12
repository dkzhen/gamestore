<?php
include 'koneksi.php';

$userid = $_POST['userid'];
$zoneid = $_POST['zoneid'];
$nominal = $_POST['brandtype'];
$payment = $_POST['paymentmethod'];
$email = $_POST['email'];

$input = mysqli_query($registrasi,"insert into pesanan_mlbb (user_id,zone_id,nominal,payment,email) values('$userid','$zoneid','$nominal','$payment','$email')");
      if($input){
            echo"<script>alert('Pesanan Berhasil');window.location.href='../pesanan_mlbb.php';</script>";
        }else{
            echo"<script>alert('Maaf Pesanan Gagal!');window.location.href='../mlbb.php';</script>";
        }
?>