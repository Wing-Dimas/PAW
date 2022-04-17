<?php

require "../../fungsi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$jabatan = $_POST["jabatan"];

statement("INSERT INTO admin VALUES('','$username','$password','$jabatan')");

if(rowCount() > 0){
    setFlash("admin","berhasil ditambahkan", "success");
}else{
    setFlash("admin","gagal ditambahkan", "erorr");
}

header("Location: ../../../admin.php");
