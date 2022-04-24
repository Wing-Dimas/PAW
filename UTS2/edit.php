<?php 

require "function.php";
$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
stmt("UPDATE tbl_wing SET 
        nama_wing = '$nama',
        email_wing = '$email',
        alamat_wing = '$alamat'
        WHERE id_wing = $id;");


if(rowCount() > 0){
    echo "<script>
    alert('Data berhasil di edit');
    document.location.href = 'index.php';
    </script>";
}else{
    error();
}

