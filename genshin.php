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
    <title>Genshin Impact</title>
    <link href="libs/css/games.css" rel="stylesheet">
    <link href="libs/css/style.css" rel="stylesheet">
    <link href="libs/css/genshin.css" rel="stylesheet">
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

        <div class="genshin-images"></div>
        <div class="header">
            <div class="judul">
                <h1>Genshin Impact</h1>
            </div>
        </div>

        <div class="content">
            <form action="php/orderGenshin.php" method="post">
                <div class="help">
                    <h4>Bonus Top Up Perdana</h4>
                    <div class="info">
                        <p>Jika karakter mu dalam game belum pernah melakukan top up melalui platform mana pun, kamu
                            bisa:<br>
                            Top up <b>300+300</b> Genesis Crystal untuk mendapatkan <b>600</b> Genesis Crystal.<br>
                            Top up <b>980+980</b> Genesis Crystal untuk mendapatkan <b>1.960</b> Genesis Crystal.<br>
                            Top up <b>1.980+1.980</b> Genesis Crystal untuk mendapatkan <b>3.960</b> Genesis
                            Crystal.<br>
                            Top up <b>3.280+3.280</b> Genesis Crystal untuk mendapatkan <b>6.560</b> Genesis
                            Crystal.<br>
                            Top up <b>6.480+6.480</b> Genesis Crystal untuk mendapatkan <b>12.960</b> Genesis Crystal.
                        </p>
                    </div>
                </div>

                <div class="help">
                    <h4>Blessing Of The Welkin Moon</h4>
                    <div class="info">
                        <p>Setiap kali membeli Blessing Of The Welkin Moon, kamu akan memperoleh 300 Genesis
                            Crystal dan durasi Blessing
                            selama 30 hari. Selama 30 hari tersebut, kamu akan menerima 90 Primogem setiap
                            harinya saat log in ke dalam game.</p>
                        <p>CATATAN PENTING:<br>
                            Durasi Blessing Of The Welkin Moon hanya dapat diperpanjang saat durasi sama dengan atau
                            kurang dari 180 hari<br>
                            Kamu tidak dapat membeli Blessing lagi apabila durasi sudah lebih dari 180 hari.<br>
                            Apabila terjadi kesalahan dan Blessing
                            tetap terbeli, durasi blessing tidak akan bertambah, dan pembelian akan dikonversi menjadi
                            330 Genesis Crystal.<br>
                            Primogem yang tidak diperoleh karena tidak log in saat durasi Blessing tidak akan diberikan
                            kembali.<br>
                            Traveler dengan Rank Adventure Lv.5 ke bawah untuk sementara tidak dapat melihat jumlah hari
                            yang tersisa di Blessing Of The Welkin
                            Moon.</p>
                    </div>
                </div>

                <div class="id">
                    <h4>Masukkan UID</h4>
                    <span class="number">1</span>
                    <div class="userid">
                        <fieldset>
                            <input id="uid" placeholder="User ID" type="text" name="userid" required>
                            <select id="server" aria-placeholder="Pilih Server" name="server" required>
                                <option value="" disabled selected hidden>Pilih Server</option>
                                <option value="Americaa">America</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="TW, HK, MO">TW, HK, MO</option>
                            </select>
                            <p>Untuk mengetahui UID Anda, silakan buka menu paimon pada game.
                                UID akan terlihat dibagian bawah Gambar Karakter Game Anda. Silakan masukkan UID Anda
                                untuk menyelesaikan transaksi. Contoh : 123456789.
                            </p>
                        </fieldset>
                    </div>
                </div>

                <!-- Voucher Diamond-->
                <div class="voucher">
                    <h4>Pilih Nominal/Jenis Top up</h4>
                    <span class="number">2</span>
                    <div class="diamond-container">
                        <div class="app-paper">
                            <fieldset>
                                <input type="radio" name="brandtype" id="1" class="hidebx" value="79000" required>
                                <label for="1" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/blessing.png"></div>
                                        <div class="dm">Blessing Of The Welkin Moon</div>
                                        <div class="price">Rp79.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="2" class="hidebx" value="16000" required>
                                <label for="2" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/60crys.png"></div>
                                        <div class="dm">60 Genesis Crystal</div>
                                        <div class="price">Rp16.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="3" class="hidebx" value="79000" required>
                                <label for="3" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/300crys.png"></div>
                                        <div class="dm">300+30 Genesis Crystal</div>
                                        <div class="price">Rp79.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="4" class="hidebx" value="249000" required>
                                <label for="4" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/980crys.png"></div>
                                        <div class="dm">980+110 Genesis Crystal</div>
                                        <div class="price">Rp249.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="5" class="hidebx" value="479000" required>
                                <label for="5" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/1980crys.png"></div>
                                        <div class="dm">1980+260 Genesis Crystal</div>
                                        <div class="price">Rp479.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="6" class="hidebx" value="799000" required>
                                <label for="6" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/3280crys.png"></div>
                                        <div class="dm">3280+600 Genesis Crystal</div>
                                        <div class="price">Rp799.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="13" class="hidebx" value="1559000" required>
                                <label for="13" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/6480crys.png"></div>
                                        <div class="dm">6480+1600 Genesis Crystal</div>
                                        <div class="price">Rp1.599.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="14" class="hidebx" value="2199000" required>
                                <label for="14" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/6480crys.png"></div>
                                        <div class="dm">7480+1700 Genesis Crystal</div>
                                        <div class="price">Rp2.199.000</div>
                                    </div>
                                </label>
                                <input type="radio" name="brandtype" id="15" class="hidebx" value="3599000" required>
                                <label for="15" class="lbl-radio">
                                    <div class="display-box">
                                        <div class="img"><img src="libs/img/6480crys.png"></div>
                                        <div class="dm">10000+2000 Genesis Crystal</div>
                                        <div class="price">Rp3.599.000</div>
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