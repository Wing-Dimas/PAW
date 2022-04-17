<?php
session_start();

require "./../fungsi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$result = getSingle("SELECT * FROM admin WHERE username='$username' AND password='$password'");

if(!$result){
    $_SESSION["flash"] = [
        "tipe"=> "error",
        "head" => "username/password salah",
        "pesan" => "Pastikan data yang anda isi sudah benar"
    ];
    header("Location: ../../index.php");
}else{
    $level = $result["jabatan"];
    if($level == "admin"){
        $_SESSION["login"] = true;
        $_SESSION["level"] = $level;
        header("Location: ../../admin.php");
    }else{
        $_SESSION["login"] = true;
        $_SESSION["level"] = $level;
        header("Location: ../../pemesanan.php");
    }
}
