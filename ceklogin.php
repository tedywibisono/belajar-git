<?php
session_start();
require "funcsions.php";
$username= $_POST['username'];
$password= $_POST['password'];
$login= mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");
$cek= mysqli_num_rows($login);
if ($cek > 0){
    $data=mysqli_fetch_assoc($cek);
    if(password_verify($password, $data['password'])){
        if($data['level']== 'penjual'){
            $_SESSION['username']=$username;
            $_SESSION['level']= 'penjual';
            header('location: penjual.php');
            exit;
        }else if($data['level']=='pembeli'){
            $_SESSION['username']=$username;
            $_SESSION['level']= 'pembeli';
            header('location: pembeli.php');
            exit;
        }else{

            // alihkan ke halaman login kembali
            header("location:login.php?pesan=gagal");
           } 
          }else{
           header("location:login.php?pesan=gagal");
          }
    }

?>