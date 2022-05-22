    @extends('layouts.mainD')

    @section('container')

    <form class=" col-3 -my-px" class="d-flex" action="/data_pasien/cari" method="GET" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ old('nik') }}">
        <button class="btn btn-outline-success" type="submit" value="cari">Search</button>
    </form>
    {{--end search NIK --}}
`
    <!-- table -->
    <br>
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
<<<<<<< HEAD
</html>
=======


@endsection
>>>>>>> 2008107010072
