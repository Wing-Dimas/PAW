<?php

$host = "localhost";
$usernamae = "root";
$password = "";
$db_name = "dimas_wing";

$conn = mysqli_connect($host, $usernamae, $password, $db_name);



function query($query){
    global $conn;
    
    $result = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) <= 0){
        die(mysqli_error($conn));
    }
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

function statement($query){
    global $conn;
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) <= 0){
        die(mysqli_error($conn));
    }
}

function getAllDataMahasiswa(){
    $query = "SELECT * FROM tbl_119";
    $data = query($query);
    return $data;
}