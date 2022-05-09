<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIWAYAT</title>
	<style>
		

		.input{
			padding-top:10px;
		}

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body> 
<p ALIGN="CENTER">DAFTAR RIWAYAT KESEHATAN</p>
<BR>

 
  

    <table class="table" style="padding-top:30px;">
      
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis kelamin</th>
          <th>Golongan darah</th>
          <th>Subjek</th>
          <th>Objek</th>
          <th>Diagnosa</th>
          <th>Terapi</th>
          <th>Pemeriksa</th>
          <th>Tanggal</th>
          <th>Opsi</th>
        </tr>
      

     
      @foreach($data_pasien as $dp)
        <tr>
          <td>{{$dp->id}}</td>
          <td>{{$dp->nama}}</td>
          <td>{{$dp->jenis_kelamin}}</td>
          <td>{{$dp->golongan_darah}}</td>
          <td>{{$dp->subjek}}</td>
          <td>{{$dp->objek}}</td>
          <td>{{$dp->diagnosa}}</td>
          <td>{{$dp->terapi}}</td>
          <td>{{$dp->pemeriksa}}</td>
          <td>{{$dp->tanggal}}</td>
          <td><a href="/riwayat/{{1}}/edit">Edit</a></td>
        </tr>
      @endforeach
      <button><a class ="nav-link" href="/data_pasien/create">Tambah</a></button>
     
      
    </table>
  </div>

</body>
</html>