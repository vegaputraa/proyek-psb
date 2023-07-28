<?php 
include 'koneksi.php';
$nomor         = $_GET['nomor'];
$siswa_baru  = mysqli_query($con, "SELECT * FROM siswa_baru where nomor='$nomor'");
$row        = mysqli_fetch_array($siswa_baru);

$agama    = array('Islam', 'Kristen', 'Hindu', 'Budha', 'Konghuchu');
function active_radio_button($value, $input){
    $result = $value==$input?'checked':'';
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/edit.css">
    <title>Formulir Edit</title>
</head>
<body>
  <main>
    <form action="edit.php" method="post">
    <h1 class="text-center my-3 fs-3 fw-bold">Form Edit Data</h1>
    <input type="hidden" name="nomor" value="<?= $row['nomor'];?>">

    <table>
        <div class="mb-3 mt-3">
            <label for="nama" class="my-2" class="my-2">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= $row['nama'];?>" required>
        </div>

        <div class="mb-3 mt-3">
            <label for="alamat" class="my-2">Alamat</label>
            <textarea id="alamat" name="alamat" rows="1" value="<?= $row['alamat'];?>" required>
          </textarea>
        </div>

        <div class="mb-3 mt-3">
            <label class="my-2">Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value="L" <?= active_radio_button("L", $row['jenis_kelamin'])?> required>
              <label class="fw-normal" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="P" <?= active_radio_button("P", $row['jenis_kelamin'])?> required>
              <label class="fw-normal" for="perempuan">Perempuan</label>
            </div>
        </div>

      <div class="mt-3 mb-3">
        <label for="agama">Agama</label>
        <select class="form-select" id="agama" name="agama" required>
            <?php 
            foreach ($agama as $a) {
            echo "<option value = '$a' ";
            echo $row['agama'] == $a ?'selected="selected"' : '';
            echo ">$a</option>";
            }
            
            ?>
        </select>
      </div>
      


        <div class="mb-3 mt-3">
            <label for="sekolah_asal" class="my-2" class="my-2">Sekolah Asal</label>
            <input type="text" id="sekolah_asal" name="sekolah_asal" value="<?= $row['sekolah_asal'];?>" required>
        </div>

      <div class="mt-3 mb-1">
        <input class="btn btn-success" type="submit" value="Simpan" href="./../index.php">
        <a class="btn btn-danger" href="./../index.php">Kembali</a>
      </div>
    </table>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>