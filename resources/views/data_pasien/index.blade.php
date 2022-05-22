@extends('layouts.main')

@section('container')
<section>

<!-- table -->
@if ($_SESSION['role'] == 1)


<table class="table table-hover table-bordered">
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
            <td>{{$dp->name}}</td>
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
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>



        </tr>
        @endforeach

    </tbody>
</table>

<div class="text-center">
    <a href="/data_pasien/create" class="btn btn-success" class="btn btn-outline-primary">Tambah data pasien</a>
    </div>

@endif


@if ($_SESSION['role'] == 0)

    @method('put')
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

        </tr>
    </thead>
    <tbody>

        @foreach($data_pasien as $dp)
        @if ($dp->NIK == $_SESSION['NIK'])


        <tr>
            <th scope="row">{{$dp->id}}</th>
            <!-- <td>{{$dp->id}}</td> -->
            <td>{{$dp->name}}</td>
            <td>{{$dp->jenis_kelamin}}</td>
            <td>{{$dp->golongan_darah}}</td>
            <td>{{$dp->subjek}}</td>
            <td>{{$dp->objek}}</td>
            <td>{{$dp->diagnosa}}</td>
            <td>{{$dp->terapi}}</td>
            <td>{{$dp->pemeriksa}}</td>
            <td>{{$dp->tanggal}}</td>

        </tr>
        @endif
        @endforeach

    </tbody>
</table>
@endif

</section>



@endsection


