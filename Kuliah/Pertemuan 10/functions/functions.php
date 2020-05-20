<?php
function connect(){
  return mysqli_connect("localhost","pw19039","#Akun#193040039#","pw19039_pw_193040039");
}

function query($query){
  $conn = connect();
  $result = mysqli_query($conn, $query);
  $rows = [];
  if(mysqli_num_rows($result) == 1){
    $rows = mysqli_fetch_assoc($result);
  }
      while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
  
  return $rows;
}

function tambah($data){
$conn = connect();

$nama = htmlspecialchars($data['nama']);
$nrp =  htmlspecialchars($data['nrp']);
$email = htmlspecialchars($data['email']);
$jurusan = htmlspecialchars($data['jurusan']);
$gambar =  htmlspecialchars($data['gambar']);

$query = "INSERT INTO  mahasiswa VALUES (null,'$nama','$nrp','$email','$jurusan','$gambar')";

mysqli_query($conn,$query);
echo mysqli_error($conn);
return mysqli_affected_rows($conn);

}
