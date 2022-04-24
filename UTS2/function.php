<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "db_119";

$conn = mysqli_connect($host, $username, $password, $db);

function stmt($query){
    global $conn;
    
    mysqli_query($conn, $query);
}
function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function rowCount(){
    global $conn;
    return mysqli_affected_rows($conn);
}

function error(){
    global $conn;
    return mysqli_error($conn);
}

function getData(){
    $data = query("SELECT * FROM tbl_wing");
    if(rowCount() > 0){
        return $data;
    }else{
        die(error());
    }
}

function getSingle($id){
    $data = query("SELECT * FROM tbl_wing WHERE id_wing=$id");
    return $data;

}