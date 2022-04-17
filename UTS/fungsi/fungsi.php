<?php 

$conn = mysqli_connect("localhost","root","","dprox_coffe");


if(!$conn){
    echo "Gagal";
}

function query($query){
    global $conn;
    
    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}
function getSingle($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function rowCount(){
    global $conn;
    return mysqli_affected_rows($conn);
}

function statement($query){
    global $conn;
    mysqli_query($conn,$query);
}

function getDataAdmin(){
    $data = query("SELECT * FROM admin");
    return $data;
}

function getDataMenu(){
    $data = query("SELECT * FROM menu");
    return $data;
}


function setFlash($table, $pesan, $tipe){
    session_start();
    $_SESSION["flash"] = [
        "table" => $table,
        "pesan" => $pesan,
        "tipe" => $tipe
    ];
}