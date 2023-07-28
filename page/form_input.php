<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/input.css">
    <title>Formulir Input</title>
</head>
<body>
<form action="simpan.php" method="post">
    
<h1 class="text-center my-3 fs-3 fw-bold">Formulir Penerimaan Siswa Baru</h1>
    <div class="mb-3 mt-3">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="1" required></textarea>
    </div>

    <div class="mb-3 mt-3" id="radio_jk">
      <label>Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" required>
        <label class="form-check-label fw-normal" for="laki_laki">
          Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" required>
        <label class="form-check-label fw-normal" for="perempuan">
          Perempuan
        </label>
      </div>
    </div>

    <div class="mb-3 mt-3">
      <label for="agama">Agama</label>
      <select id="agama" name="agama" required>
        <option class="text-center" selected>---Pilih---</option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
        <option value="konghuchu">Konghuchu</option>
      </select>
    </div>

    <div class="mb-3 mt-3">
      <label for="sekolah_asal">Sekolah Asal</label>
      <input type="text" id="sekolah_asal" name="sekolah_asal" required>
    </div>

    <!-- Button -->
    <div class="my-2">
      <input class="btn btn-success py-2 px-3" type="submit" value="Daftar" name="daftar">
      <a class="btn btn-danger py-2 px-3" href="./../index.php">Kembali</a>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>