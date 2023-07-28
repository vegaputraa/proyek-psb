<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/navbar.css">
    <title>Penerimaan Siswa Baru</title>
</head>
<body>
    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg py-2 px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SMAN Cirebon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="page/form_input.php">Daftar Baru</a>
                    </li>
                    <li class="nav-item fw-semibold">
                    <a class="nav-link" href="page/list_pendaftar.php">Pendaftar</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    <!-- Navbar End -->
    <!-- jumbotron -->
    <div class="d-flex justify-content-center" >
        <img src="image/digi.jpg" alt="Logo Digi Talent Scholarship">
    </div>
    <!-- jumbotron end -->
        <?php if(isset($_GET['status'])): ?>
            <p class="text-center">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>