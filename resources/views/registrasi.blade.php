<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu registrasi</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <table>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="number"></td>
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