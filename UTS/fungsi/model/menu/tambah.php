<?php

require "../../fungsi.php";

$kode_menu = $_POST["kode_menu"];
$nama = $_POST["nama"];
$kategory = $_POST["kategory"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];
$gambar = $_POST["gambar"];

statement("INSERT INTO menu VALUES('$kode_menu','$nama', '$kategory', $stok, $harga, '$deskripsi', '$gambar')");

if(rowCount() > 0){
    setFlash("menu","berhasil ditambahkan", "success");
}else{
    setFlash("menu","gagal ditambahkan", "erorr");
}

header("Location: ../../../admin.php");
