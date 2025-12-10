<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/uyelikform.css">
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php
        $img = "/assets/images/uye.jpg";
        $title = "Üyelik Formu";
        $crumb = " / Üyelik Formu";
        include "includes/breadcrumb-big.php" 
    ?>

    <section class="sub-form f jc">
        <div class="container f jb c-s gap-5">
            <div class="uyelik-list">
                <ul>
                    <li>
                        Sitemize Üye Olun,
                        <br>
                        Avantajlardan Yararlanın!
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img4.png" alt="">
                            </div>
                            <span>
                                <h4>Yüksek Kalite / Uygun Fiyat</h4>
                                Onlarca taze balık türünü en uygun fiyatlarla sizlerle buluşturuyoruz.
                            </span>
                        </div>
                        <span></span>
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img6.png" alt="">
                            </div> <span>
                                <h4>-18 ‘de Soğuk Zincir</h4>
                                Tüm ürünlerimiz 18 C’de muhafaza edilerek soğuk zincir araçlarımızla sizinle buluşuyor.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img3.png" alt="">
                            </div> <span>
                                <h4>1 Günde Teslimat Garantisi</h4>
                                Ürünlerimizi sipariş verdikten 1 gün sonra firmanıza teslim ediyoruz.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img1.png" alt="">
                            </div> <span>
                                <h4>Tazeden Daha Taze</h4>
                                Balıklarımız tutulduktan sadece 17 dk sonra dondurup paketleniyor.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img2.png" alt="">
                            </div> <span>
                                <h4>Zengin Ürün Çeşidi</h4>
                                Dünyanın bir çok bölgesinden getirdiğimiz farklı balık türleri sizinle buluşuyor.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="uyelik-impflex">
                            <div class="ext-img">
                                <img src="assets/images/img5.png" alt="">
                            </div> <span>
                                <h4>QR Destekli İzlenebilirlik</h4>
                                Ürünlerimizin QR kodunu okutarak tutulduğu andan itibaren tüm süreci izleyebilirsiniz.
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="uyelikformu-genel">
                <div class="uyelikformu">
                    <div>
                        <h4>Üyelik Bilgileri</h4>
                    </div>
                    <div class="flex uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Firma Adı *">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Ad *">
                        <input type="text" class="uyelik-input" placeholder="Soyad *">
                        <input type="text" class="uyelik-input" placeholder="Ünvan *">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Sektör *">
                        <input type="text" class="uyelik-input" placeholder="Tc Kimlik *">
                        <input type="text" class="uyelik-input" placeholder="Telefon">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Cep Telefonu *">
                        <input type="text" class="uyelik-input" placeholder="E-posta *">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Ülke *">
                        <input type="text" class="uyelik-input" placeholder="Şehir *">
                        <input type="text" class="uyelik-input" placeholder="Semt *">
                    </div>
                    <div class="uyelik-inputbox">
                        <textarea class="uyelik-input u-message" placeholder="Mesajınız"></textarea>
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Şifreniz *">
                        <input type="text" class="uyelik-input" placeholder="Şifreniz Tekrar *">
                    </div>
                    <div class="uyelik-kurallar">
                        <div>
                            <h4>
                                Üyelik Kuralları
                            </h4>
                        </div>
                        <div>
                            <input type="checkbox"><span style="text-decoration:underline;">Gizlilik Politikası metnini
                                okudum, onaylıyorum.</span>
                        </div>
                        <div>
                            <button class="uyelik-buton">
                                Gönder
                            </button>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    * olanların doldurulması zorunludur.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/numbers.php" ?>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>