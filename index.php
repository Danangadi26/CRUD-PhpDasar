<?php

require 'query.php';

require 'search.php';

$siswa = query("SELECT * FROM siswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar SISWA</h1>

  <a href="tambah.php">Tambah data SISWA</a>
  <br><br>

  <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

  </form>

  <br>
  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>NIS</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Hobi</th>
      <th>Makanan</th>
      <th>Gambar</th>
      <th>Action</th>
    </tr>

    <?php $angka = 1; ?>
    <?php foreach ($siswa as $student) : ?>
    <tr>
      <td><?= $angka; ?></td>
      <td><?= $student["nama"]; ?></td>
      <td><?= $student["nis"]; ?></td>
      <td><?= $student["email"]; ?></td>
      <td><?= $student["jurusan"]; ?></td>
      <td><?= $student["hobi"]; ?></td>
      <td><?= $student["makanan"]; ?></td>
      <td><img src="img/<?= $student["gambar"]; ?>" width="50"></td>
      <td>
        <a href="ubah.php?id=<?= $student["id"]; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $student["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
      </td>
    </tr>
    <?php $angka++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>