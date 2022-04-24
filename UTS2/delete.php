<?php 
require "function.php";
$id = $_GET["id"];

stmt("DELETE FROM tbl_wing WHERE id_wing=$id");

if(rowCount() > 0){
    echo "<script>
    alert('Data berhasil di hapus');
    document.location.href = 'index.php';
    </script>";
}else{
    error();
}