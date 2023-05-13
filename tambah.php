<?php
require 'tambah-data.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah data SISWA</title>
</head>

<body>
  <h1>Tambah data SISWA</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="nis">NIS : </label>
        <input type="text" name="nis" id="nis" required>
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan">
      </li>
      <li>
        <label for="hobi">Hobi :</label>
        <input type="text" name="hobi" id="hobi">
      </li>
      <li>
        <label for="makanan">Makanan :</label>
        <input type="text" name="makanan" id="makanan">
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>

  </form>




</body>

</html>