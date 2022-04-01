<?php

$host = "localhost";
$usernamae = "root";
$password = "";
$db_name = "dimas_wing";

$conn = mysqli_connect($host, $usernamae, $password, $db_name);



function query($query){
    global $conn;
    
    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

function rowCount(){
    global $conn;
    return mysqli_affected_rows($conn);
}

function statement($query){
    global $conn;
    mysqli_query($conn,$query);
    if (rowCount() <= 0){
        die(mysqli_error($conn));
    }
}

function getAllDataMahasiswa(){
    $query = "SELECT * FROM tbl_119";
    $data = query($query);
    return $data;
}


function setFlash( $pesan, $tipe){
    session_start();
    $_SESSION["flash"] = [
        "pesan" => $pesan,
        "tipe" => $tipe
    ];
}