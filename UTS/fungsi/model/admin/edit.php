<?php 

require "../../fungsi.php";

$id = $_POST["id_admin"];
$username = $_POST["username"];
$password = $_POST["password"];
$jabatan = $_POST["jabatan"];

statement("UPDATE admin SET 
            username = '$username',
            password = '$password',
            jabatan = '$jabatan'
            WHERE id_admin = $id;");
        
if(rowCount() > 0){
    setFlash("Admin","Berhasil diedit", "success");
}else{
    setFlash("Admin","Gagal diedit", "error");
}
header("Location:../../../admin.php");