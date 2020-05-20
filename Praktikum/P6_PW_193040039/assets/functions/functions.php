<?php
function connect()
{
    $conn = mysqli_connect("localhost", "pw19039", "#Akun#193040039#") or die("koneksi gagal terhubung ke Database");
    mysqli_select_db($conn, "pw19039_tubes_193040039") or die("Nama Database salah!");
    return $conn;
}

function query($sql)
{
    $conn = connect();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = connect();

    $gambar = htmlspecialchars($data['gambar']);
    $nama =  htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $rekomendasi =  htmlspecialchars($data['rekomendasi']);

    $query = "INSERT INTO  music_gear VALUES (null,'$gambar','$nama','$deskripsi','$harga','$rekomendasi')";

    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = connect();
    mysqli_query($conn, "DELETE FROM music_gear WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = connect();
    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama =  htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $rekomendasi =  htmlspecialchars($data['rekomendasi']);

    $queryubah = "UPDATE music_gear SET 
        img_music_gear = '$gambar',
        nama_music_gear = '$nama',
        deskripsi = '$deskripsi',
        harga = '$harga',
        rekomendasi = '$rekomendasi'
        WHERE ID='$id'";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
