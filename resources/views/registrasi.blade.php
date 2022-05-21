<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu registrasi</title>
    <link rel="stylesheet" href="css/pp.css">
    <link rel="stylesheet" href="css/text.css">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
</head>

<body>
    <!-- <table>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="Date"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name='jenis_kelamin' value='pria'/>Pria
            <input type="radio" name='jenis_kelamin' value='perempuan'/>Perempuan</td>
        </tr>

        <tr>
            <td>Golongan Darah</td>
            <td>:</td>
            <td>
                <select >
                    <option>A</option>
                    <option>B</option>
                    <option>O</option>
                    <option>AB</option>
                </select>
            </td>
            <td><Select>
                <option>+</option>
                <option>-</option>
            </Select></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea cols="22" rows="3" ></textarea></td>
        </tr>

        <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input type="email"></td>
        </tr>

        <tr>
            <td>No Hp</td>
            <td>:</td>
            <td><input type="number"></td>
        </tr>

        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><select>
            <option>*****SELECT KOTA*****</option>
            <option>Aceh</option>
            <option>Bogor</option>
            <option>Jakarta</option>
            <option>Bekasi</option>
            <option>Tangerang</option>
            <option>Depok</option>
            <option>cikarang</option>
            <option>Banten</option>
            </select></td>
        </tr>

        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" id="Password"> </td>
        </tr>

        <tr>
            <td>Konfirmasi Password</td>
            <td>:</td>
            <td><input type="password" id="ConfirmPassword"></td>
        </tr>


        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan"/>
            <input type="reset" name="reset" value="Batal" /></td>
        </tr>

    </table>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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



    <!-- begin navbar -->
    <nav navbar-expand-lg navbar-light bg-light>
        <div class="row">
            <div class="col-12">
                <div class="navbar-brand">
                    <img src="../../img/Logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <ul class="nav justify-content-end nav text-lg ">
                        <li class="nav-item ">
                            <a class="nav-link" href="/beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/data_pasien">Layanan</a>
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

    <!-- form -->
    <form action="/profil/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- <div class="card-header">
                        <h3>Profil Pasien</h3>
                        <form action="" method="post">
                            <Img src="../img/Logo.png" class=" img border-radius: 6px">
                            <p>Upload Foto <input type='file' name='gambar' accept='image/*' /></p>
                        </form>
                    </div> -->
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" placeholder="#"
                                    name="nama_lengkap">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="NIK">NIK</label>
                                <input type="text" class="form-control" id="NIK" placeholder="#" name="NIK">
                            </div>
             

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="#" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="#" name="email">
                            </div>

                            

                    </div>
                </div>
            </div>

            <div class="wrapper">
                <input class=" btn btn-light" type="submit" name="submit" value="Simpan" />
                <input class=" btn btn-light" type="reset" name="reset" value="Batal" />
            </div>
    </form>

    <!-- akhir form -->


</body>

</html>
