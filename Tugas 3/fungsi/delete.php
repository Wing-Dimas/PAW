<?php 

require "./fungsi.php";

$id = $_GET["id"];
statement("DELETE FROM tbl_119 WHERE id=$id");
header("Location:../index.php");