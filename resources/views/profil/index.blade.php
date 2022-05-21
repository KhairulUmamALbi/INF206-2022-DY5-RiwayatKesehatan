    @extends('layouts.main')

@section('container')

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

<<<<<<< HEAD
    </footer>

</html>
=======
@endsection
>>>>>>> 2008107010072
