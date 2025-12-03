<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/uyelikform.css">
    <!---------------------------------------Components/-------------------------------------->
    <!----
    f     = flex
    fcol  = flex-col
    frow  = flex-row
    fwrap = flex-wrap
    jc    = justify-center
    jb    = justify-between
    ic    = items-center
    ie    = items-end
    r     = relative
    a     = absolute
    c-s   = py-10
    ----->
</head>

<body>
    <?php include "includes/header.php" ?>
    <div class="top-img">
        <div class="overlay f jc ic">
            <div class="container r">
                <?php
                $title = "Üyelik Formu";
                $crumb = "Anasayfa / Üyelik Formu";
                include "includes/breadcrumb.php";
                ?>
                <a href="" class="play-btn-text cursor-pointer">
                    <div class="play-circle-text" aria-hidden="true">
                        <svg viewBox="0 0 120 120" width="80" height="80" class="circle-svg">
                            <defs>
                                <!-- Small offset hack so the path is a full circle -->
                                <path id="recipeCirclePath" d="M60,15 a45,45 0 1,1 -0.1,0" />
                            </defs>
                            <text>
                                <textPath href="#recipeCirclePath" startOffset="0%">
                                    En Uygun Fiyat Avantajı ------------------
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <div class="play-btn"><i class="fa-solid fa-coins"></i></div>
                </a>
            </div>
        </div>
    </div>
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
    <div class="number-bottom py-20 f jc">
        <div class="container f">
            <article class="f fcol w-1/5">
                <div class="article-icons f w-full">
                    <div class="numbers">
                        01
                    </div>
                    <div class="content-img w-fit f ic">
                        <img class="w-20" src="assets/images/img1.png" alt="">
                    </div>
                </div>
                <div class="article-desription text-2xl font-bold text-neutral-700 uppercase pr-25">
                    Yüzlerce Deniz Ürünü
                </div>
            </article>
            <article class="f fcol w-1/5">
                <div class="article-icons f w-full">
                    <div class="numbers">
                        02
                    </div>
                    <div class="content-img w-fit f ic">
                        <img class="w-20" src="assets/images/img8.svg" alt="">
                    </div>
                </div>

                <div class="article-desription text-2xl font-bold text-neutral-700 uppercase pr-25">
                    Sürekli Stok Güvencesiyle
                </div>
            </article>
            <article class="f fcol w-1/5">
                <div class="article-icons f w-full">
                    <div class="numbers">
                        03
                    </div>
                    <div class="content-img w-fit f ic">
                        <img class="w-20" src="assets/images/img7.png" alt="">
                    </div>
                </div>

                <div class="article-desription text-2xl font-bold text-neutral-700 uppercase pr-25">
                    En Uygun Fiyatla
                </div>
            </article>
            <article class="f fcol w-1/5">
                <div class="article-icons f w-full">
                    <div class="numbers">
                        04
                    </div>
                    <div class="content-img w-fit f ic">
                        <img class="w-22" src="assets/images/img9.png" alt="">
                    </div>
                </div>
                <div class="article-desription text-2xl font-bold text-neutral-700 uppercase pr-25">
                    Güvenli Ödeme Sistemi İle
                </div>
            </article>
            <article class="f fcol w-1/5 ">
                <div class="article-icons f w-full">
                    <div class="numbers">
                        05
                    </div>
                    <div class="content-img w-fit f ic">
                        <img class="w-40" src="assets/images/img3.png" alt="">
                    </div>
                </div>
                <div class="article-desription text-2xl font-bold text-neutral-700 uppercase pr-25">
                    Hızlı Teslimat ile kapında
                </div>
            </article>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>