<?php
function connect()
{
  return mysqli_connect("localhost", "pw19039", "#Akun#193040039#", "pw19039_pw_193040039");
}

function query($query)
{
  $conn = connect();
  $result = mysqli_query($conn, $query);
  $rows = [];
  if (mysqli_num_rows($result) == 1) {
    $rows = mysqli_fetch_assoc($result);
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = connect();

  $nama = htmlspecialchars($data['nama']);
  $nrp =  htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar =  htmlspecialchars($data['gambar']);

  $query = "INSERT INTO  mahasiswa VALUES (null,'$nama','$nrp','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = connect();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = connect();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp =  htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar =  htmlspecialchars($data['gambar']);

  $queryubah = "UPDATE mahasiswa SET 
  nama = '$nama',
  nrp = '$nrp',
  email = '$email',
  jurusan = '$jurusan',
  gambar = '$gambar'
  WHERE id='$id'";

  mysqli_query($conn, $queryubah);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = connect();

  $query = ("SELECT * FROM mahasiswa WHERE
        nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'");

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function login($data)
{
  $conn = connect();

  $username_login = htmlspecialchars($data['username']);
  $password_login = htmlspecialchars($data['password']);

  if ($user = query("SELECT * FROM user WHERE username = '$username_login'")) {
    if (hash('sha256', $password_login, $user['password'])) {
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    } else {
      return [
        'error' => true

      ];
    }
  } else {
    return [
      'error' => true

    ];
  }
}


function registrasi($data)
{
  $conn = connect();
  $username = htmlspecialchars(strtolower($data['username']));
  $password = mysqli_escape_string($conn, $data['password']);
  $confpassword = mysqli_escape_string($conn, $data['confirmpassword']);
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username telah digunakan');
            </script>";
    return false;
  } else if ($password !== $confpassword) {
    echo "<script>
    alert('password tidak sama');
    </script>";
    return false;
  }

  $password_enkripsi = password_hash($password, PASSWORD_DEFAULT);
  $query_register = "INSERT INTO user VALUES (null,'$username','$password_enkripsi')";
  mysqli_query($conn, $query_register);

  return mysqli_affected_rows($conn);
}
