<?php 
session_start();
unset($_SESSION["login"]);
unset($_SESSION["level"]);
session_destroy();
header("Location: ../../index.php");