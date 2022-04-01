<?php 

require "./fungsi.php";

$id = $_GET["id"];
statement("DELETE FROM tbl_119 WHERE id=$id");
if(rowCount() >= 1){
    setFlash("Berhasil dihapus", "success");
}else{
    setFlash("Gagal dihapus", "error");
}
header("Location:../index.php");