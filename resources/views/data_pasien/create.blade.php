<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/pp.css">
    <link rel="stylesheet" href="../css/text.css">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
    <title>Tambah data</title>
</head>

<body>

    <!-- navbar -->
    <nav navbar-expand-lg navbar-light bg-light>
        <div class="row">
            <div class="col-12">
                <div class="navbar-brand">
                    <img src="../img/Logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <ul class="nav justify-content-end nav text-lg ">
                        <li class="nav-item ">
                            <a class="nav-link" href="/dashboard">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/riwayat">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/panduan">Panduan Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- akhir navbar -->

    <!-- form -->
    <form action="/data_pasien/store" method="POST" enctype="multipart/form-data">
    @csrf 
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Pilih jenis kelamin</option>
                <option>L</option>
                <option>P</option>
            </select>
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="golongan_darah">
                <option selected>Pilih golongan darah</option>
                <option>A</option>
                <option>B</option>
                <option>O</option>
                <option>AB</option>
            </select>
        </div>

        <!-- <div class="mb-3">
            <label for="no" class="form-label">id</label>
            <input type="text" class="form-control" id="no">
        </div> -->
        <div class="mb-3">
            <label for="subjek" class="form-label">Subjek</label>
            <input type="text" class="form-control" id="subjek" name="subjek">
        </div>
        <div class="mb-3">
            <label for="objek" class="form-label">Objek</label>
            <input type="text" class="form-control" id="objek" name="objek">
        </div>
        <div class="mb-3">
            <label for="diagnosa" class="form-label">Diagnosa</label>
            <input type="text" class="form-control" id="diagnosa" name="diagnosa">
        </div>
        <div class="mb-3">
            <label for="terapi" class="form-label">Terapi</label>
            <input type="text" class="form-control" id="terapi" name="terapi">
        </div>
        <div class="mb-3">
            <label for="pemeriksa" class="form-label">Pemeriksa</label>
            <input type="text" class="form-control" id="pemeriksa" name="pemeriksa">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal">
        </div>

        <button type="submit" value="tambah data">Submit</button>
    </form>
    <!-- akhir form -->

    <footer>
    <div class="footer">
        <div class="container-fluid" <div class="card-footer">
            <div class="col-12">
                <div class="text-center">
                    <p>Copyright &copy; 2020 Riwayat Kesehatan</p>
                    <p>Call Center : 082211223344</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
