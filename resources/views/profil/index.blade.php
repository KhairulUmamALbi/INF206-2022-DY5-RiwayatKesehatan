<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../../css/pp.css">
    <link rel="stylesheet" href="../../css/text.css">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.css">
    <title>Edit</title>
</head>

<body>
    <!-- begin navbar -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light.text-$green-500 bg-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Riwayat Kesehatan Pasien</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
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
                                    <a class="nav-link" href="#">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar akhir -->
    <!-- end navbar -->

    <!-- tampilan profil pasien  -->
    @foreach($profil as $pf)
    <div class="container">
        <div class="row">
            <div class="text-center">
                <img src="" class="rounded mx-auto d-block" alt="...">

            </div>

        </div>

        <div class="row">
            <div class="text-center">
                <h5>Nama lengkap <br> {{$pf->nama_lengkap}}</h5>
                <h5>No.Telepon <br> {{$pf->no_telepon}}</h5>
                <h5>Alamat <br> {{$pf->alamat}}</h5>
                <h5>No.hp/WA <br> {{$pf->no_hp_wa}}</h5>
                <h5>Golongan darah <br> {{$pf->golongan_darah}}</h5>
                <h5>NIK <br> {{$pf->NIK}}</h5>
                <h5>No.hp/WA darurat <br> {{$pf->no_hp_wa_darurat}}</h5>
                <h5>Email <br> {{$pf->email}}</h5>
            </div>
            <div>
            <form action="/profil/{{$pf->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus Profil" class="btn btn-outline-primary mb-3 mx-auto d-grid">
                    </form>
            </div>
            <div class="d-grid gap-2 mx-auto">
                <a href="/profil/{{$pf->id}}/edit" class="btn btn-outline-primary">Ubah profil</a>
            </div>





            @endforeach


            <div class="d-grid gap-2 mx-auto mt-3">
                <a href="/profil/create" class="btn btn-outline-primary">Isi profil</a>
            </div>















            <!-- akhir tampilan profil pasien  -->

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
