<?php
include 'koneksi.php';
$nama = strtolower(stripslashes($_POST['nama']));
$email= $_POST['email'];
$user = strtolower(stripslashes($_POST['user']));
$password = mysqli_real_escape_string($registrasi,$_POST['password']);
if (!empty($user) || !empty($email) || !empty($password)){
    $cekUser=mysqli_query($registrasi,"SELECT * FROM regist where user='$user'");
    $cekEmail=mysqli_query($registrasi,"SELECT * FROM regist where email='$email'");
    $jmlUser=mysqli_num_rows($cekUser);
    $jmlEmail=mysqli_num_rows($cekEmail);
    if($jmlUser>0){
        echo"<script>alert('Username Sudah Digunakan');window.location.href='../register.php';</script>";
        die();
    }else if($jmlEmail>0){
        echo"<script>alert('Email Sudah Digunakan');window.location.href='../register.php';</script>";
        die();
    }else{
        $password_encrypt = password_hash($password, PASSWORD_DEFAULT);
        $input = mysqli_query($registrasi,"insert into regist (nama,email,user,password) values('$nama','$email','$user','$password_encrypt')");
        if($input){
            echo"<script>alert('Pendaftaran Akun Berhasil ');window.location.href='../login.php';</script>";
        }else{
            echo"<script>alert('Pendaftaran Akun Gagal!');window.location.href='../register.php';</script>";
        }
    }
}
?>