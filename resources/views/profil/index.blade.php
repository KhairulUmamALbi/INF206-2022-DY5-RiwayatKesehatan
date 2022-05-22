    @extends('layouts.main')

    @section('container')
        <!-- tampilan profil pasien  -->
        @foreach ($user as $pf)
            @if ($pf->NIK == $_SESSION['NIK'])

        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>{{ $pf->nama_lengkap }}</h4>
                                        <p class="text-secondary mb-1">{{ $pf->name}}</p>
                                        <p class="text-muted font-size-sm">Banda Aceh, Indonesia, By Rikes</p>
                                        <button class="btn btn-primary"></button>
                                        <button class="btn btn-outline-primary"></button>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Lengkap</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->nama_lengkap }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nomor Handphone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->no_hp }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nomor Handphone Darurat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->no_hp_wa_darurat }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->Alamat }}
                                    </div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Golongan Darah</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->golongan_darah }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">NIK</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $pf->NIK }}
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach





        <!-- akhir tampilan profil pasien  -->



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




