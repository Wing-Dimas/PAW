<?php 
require "function.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];

stmt("INSERT INTO tbl_wing VALUES ('', '$nama', '$email', '$alamat')");

if(rowCount() > 0){
    echo "<script>
    alert('Data berhasil di tambahkan');
    document.location.href = 'index.php';
    </script>";
}else{
    error();
}

