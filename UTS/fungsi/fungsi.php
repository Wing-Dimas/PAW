<?php 

$conn = mysqli_connect("localhost","root","","dprox_coffe");


function getSingle($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    return $data;
}


