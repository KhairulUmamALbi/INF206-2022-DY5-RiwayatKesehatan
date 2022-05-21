<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <style>
    .input {
      padding-top: 10px;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>

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
        <select>
          <option>Laki-Laki </option>
          <option>Perempuan </option>
        </select>
      </td>
    </tr>

    <tr>
      <td>3. Golongan Darah </td>
      <td>:</td>
      <td>
        <select>
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
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
            <td> <input type="text" class="form-control " style="padding-right:60px"></td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Simpan</button>
      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
      </td>
    </tr>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>

    <div id="tambah" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data</h4>
          </div>
          <form method="post" encytype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group">
                <label class="control-label" for="subjek">subjek</label? <input type="text" name="subjek" class="form-control" id="subjek" required>

              </div>
              <script>
                $(document).ready(function) {
                $('#select_all').on('click', function() {
                  if (this.checked) {
                    $('.check').each(function() {
                      this.checked = true;
                    })
                  } else {
                    $('.check').each(function() {
                      this.checked = false;
                    })
                  }
                });
                $('.check').on('click', function() {
                  if ($('.check:checked').length == $('.check').length) {
                    $('#select_all').prop('checked', true)
                  } else {
                    $('#select_all').prop('checked', false)
                  }
                })
                }

                function edit() {
                  document.proses.action = 'edit.php';
                  document.proses.submit();
                }

                function hapus() {
                  var conf = confirm('Yakin akan menghapus data?');
                  if (conf) {
                    document.proses.action = 'del.php';
                    document.proses.submit();
                  }
                }
              </script>

</body>

</html>