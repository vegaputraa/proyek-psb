<?php 
include 'koneksi.php';
$siswa_baru = mysqli_query($con, "SELECT * FROM siswa_baru");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/app.css">
    <title>List Siswa</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center my-4">
            <img src=".././image/logo.png" width="200" height="200" alt="logo kemendikbud">
        </div>
        <h1 class="text-center mt-4 my-3 fs-2">Siswa Yang Sudah Mendaftar</h1>
        <a class="btn btn-primary my-3" href="form_input.php" role="button">Tambah Baru</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php foreach ($siswa_baru as $row) : ?>
                    <?php $jenis_kelamin = $row['jenis_kelamin']== 'P' ? 'Perempuan' : 'Laki-laki'; ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $jenis_kelamin; ?></td>
                            <td><?= $row['agama']; ?></td>
                            <td><?= $row['sekolah_asal']; ?></td>
                            <td>
                                <a href="form_edit.php?nomor=<?=$row["nomor"];?>" onclick="return confirm('Yakin ingin di Edit ?');" class='btn btn-success'>Edit</a>
                            </td>
                            <td>
                            <a href="delete.php?nomor=<?=$row["nomor"];?>" onclick="return confirm('Yakin ingin di Hapus ?');" class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
                <a class="btn btn-primary py-2" href="./../lap_excel.php" role="button">Export Excel</a>
                <a class="btn btn-danger py-2 px-3" href="./../index.php">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 
    </body>
</html>