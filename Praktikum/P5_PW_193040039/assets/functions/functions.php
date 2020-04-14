<?php
function koneksi(){
$conn = mysqli_connect("localhost","root","") or die("koneksi gagal terhubung ke Database");
mysqli_select_db($conn,"tubes_193040039") or die("Nama Database salah!");
return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn,"$sql");

    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>