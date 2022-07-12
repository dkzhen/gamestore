<?php
include 'koneksi.php';

session_start();
$user = ($_POST['user']);
$password = ($_POST['password']);
if (!empty($user) || !empty($password)){
    $seq=mysqli_query($registrasi,"SELECT * FROM regist where user='$user'");
    $data=mysqli_fetch_array($seq);
    $jml=mysqli_num_rows($seq);
    if($jml>0){
        if(password_verify($password, $data['password'])){
            $_SESSION['user_autentification']="valid";
            header("location:../index.php");
        }else {
            echo"<script>alert('Password Salah!');window.location.href='../login.php';</script>";
        }
    }else{
        echo"<script>alert('Username Salah!');window.location.href='../login.php';</script>";
    }

}
?>