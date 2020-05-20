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

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  if ($error == 4) {
    // echo "<script>
    //       alert('Pilih gambar terlebih dahulu');
    //       </script>";
    return 'no-avatar.png';
  }

  $format_gambar = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $format_gambar)) {
    echo "<script>
          alert('Format Gambar Tidak Cocok!');
          </script>";
    return false;
  }

  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
          alert('Yang anda pilih bukan format gambar!');
          </script>";
    return false;
  }

  if ($ukuran_file > 5000000) {
    echo "<script>
    alert('Ukuran gambar terlalu besar!');
    </script>";
    return false;
  }
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = connect();

  $nama = htmlspecialchars($data['nama']);
  $nrp =  htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  $gambar =  upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO  mahasiswa VALUES (null,'$nama','$nrp','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = connect();
  $mhs_gambar = query("SELECT * FROM mahasiswa WHERE id=$id;");
  if ($mhs_gambar['gambar'] != 'no-avatar.png') {
    unlink('img/' . $mhs_gambar['gambar']);
  }
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
  $gambar_lama =  htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  if ($gambar == 'no-avatar.jpg') {
    $gambar = $gambar_lama;
  }
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
