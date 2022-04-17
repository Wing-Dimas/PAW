<?php 

require "../../fungsi.php";

$id = $_POST["id"];

$data = getSingle("SELECT * FROM menu WHERE Kode_menu='$id'");

echo json_encode($data);