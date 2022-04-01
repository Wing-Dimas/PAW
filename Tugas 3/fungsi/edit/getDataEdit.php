<?php 

require "./../fungsi.php";

$id = $_POST["id"];
unset($_POST["id"]);
$data = query("SELECT * FROM tbl_119 WHERE id=$id");
if($data){
    echo json_encode($data[0]);
};