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
	
</head>
<body> 
<p ALIGN="CENTER">DAFTAR RIWAYAT KESEHATAN</p>
<BR><table cellpadding="3" cellspacing="3">
<tr>
	<td>1. Nama </td>
	<td>:</td>
	<td><input type="text"> </td>
</tr>

<tr>
	<td>2. Jenis Kelamin </td>
	<td>:</td>
	<td>
		<select >
			<option>Laki-Laki </option>
			<option>Perempuan </option>
		</select>
	</td>
</tr>

<tr>
	<td>3. Golongan Darah </td>
	<td>:</td>
	<td>
		<select >
			<option>A</option>
			<option>B</option>
			<option>O</option>
			<option>AB</option>
		</select>
	</td>


<table class="table" style="padding-top:30px;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Subjek</th>
      <th scope="col">Objek</th>
      <th scope="col">Diagnosa</th>
	    <th scope="col">Terapi</th>
      <th scope="col">Pemeriksa</th>
      <th scope="col">Tanggal</th>
	    <th scope="col">Aksi</th>
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bicara Pelo</td>
      <td>Tekanan Darah Tinggi</td>
      <td>Stroke</td>
	    <td>Bed rest, Paracetamol</td>
      <td>Dr.Lorem sp.A</td>
      <td>25-02-2022</td>
	    <td><a href="/riwayat/{{1}}/edit">Edit</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sering Buang air kecil </td>
      <td>Gula darah tinggi</td>
      <td>Diabetes</td>
	    <td>Terapi Insulin</td>
      <td>Dr.Ahmad Yani sp.PD</td>
      <td>15-03-2022</td>
      <td><a href="/riwayat/{{2}}/edit">Edit</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Demam Tinggi</td>
      <td>munculnya bintik perdarahan (ptekie) pada kulit</td>
	    <td>Demam Berdarah (DBD)</td>
      <td>Antibiotik dan Paracetamol</td>
      <td>Dr.Ahmad Yani sp.PD</td>  
      <td>21-03-2022</td>
      <td><a href="/riwayat/{{3}}/edit">Edit</a></td>
    </tr>
	
  </tbody>
</table>


</table>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#btnSubmit").click(function () {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtConfirmPassword").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script> -->

</body>
</html>