<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/text.css">
    <title>Riwayat Kesehatan</title>
</head>
<body>
    <nav>
        <div class="Logo"><img src="img/Logo.png">
        </div>

    </nav>

    <section>
        <div class="container">
                <h1>Login</h1>
                <form action="/beranda" method="POST">
                    @csrf
                    <label>Username</label><br>
                    <input type="text" name="name" placeholder="Username" required><br>
                    <label>Password</label><br>
                    <input type="password" name="password" placeholder="Password" required><br><br>
                    <button>Log in</button>
                    <button><a class ="nav-link" href="/registrasi">Register</a></button><br>
                    <a class ="lupa" href="/lupapass">Forget Password</a>
                </form>
            </div>

    </section>

    <footer>
        <p>Copyright &copy; 2022 Riwayat Kesehatan</p>
    </footer>
</body>
</html>
