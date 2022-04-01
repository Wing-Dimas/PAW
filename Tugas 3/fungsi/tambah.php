<?php 

require "./fungsi.php";
 
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$fakultas = $_POST["fakultas"];
$jurusan = $_POST["jurusan"];
$semester = $_POST["semester"];
$ipk = $_POST["ipk"];

statement("INSERT INTO tbl_119 VALUES('', '$nama', '$nim', '$fakultas', '$jurusan', $semester, $ipk);");
if(rowCount() >= 1){
    setFlash("Berhasil ditambahkan", "success");
}else{
    setFlash("Gagal ditambahkan", "error");
}
header("Location:../index.php");