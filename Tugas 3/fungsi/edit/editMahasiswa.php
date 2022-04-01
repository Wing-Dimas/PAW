<?php 

require "./../fungsi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$fakultas = $_POST["fakultas"];
$jurusan = $_POST["jurusan"];
$semester = $_POST["semester"];
$ipk = $_POST["ipk"];

statement("UPDATE tbl_119 SET nama = '$nama', nim = '$nim', fakultas = '$fakultas', jurusan = '$jurusan', semester = '$semester', ipk = $ipk WHERE id = $id;");
header("Location:./../../index.php");