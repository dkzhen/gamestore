<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="libs/css/login.css">
        <link rel="stylesheet" href="libs/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="register">REGISTER</h1>
                <form action="php/registValidation.php" method="post">
                    <label>Nama</label><br>
                    <input type="text" name="nama" required><br>
                    <label>Email</label><br>
                    <input type="email" name="email" required><br>
                    <label>Username</label><br>
                    <input type="text" name="user" required><br>
                    <label>Password</label><br>
                    <input type="password" name="password" required><br>
                    <button type="submit" name="submit" style="cursor:pointer;">REGISTER</button>
                    <p> Sudah Punya Akun ?
                    <a href="login.php" style="text-decoration: none;">Login Di Sini</a>
                    </p>
                </form>
        </div>
    </body>
</html>