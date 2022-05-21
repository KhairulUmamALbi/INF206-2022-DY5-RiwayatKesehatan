<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pasien</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/pp.css">
    <link rel="stylesheet" href="../css/text.css">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">

</head>

<!-- begin navbar -->
<nav navbar-expand-lg navbar-light bg-light>
    <div class="row">
        <div class="col-12">
            <div class="navbar-brand">
                <img src="../img/Logo.png" width="150">
            </div>
            <div class="container-fluid">
                <ul class="nav justify-content-end nav text-lg ">
                    <li class="nav-item ">
                        <a class="nav-link" href="/dashboard">Beranda</a>
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




<body>

    <form action="/profil/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card-header">
                        <h3>Profil Pasien</h3>
                        <form action="" method="post">
                            <Img src="../img/Logo.png" class=" img border-radius: 6px">
                            <p>Upload Foto <input type='file' name='gambar' accept='image/*' /></p>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="#"
                                    name="nama_lengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nomor Telepon</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nomor Telepon"
                                    name="no_telepon">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Alamat</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="#" name="alamat">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="inputEmail4">No hp/wa</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="no_hp_wa" name="no_hp_wa">
                            </div>
                        </div>

                        <div class="form-group col-md-6 mt-3">
                            <select class="form-control" name="golongan_darah">
                                <option selected>Pilih golongan darah</option>
                                <option>A</option>
                                <option>B</option>
                                <option>O</option>
                                <option>AB</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">NIK</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="#" name="NIK">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">No Hp/WA darurat</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="#" name="no_hp_wa_darurat">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="#" name="email">
                        </div>

                    </div>
                </div>
            </div>

            <div class="wrapper">
                <input class=" btn btn-light" type="submit" name="submit" value="Simpan" />
                <input class=" btn btn-light" type="reset" name="reset" value="Batal" />
            </div>
    </form>




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

    <!-- script boostrrap -->
    <script type="text/javascript" src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>

</body>

<footer>
    <div class="footer">
        <div class="container-fluid" <div class="card-footer">
            <div class="col-12">
                <div class="text-center">
                    <p>Copyright &copy; 2020 Riwayat Kesehatan</p>
                    <p>Call Center : 082211223344</p>
                </div>
            </div>
        </div>
    </div>
    </div </footer> </html>
