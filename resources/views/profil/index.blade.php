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
    <nav navbar-expand-lg navbar-light bg-light>
        <div class="row">
            <div class="col-12">
                <div class="navbar-brand">
                    <img src="img/Logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <ul class="nav justify-content-end nav text-lg">
                        <li class="nav-item ">
                            <a class="nav-link" href="/dashboard">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/data_pasien">Layanan</a>
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
    <!-- end navbar -->

    <!-- tampilan profil pasien  -->
    @foreach($profil as $pf)
    <div class="container">
        <div class="row">
            <div class="text-center">
                <img src="{{url($pf->gambar)}}" class="rounded mx-auto d-block" alt="...">

            </div>

        </div>

        <div class="row">
            <div class="text-center">
                <h5>Nama lengkap <br> {{$pf->nama}}</h5>
                <h5>No.Telepon <br> {{$pf->no_telepon}}</h5>
                <h5>Alamat <br> {{$pf->alamat}}</h5>
                <h5>No.hp/WA <br> {{$pf->no_hp_wa}}</h5>
                <h5>Golongan darah <br> {{$pf->golongan_darah}}</h5>
                <h5>NIK <br> {{$pf->NIK}}</h5>
                <h5>No.hp/WA darurat <br> {{$pf->no_hp_wa_darurat}}</h5>
                <h5>Email <br> {{$pf->email}}</h5>
            </div>
        </div>


    </div>
    @endforeach

    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="/profil/create" class="btn btn-outline-primary">Isi profil</a> 
    <a href="/data_pasien/create" class="btn btn-outline-primary">Ubah profil</a> 
    </div>










    <!-- akhir tampilan profil pasien  -->

</body>

</html>
