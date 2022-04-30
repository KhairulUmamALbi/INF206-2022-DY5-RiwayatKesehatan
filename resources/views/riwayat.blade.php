<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RIWAYAT</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="css/pp.css">
  <link rel="stylesheet" href="css/text.css">
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">

</head>
<<<<<<< HEAD
<body> 
<p ALIGN="CENTER">DAFTAR RIWAYAT KESEHATAN</p>
<BR>

  <table cellpadding="3" cellspacing="3">
    <tr>
      <td><label for="name">1. Nama: </label>
      <td>:</td>
      <td><input type="text" id="name" /> </td>
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
          <th>No</th>
          <th>Subjek</th>
          <th>Objek</th>
          <th>Diagnosa</th>
          <th>Terapi</th>
          <th>Pemeriksa</th>
          <th>Tanggal</th>
          <th>Aksi</th>
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
=======

<!-- begin navbar -->
<nav navbar-expand-lg navbar-light bg-light>
    <div class="row">
        <div class="col-12">
            <div class="navbar-brand">
                <img src="img/Logo.png" width="150">
            </div>
            <div class="container-fluid">
                <ul class="nav justify-content-end nav text-lg ">
                    <li class="nav-item ">
                        <a class="nav-link" href="/dashboard">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/panduan">Panduan Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</nav>
<!-- end navbar -->


<body>


  <div class=" container-fluid">
    <div class="col-12">
      <div class="card-header">
        <h3 class="text-center">DAFTAR RIWAYAT KESEHATAN</h3>
      </div>

      <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputEmail4">Nama</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="#">
      </div>

      <div class="form-group col-md-2">
        <label for="inputEmail4">Golongan Darah</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="#">
      </div>

      <div class="form-group col-md-2">
        <label for="inputEmail4">Jenis Kelamin</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="#">
      </div>
      </div>

    </div>
    <div class="container-fluid">
      <table class="table table-sm table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Subjek</th>
            <th>Objek</th>
            <th>Diagnosa</th>
            <th>Terapi</th>
            <th>Pemeriksa</th>
            <th>Tanggal</th>
            <th>Opsi</th>
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
    </div>
>>>>>>> 2008107010072
  </div>


  <!-- script boostrrap -->
  <script type="text/javascript" src="asset/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"></script>


</body>

</html>