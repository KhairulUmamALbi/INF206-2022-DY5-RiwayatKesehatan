
@extends('layouts.mainD')

@section('container')


    <!-- form -->
    <form action="/data_pasien/store" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">nama</label>
            <input type="text" class="form-control" id="name" name="name">
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
            <label for="NIK" class="form-label">NIK</label>
            <input type="text" class="form-control" id="NIK" name="NIK">
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


@endsection
