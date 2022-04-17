<?php 

require "../../fungsi.php";


$id = $_POST["id"];

$data = getSingle("SELECT * FROM admin WHERE id_admin=$id");

echo json_encode($data);