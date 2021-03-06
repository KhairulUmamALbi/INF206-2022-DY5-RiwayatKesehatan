



@extends('layouts.mainD')

    @section('container')

    <!-- form -->

            <div class="col-md-12 border">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Edit Data Pasien</h4>

                    </div>
                </div>
    <form action="/data_pasien/{{$data_pasien->id}}" method="POST">
        @method('put')
        @csrf
        <div class=" mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$data_pasien->name}}">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <label for="jenis kelamin" class="form-label">jenis kelamin</label>
                <option selected>Pilih jenis kelamin</option>
                <option value="L" @if($data_pasien->jenis_kelamin =="L")selected @endif>L</option>
                <option value="P" @if($data_pasien->jenis_kelamin =="P")selected @endif>P</option>
            </select>
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="golongan_darah">
            <label for="golongan darah" class="form-label">golongan darah</label>
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


    @endsection
