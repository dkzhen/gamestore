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

<head>
    <title>PUBG Mobile</title>
    <link href="libs/css/games.css" rel="stylesheet">
    <link href="libs/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- form Mobile Legends -->
    <div class="container">
        <div class="home" style="border-radius: 20px;">
            <div class="topgame">
                <a href="index.php">Game Store</a>
            </div>

            <div class="button">
                <a href="register.php" class="register-btn">DAFTAR</a>
            </div>
            <div class="button-1">
                <a href="login.php" class="login-btn">MASUK</a>
            </div>

        </div>

        <div class="pubgm-images"></div>
        <div class="header">
            <div class="judul">
                <h1>PUBG Mobile</h1>
            </div>
        </div>

        <div class="content">
            <form action="php/orderPubgm.php" method="post">
                <div class="id">
                    <h4>Masukkan User Id</h4>
                    <span class="number">1</span>
                    <div class="userid">
                        <input id="user" placeholder="Masukan ID Pemain" type="text" name="userid" required>
                        <p>
                            Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama
                            game.User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID
                            Anda
                            untuk menyelesaikan transaksi. Contoh : 123456789.
                        </p>
                    </div>
                </div>
                <!-- Voucher Diamond-->
                <div class="voucher">
                    <h4>Pilih Nominal Top up </h4>
                    <span class="number">2</span>
                    <div class="diamond-container">
                        <div class="app-paper">
                            <fieldset>
                                <input type="radio" name="brandtype" id="13" class="hidebx" value="15000"required>
                                <label for="13" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/bundel.png" style="border-radius: 10px;">
                                        </div>
                                        <div class="dm">Bundel Gacha</div>
                                        <div class="price">Rp15.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="14" class="hidebx" value="90000"required>
                                <label for="14" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/royalepass.jpg"
                                                style="border-radius: 10px;">
                                        </div>
                                        <div class="dm">Royale Pass</div>
                                        <div class="price">Rp90.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="15" class="hidebx" value="215000">
                                <label for="15" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/elitepass.jpg" style="border-radius: 10px;">
                                        </div>
                                        <div class="dm">Elite Pass Plus</div>
                                        <div class="price">Rp215.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="1" class="hidebx" value="10000"required>
                                <label for="1" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">50 UC</div>
                                        <div class="price">Rp10.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="2" class="hidebx" value="25000"required>
                                <label for="2" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">125 UC</div>
                                        <div class="price">Rp25.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="3" class="hidebx" value="50000" required>
                                <label for="3" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">250 UC</div>
                                        <div class="price">Rp50.000</div>
                                    </div>
                                </label>

                                <input type="radio" name="brandtype" id="4" class="hidebx" value="100000"required>
                                <label for="4" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">500 UC</div>
                                        <div class="price">Rp100.000</div>
                                    </div>
                                </label>

                                <input type="radio" name="brandtype" id="5" class="hidebx" value="250000"required>
                                <label for="5" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">1250 UC</div>
                                        <div class="price">Rp250.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="6" class="hidebx" value="500000" required>
                                <label for="6" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/uc.png"></div>
                                        <div class="dm">2500</div>
                                        <div class="price">Rp500.000</div>
                                    </div>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="payment">
                    <h4>Pilih Pembayaran </h4>
                    <span class="number">3</span>
                    <div class="payment-container">
                        <div class="payment-app">
                            <fieldset>
                                <input type="radio" name="paymentmethod" id="7" class="payment-hidebx" value="Dana"required>
                                <label for="7" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/dana.png"></div>
                                        <div class="payment-method">Dana</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="8" class="payment-hidebx" value="Bank"required>
                                <label for="8" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/bank.png"></div>
                                        <div class="payment-method">Bank</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="9" class="payment-hidebx" value="Ovo"required>
                                <label for="9" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/ovo.png"></div>
                                        <div class="payment-method">OVO</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="10" class="payment-hidebx" value="GoPay"required>
                                <label for="10" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/gopay.png"></div>
                                        <div class="payment-method">GoPay</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="11" class="payment-hidebx"value="Alfamart"required>
                                <label for="11" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/alfa.png"></div>
                                        <div class="payment-method">Alfarmart</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="12" class="payment-hidebx" value="Visa"required>
                                <label for="12" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/visa.png"></div>
                                        <div class="payment-method">Visa</div>
                                    </div>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <!-- Email -->
                <div class="email">
                    <h4>Masukkan E-mail Anda</h4>
                    <span class="number">4</span>
                    <div class="e-mail">
                        <input id="mail" placeholder="E-mail" type="email" name="email" required>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn">Beli Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--<div class="diamond-container">
                   <a class="dm-card" href="#">
                       <div class="dm-img">
                        <img alt src="img/diamond.png">
                       </div>
                       <div class="caption">50 Diamond</div>
                   </a>
                   <a class="dm-card" href="#">
                    <div class="dm-img">
                     <img alt src="img/diamond.png">
                    </div>
                    <div class="caption">50 Diamond</div>
                </a>
                <a class="dm-card" href="#">
                    <div class="dm-img">
                     <img alt src="img/diamond.png">
                    </div>
                    <div class="caption">50 Diamond</div>
                </a>
                <a class="dm-card" href="#">
                    <div class="dm-img">
                     <img alt src="img/diamond.png">
                    </div>
                    <div class="caption">50 Diamond</div>
                </a>
                <a class="dm-card" href="#">
                    <div class="dm-img">
                     <img alt src="img/diamond.png">
                    </div>
                    <div class="caption">50 Diamond</div>
                </a>
                <a class="dm-card" href="#">
                    <div class="dm-img">
                     <img alt src="img/diamond.png">
                    </div>
                    <div class="caption">50 Diamond</div>
                </a>
               </div>
            -->

</body>