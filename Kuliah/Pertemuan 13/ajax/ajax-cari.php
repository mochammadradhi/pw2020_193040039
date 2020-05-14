<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table class="ui very basic collapsing celled table">

  <tbody>
    <tr>
      <th class="center aligned">#</th>
      <th class="center aligned">Mahasiswa</th>
      <th class="center aligned">Aksi</th>
    </tr>
    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="6">
          <h4 class="kosong center aligned" id="kosong">Data Tidak Ditemukan!</h4>
        </td>
      </tr>
    <?php else : ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td class="center aligned"><?= $mhs['id'] ?></td>
          <td>
            <h4 class="ui image header">
              <img src="img/<?= $mhs['gambar'] ?>" class="ui mini rounded image">
              <div class="content">
                <?= $mhs['nama'] ?>
                <div class="sub header"><?= $mhs['jurusan'] ?>
                </div>
              </div>
            </h4>
          </td>
          <td>
            <a href="detail.php?id=<?= $mhs['id'] ?>">Lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>