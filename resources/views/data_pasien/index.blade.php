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
    <nav navbar-expand-lg navbar-light bg-light>
        <div class="row">
            <div class="col-12">
                <div class="navbar-brand">
                    <img src="../../img/Logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <ul class="nav justify-content-end nav text-lg ">
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

    <!-- akhir navbar -->


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
   