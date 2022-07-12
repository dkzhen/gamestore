<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="libs/css/login.css">
        <link rel="stylesheet" href="libs/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1 class="login">LOGIN</h1>
                <form action="php/loginValidation.php" method="post">
                    <label>USERNAME</label><br>
                    <input type="text" name="user" required><br>
                    <label>PASSWORD</label><br>
                    <input type="password" name="password" required><br>
                    <button type = "submit" name = "login" style="cursor:pointer;">LOGIN</button>
                    <p> Belum Punya Akun ?
                    <a href="register.php" style="text-decoration: none;">Register Di Sini</a>
                    </p>
                </form>
        </div>
    </body>
</html>