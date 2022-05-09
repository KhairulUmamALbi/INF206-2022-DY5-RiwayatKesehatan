
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

<table cellpadding="3" cellspacing="3">
    <form action="/data_pasien/store" method="POST">
    @csrf 
    <tr>
      <td><label for="name">1. Nama: </label>
      <td>:</td>
      <td><input type="text" id="name" name="nama"> </td>
    </tr>

    <tr>
      <td>2. Jenis Kelamin </td>
      <td>:</td>
      <td>
        <select name="jenis_kelamin">
          <option>L</option>
          <option>P </option>
        </select>
      </td>
    </tr>

    <tr>
      <td>3. Golongan Darah </td>
      <td>:</td>
      <td>
        <select name="golongan_darah" >
          <option>A</option>
          <option>B</option>
          <option>O</option>
          <option>AB</option>
        </select>
      </td>

    <table class="table"  style="padding-top:30px;">
      
        <tr>
          <th>No</th>
          <th>Subjek</th>
          <th>Objek</th>
          <th>Diagnosa</th>
          <th>Terapi</th>
          <th>Pemeriksa</th>
          <th>Tanggal</th>
        </tr>
        

        
        <tr>
          <td scope="row" >1</td>
          <td > <input type="text" class="form-control " style="padding-right:60px" name="subjek"></td>
          <td> <input type="text" class="form-control " style="padding-right:60px"  name="objek"></td>
          <td> <input type="text" class="form-control " style="padding-right:60px"  name="diagnosa"></td>
          <td> <input type="text" class="form-control " style="padding-right:60px"  name="terapi"></td>
          <td> <input type="text"  class="form-control " style="padding-right:60px"  name="pemeriksa"></td>
          <td> <input type="text"  class="form-control " style="padding-right:60px" name="tanggal"></td>
        </tr>
        <tr>
            <input type="submit" name="submit" value="tambah data">
        </tr>
        </form>
      
      
    </table> 
</html>