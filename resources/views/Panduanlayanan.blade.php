<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <link rel="stylesheet" href="css/pp.css">
    <link rel="stylesheet" href="css/text.css">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
            background-image: url("img/Login.png");
        }

    </style>

    <title>Panduan Layanan</title>
</head>

<body>

    <!-- begin navbar -->
 <nav navbar-expand-lg navbar-light bg-light>
        <div class="row">
            <div class="col-12">
                <div class="navbar-brand">
                    <img src="../../img/Logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <ul class="nav justify-content-end nav text-lg ">
                        <li class="nav-item ">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/data_pasien">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/panduanlayanan">Panduan Layanan</a>
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
    <!-- end navbar -->
    <!-- Panduan Layanan -->

    <section id="Panduan-Layanan" class="">
        <div class="container p-5">
            <div class="row text-center mb-4 mt-4">
                <div class="col">
                    <h2>Panduan Layanan</h2>
                </div>
            </div>
            <span>
                <div class="row text-center border-bottom bg-light text-dark">
                    <p class="lead">Cara Menggunakan Layanan Ini Sebagai Berikut:</p>
                    <p class="lead">1. Jika anda ingin melihat atau membaca berita anda dapat membacanya pada
                        laman beranda.</p>
                    <p class="lead">2. Jika anda ingin melihat biodata anda, maka tekan profil pada bagian
                        atas dashboard.</p>
                    <p class="lead">3. Jika anda ingin melihat riwayat penyakit atau seputar tentang kesehatan
                        anda, dapat dilihat pada laman layanan</p>
                    <p class="lead">4. Jika anda sudah puas menggunakan layanan kami, maka anda dapat keluar
                        dari website dengan mengklik logout</p>
                </div>
        </div>

    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#66cdaa" fill-opacity="0.5"
            d="M0,224L48,218.7C96,213,192,203,288,170.7C384,139,480,85,576,96C672,107,768,181,864,208C960,235,1056,213,1152,176C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <!-- Akhir panduan layanan -->

    <!-- About us -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#66cdaa" fill-opacity="0.5"
            d="M0,224L48,218.7C96,213,192,203,288,170.7C384,139,480,85,576,96C672,107,768,181,864,208C960,235,1056,213,1152,176C1248,139,1344,85,1392,58.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <section id="kritik dan saran" class="jumbotron text-center">
        <div class="container">
            <div class="row text-center mb-2">
                <div class="col">
                    <h2>Kritik dan Saran</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan dan Masukan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"> Kirim</button>
                    </form>
                </div>
            </div>
    </section>
    <!-- akhir about us -->


    <!-- Footer -->

    <footer class="text-primary fw-bold text-center p-1 mt-5">
        <p>Copyright &copy; 2022 Riwayat Kesehatan</p>
    </footer>
    <!-- Akhir footer -->
</body>

</html>
