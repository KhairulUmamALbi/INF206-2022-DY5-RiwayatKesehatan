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

    <!-- form -->
    <form action="/data_pasien/{{$data_pasien->id}}" method="POST">
     @method('put')
    @csrf 
        <div class=" mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$data_pasien->nama}}">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Pilih jenis kelamin</option>
                <option value="L" @if($data_pasien->jenis_kelamin =="L")selected @endif>L</option>
                <option value="P" @if($data_pasien->jenis_kelamin =="P")selected @endif>P</option>
            </select>
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="golongan_darah">
                <option selected>Pilih golongan darah</option>
                <option value="A" @if($data_pasien->golongan_darah =="A")selected @endif>A</option>
                <option value="B" @if($data_pasien->golongan_darah =="B")selected @endif>B</option>
                <option value="O" @if($data_pasien->golongan_darah=="O")selected @endif>O</option>
                <option value="AB" @if($data_pasien->golongan_darah =="AB")selected @endif>AB</option>
            </select>
        </div>

        <!-- <div class="mb-3">
            <label for="no" class="form-label">id</label>
            <input type="text" class="form-control" id="no">
        </div> -->
        <div class="mb-3">
            <label for="subjek" class="form-label">Subjek</label>
            <input type="text" class="form-control" id="subjek" name="subjek" value="{{$data_pasien->subjek}}">
        </div>
        <div class="mb-3">
            <label for="objek" class="form-label">Objek</label>
            <input type="text" class="form-control" id="objek" name="objek" value="{{$data_pasien->objek}}">
        </div>
        <div class="mb-3">
            <label for="diagnosa" class="form-label">Diagnosa</label>
            <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="{{$data_pasien->diagnosa}}">
        </div>
        <div class="mb-3">
            <label for="terapi" class="form-label">Terapi</label>
            <input type="text" class="form-control" id="terapi" name="terapi" value="{{$data_pasien->terapi}}">
        </div>
        <div class="mb-3">
            <label for="pemeriksa" class="form-label">Pemeriksa</label>
            <input type="text" class="form-control" id="pemeriksa" name="pemeriksa" value="{{$data_pasien->pemeriksa}}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{$data_pasien->tanggal}}">
        </div>

        <button type="submit" value="update">update</button>
    </form>
    <!-- akhir form -->

</body>

</html>
