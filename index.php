<?php
session_start();
if(empty($_SESSION['user_autentification'])) {
	header("location:login.php");
	die();
}
if($_SESSION['user_autentification'] !="valid") {
	header("location:login.php");
	die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>TOP UP GAME</title>
    <link href="libs/css/style.css" rel="stylesheet" />
    <link href="libs/css/games.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="home" style="border-radius: 20px;">
            <div class="topgame">
                <a href="index.php" >Game Store</a>
            </div>

            <div class="button">
                <a href="register.php" class="register-btn">DAFTAR</a>
            </div>
            <div class="button-1">
                <a href="login.php" class="login-btn">MASUK</a>
            </div>

        </div>

        <div class="game-images"></div>


        <div class="content">
            <div class="list-container">
                <a class="game-card" href="mlbb.php">
                    <div class="game-img">
                        <img alt src="libs/img/Mlbb.jpg">
                    </div>
                    <div class="caption">Mobile Legend</div>
                </a>

                <a class="game-card" href="genshin.php">
                    <div class="game-img">
                        <img alt src="libs/img/genshin.png">
                    </div>
                    <div class="caption">Genshin Impact</div>
                </a>

                <a class="game-card" href="pubgm.php">
                    <div class="game-img">
                        <img alt src="libs/img/pubgm1.jpg">
                    </div>
                    <div class="caption">PUBG Mobile</div>
                </a>
            </div>
        </div>
<!--
        <section class="footer">
            <div class="footer-container">
                <div class="footer-contact">
                    <div class="help">
                        <p>Butuh bantuan?</p>
                        <div class="help-logo">
                            <a href="#">Hubungi Kami</a>
                        </div>
                        <div class="area">
                            <p>Area</p>
                            <div class="area-flag">
                            <select>
                                <option value="0">Indonesia</option>
                                <option value="1">Malaysia</option>
                                <option value="2">Singapura</option>
                                <option value="3">Thailand</option>
                                <option value="4">Philipina</option>
                                <option value="5">Vietnam</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-rules">
                    <ul>
                        <li>©Hak Cipta Game Store 2022</li>
                        <li>Syarat & Ketentuan</li>
                        <li>Kebijakan Privasi</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
-->
</body>

</html>