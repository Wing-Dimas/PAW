<?php 

require "../../fungsi.php";

$kode_menu = $_POST["kode_menu"];
$nama = $_POST["nama"];
$kategory = $_POST["kategory"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];
$gambar = $_POST["gambar"];


statement("UPDATE menu SET 
            Kode_menu = '$kode_menu',
            nama_menu = '$nama',
            kategory = '$kategory',
            stok_menu = $stok,
            harga_menu = $harga,
            deskripsi = '$deskripsi',
            gambar = '$gambar'
            WHERE Kode_menu = '$kode_menu';");
        
if(rowCount() > 0){
    setFlash("Menu","Berhasil diedit", "success");
}else{
    setFlash("Menu","Gagal diedit", "error");
}
header("Location:../../../admin.php");