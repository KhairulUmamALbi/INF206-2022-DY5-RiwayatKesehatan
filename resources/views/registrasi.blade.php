@extends('layouts.mainD')
@section('container')

    <!-- form -->
    <form action="/profil/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" placeholder="nama_lengkap" name="nama_lengkap">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="NIK">NIK</label>
                                <input type="text" class="form-control" id="NIK" placeholder="Nomor Induk Keluarga" name="NIK">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                                <input type="alamat" class="form-control" id="alamat" placeholder="Alamat" name="Alamat">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="no_hp">No handphone </label>
                                <input type="no_hp" class="form-control" id="no_hp" placeholder="No handphone" name="no_hp">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="no_hp_wa_darurat">No handphone Darurat </label>
                                <input type="no_hp_wa_darurat" class="form-control" id="no_hp_wa_darurat" placeholder="No handphone Darurat" name="no_hp_wa_darurat">
                            </div>



                    </div>
                </div>
            </div>

            <div class="wrapper">
                <input class=" btn btn-success" type="submit" name="submit" value="Simpan" />
                <input class=" btn btn-danger" type="reset" name="reset" value="Batal" />
            </div>
    </form>

    <!-- akhir form -->
@endsection

