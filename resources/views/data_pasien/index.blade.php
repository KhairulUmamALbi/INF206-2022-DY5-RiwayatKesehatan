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

    <!-- navbar -->
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


    {{-- search NIK --}}

    <form class=" col-3 -my-px" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    {{--end search NIK --}}

    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Golongan darah</th>
                <th scope="col">Subjek</th>
                <th scope="col">Objek</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Terapi</th>
                <th scope="col">Pemeriksa</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Opsi</th>


            </tr>
        </thead>
        <tbody>
            @foreach($data_pasien as $dp)
            <tr>
                <th scope="row">{{$dp->id}}</th>
                <!-- <td>{{$dp->id}}</td> -->
                <td>{{$dp->nama}}</td>
                <td>{{$dp->jenis_kelamin}}</td>
                <td>{{$dp->golongan_darah}}</td>
                <td>{{$dp->subjek}}</td>
                <td>{{$dp->objek}}</td>
                <td>{{$dp->diagnosa}}</td>
                <td>{{$dp->terapi}}</td>
                <td>{{$dp->pemeriksa}}</td>
                <td>{{$dp->tanggal}}</td>
                <td><a href="/data_pasien/{{$dp->id}}/edit">Edit</a></td>
                <td>
                    <form action="/data_pasien/{{$dp->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <!-- akhir table -->

    <div class="text-center">
    <a href="/data_pasien/create" class="btn btn-outline-primary">Tambah data pasien</a>
    </div>


    

</body>

<footer>
    <div class="footer">
        <div class="container-fluid card-footer">
            <div class="col-12">
                <div class="text-center">
                    <p>Copyright &copy; 2020 Riwayat Kesehatan</p>
                    <p>Call Center : 082211223344</p>
                </div>
            </div>
        </div>
    </div>

    </footer>
</html>
