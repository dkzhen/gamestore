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
    <title>Mobile Legends</title>
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

        <div class="hero-images"></div>
        <div class="header">
            <div class="judul">
                <h1>Mobile Legends</h1>
            </div>
        </div>
        <div class="content">
            <form action="php/orderMlbb.php" method="post">
                <div class="id">
                    <h4>Masukkan User Id</h4>
                    <span class="number">1</span>
                    <div class="userid">
                        <input id="user" placeholder="User ID" type="text" name="userid" required>
                        <input id="zone" placeholder="Zone ID" type="text" name="zoneid" required>
                        <p>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama
                            game.User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID
                            Anda
                            untuk menyelesaikan transaksi. Contoh : 12345678(1234).</p>
                    </div>
                </div>
                <!-- Voucher Diamond-->
                <div class="voucher">
                    <h4>Pilih Nominal Top up </h4>
                    <span class="number">2</span>
                    <div class="diamond-container">
                        <div class="app-paper">
                            <fieldset>
                                <input type="radio" name="brandtype" id="1" class="hidebx" value="50000" required>
                                <label for="1" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">50 Diamond</div>
                                        <div class="price">Rp50.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="2" class="hidebx" value="100000" required>
                                <label for="2" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">100 Diamond</div>
                                        <div class="price">Rp100.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="3" class="hidebx" value="200000" required>
                                <label for="3" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">200 Diamond</div>
                                        <div class="price">Rp200.000</div>
                                    </div>
                                </label>

                                <input type="radio" name="brandtype" id="4" class="hidebx" value="300000" required>
                                <label for="4" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">300 Diamond</div>
                                        <div class="price">Rp300.000</div>
                                    </div>
                                </label>

                                <input type="radio" name="brandtype" id="5" class="hidebx" value="400000" required>
                                <label for="5" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">400 Diamond</div>
                                        <div class="price">Rp400.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="6" class="hidebx" value="500000" required>
                                <label for="6" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/diamond.png"></div>
                                        <div class="dm">500 Diamond</div>
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
                                <input type="radio" name="paymentmethod" id="7" class="payment-hidebx" value="Dana"
                                    required>
                                <label for="7" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/dana.png"></div>
                                        <div class="payment-method">Dana</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="8" class="payment-hidebx" value="Bank"
                                    required>
                                <label for="8" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/bank.png"></div>
                                        <div class="payment-method">Bank</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="9" class="payment-hidebx" value="Ovo"
                                    required>
                                <label for="9" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/ovo.png"></div>
                                        <div class="payment-method">OVO</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="10" class="payment-hidebx" value="GoPay"
                                    required>
                                <label for="10" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/gopay.png"></div>
                                        <div class="payment-method">GoPay</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="11" class="payment-hidebx" value="Alfamart"
                                    required>
                                <label for="11" class="payment-lbl-radio">
                                    <div class="payment-display-box">
                                        <div class="payment-img"><img src="libs/img/alfa.png"></div>
                                        <div class="payment-method">Alfarmart</div>
                                    </div>
                                </label>
                                <input type="radio" name="paymentmethod" id="12" class="payment-hidebx" value="Visa"
                                    required>
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