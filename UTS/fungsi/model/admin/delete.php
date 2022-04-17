<?php 

require "./../../fungsi.php";

$id = $_GET["id"];

statement("DELETE FROM admin WHERE id_admin=$id");

if(rowCount() > 0){
    setFlash("admin","berhasil dihapus", "success");
}else{
    setFlash("admin","gagal dihapus", "error");
}

header("Location: ../../../admin.php");