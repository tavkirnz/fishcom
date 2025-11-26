<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head-links.php" ?>
    <title>Denizev | Anasayfa</title>
    <link href="index.css" rel="stylesheet">
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

    <section class="hero f jc r">
        <div class="container f jb ic r">
            <div class="hero-title f fcol">
                <h1>Gurme Serisi Pesto Soslu Dil Balığı Dolmasını Denediniz mi ?</h1>
                <p>Menünüze yeni tatlar katmak için ürünü hemen sipariş edin.</p>
                <?php
                $label = "Satın al";
                $right = "12";
                include "includes/fish-button.php"
                    ?>
            </div>
            <div class="hero-product f fcol r">
                <div class="price-area r f jcic">
                    <!----
                    <img class="size-full block" src="assets/images/price-bg.svg">
                    <img class="absolute top-0 right-0 size-13 -mt-5 -mr-5" src="assets/images/effect.png" >
                    <span class="absolute inset-0 f ic justify-start ml-15 text-3xl font-bold text-white pointer-events-none text-shadow-lg">400 TL</span>
                    ---->
                </div>
            </div>
        </div>
        <div class="hero-social a f fcol">
            <a href="" class="social-link">
                <i class="fa-brands fa-instagram"></i>
                <span class="instagram">Instagram</span>
            </a>
            <a href="" class="social-link">
                <i class="fa-brands fa-facebook"></i>
                <span class="facebook">Facebook</span>
            </a>
            <a href="" class="social-link">
                <i class="fa-brands fa-whatsapp"></i>
                <span class="whatsapp">WhatsApp</span>
            </a>
            <a href="" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
                <span class="linkedin">LinkedIn</span>
            </a>
        </div>
    </section>
    <section class="features f jc">
        <div class="container f jb c-s">
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-red)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Kampanyalar</span>
            </div>
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-pink)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Yeni Gelenler</span>
            </div>
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-yellow)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Bu Ayı Birincileri</span>
            </div>
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-pink)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Haftanın Ürünü</span>
            </div>
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-red)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Avantajlı Ürünler</span>
            </div>
            <div class="feature-box">
                <div class="feature-cycle border-(--fish-brown)">
                    <img src="assets/images/balik.jpg" alt="">
                </div>
                <span>Birlikte Al Kazan</span>
            </div>
        </div>
    </section>
    <section class="products f jc">
        <div class="container f fcol ic c-s">
            <div class="products-title">
                <h2>Balık Gruplarımız</h2>
                <hr>
            </div>
            <div class="products-navbar">
                <ul class="f ic" id="products-navbar-list">
                    <li class="active"><a href="">Klasik</a></li>
                    <li><a href="">Retail</a></li>
                    <li><a href="">Marinat</a></li>
                    <li><a href="">Skinpack</a></li>
                    <li><a href="">Gurme</a></li>
                    <li><a href="">Füme</a></li>
                    <li><a href="">Hamurlular</a></li>
                    <li><a href="">Tümünü Göster</a></li>
                </ul>
            </div>
            <div class="products-area f fwrap">
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="guluten-free"></span>
                            <img src="assets/images/yemek1.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek2.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="guluten-free"></span>
                            <img src="assets/images/yemek1.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek2.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="whyus f jc ic fcol">
        <div class="container f fcol ic c-s">
            <div class="whyus-title">
                <h5>The Fish Company</h5>
                <h2>Ürünlerimizi Neden Seçmelisiniz?</h2>
            </div>
        </div>
        <div class="whyus-container f jc ic">
            <video id="whyusVideo" autoplay loop muted playsinline class="background-video">
                <source src="assets/videos/whyusbg.mp4" type="video/mp4">
            </video>
            <div class="container f jb ic">
                <article>
                    <div class="article-content">
                        <div class="content-title">
                            <h3>Tazeden Daha Taze</h3>
                            <p>Balıklarımız tutulduktan sadece 17 dk sonra dondurup paketleniyor.</p>
                        </div>
                        <div class="content-img">
                            <img src="assets/images/img1.png" alt="">
                        </div>
                    </div>
                    <div class="article-content ">
                        <div class="content-title">
                            <h3>Zengin Ürün Çeşidi</h3>
                            <p>Dünyanın bir çok bölgesinden getirdiğimiz farklı balık türleri sizinle buluşuyor.</p>
                        </div>
                        <div class="content-img">
                            <img src="assets/images/img2.png" alt="">
                        </div>
                    </div>
                    <div class="article-content ">
                        <div class="content-title">
                            <h3>QR Destekli İzlenebilirlik</h3>
                            <p>Ürünlerimizin QR kodunu okutarak tutulduğu andan itibaren tüm süreci izleyebilirsiniz.
                            </p>
                        </div>
                        <div class="content-img">
                            <img src="assets/images/img5.png" alt="">
                        </div>
                    </div>
                </article>
                <article class="w-1/3 h-full">
                    <figure class="overflow-hidden w-full h-full">
                        <img src="assets/images/chef.webp" alt="">
                    </figure>
                </article>
                <article>
                    <div class="article-content text-start!">
                        <div class="content-img">
                            <img src="assets/images/img4.png" alt="">
                        </div>
                        <div class="content-title ">
                            <h3>Yüksek Kalite / Uygun Fİyat</h3>
                            <p>Onlarca taze balık türünü en uygun fiyatlarla sizlerle buluşturuyoruz.</p>
                        </div>
                    </div>
                    <div class="article-content text-start!">
                        <div class="content-img">
                            <img src="assets/images/img6.png" alt="">
                        </div>
                        <div class="content-title">
                            <h3>-18 C‘de Soğuk Zincir</h3>
                            <p>Tüm ürünlerimiz -18 C’de muhafaza edilerek soğuk zincir araçlarımızla sizinle buluşuyor.
                            </p>
                        </div>
                    </div>
                    <div class="article-content text-start!">
                        <div class="content-img">
                            <img src="assets/images/img3.png" alt="">
                        </div>
                        <div class="content-title">
                            <h3>1 Günde Teslimat Garantisi</h3>
                            <p>Ürünlerimizi sipariş verdikten 1 gün sonra firmanıza teslim ediyoruz.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="specials f jc">
        <div class="container f fcol ic gap-5 c-s">
            <div class="specials-title f jb ie">
                <div class="specials-text f fcol">
                    <h2>Mutfak Şeflerinin Tercihleri</h2>
                    <p>Cafe, Restoran, Otel vb. Horeca sektörünün tercih ettiği en güzel lezzetleri sizin için
                        getiriyoruz.</p>
                </div>
                <div class="specials-button">
                    <button class="specials-btn" type="submit">
                        <span class="r z-10">Tümünü Görüntüle</span>
                        <span class="specials-btn-bg"></span>
                    </button>
                </div>
            </div>
            <div class="specials-products f fwrap">
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek7.jpeg" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Hardal Soslu Pane Somon Fileto</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek6.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>

                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">375 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="new"></span>
                            <img src="assets/images/yemek5.jpeg" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek4.jpeg" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="special-recipes f jc">
        <div class="container f jb ic c-s">
            <div class="special-title f fcol">
                <figure>
                    <img src="assets/images/cap.png" alt="">
                </figure>
                <div class="f ic gap-2">
                    <h3 class="text-xl text-(--fish-red)">The Fish Company</h3>
                    <img class="h-1.5" src="assets/images/tail.png" alt="">
                </div>
                <h2>ŞEFLER İÇİN ÖZEL TARİFLER</h2>
                <span class="biro text-3xl pt-10">Farklı tarifler, farklı tatlar...</span>
                <p class="text-xl font-extralight mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus ac
                    iaculis ex. Suspendisse lacinia nibh sed metus dictum pellentesque. Mauris ut sem ut elit tristique
                    maximus. Nunc in tortor nulla. Etiam tortor risus, pellentesque vitae pharetra.</p>

                <?php
                $label = "İncele";
                $right = "17";
                include "includes/fish-button.php"
                    ?>
            </div>
            <div class="recipes f fwrap je ie">
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek8.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <div class="ribbon">YENİ</div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Lorem ipsum dolor →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek9.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="play-btn-text cursor-pointer">
                            <div class="play-circle-text" aria-hidden="true">
                                <svg viewBox="0 0 120 120" width="80" height="80" class="circle-svg">
                                    <defs>
                                        <!-- Small offset hack so the path is a full circle -->
                                        <path id="recipeCirclePath" d="M60,15 a45,45 0 1,1 -0.1,0" />
                                    </defs>
                                    <text>
                                        <textPath href="#recipeCirclePath" startOffset="0%">
                                            PLAY VİDEO • PLAY VİDEO • PLAY VİDEO •
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="play-btn" role="button" aria-label="Oynat">▶</div>
                        </a>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Lorem ipsum dolor →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek9.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Lorem ipsum dolor →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek10.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Lorem ipsum dolor →</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newest f jc">
        <div class="container f fcol ic gap-5 c-s">
            <div class="specials-title f jb ie">
                <div class="specials-text f fcol">
                    <h2>Yeni Gelenler</h2>
                    <div class="bg-[#0691d6] h-1.5 w-2/3"></div>
                </div>
                <div class="specials-button">
                    <button class="specials-btn" type="submit">
                        <span class="r z-10">Tümünü Görüntüle</span>
                        <span class="specials-btn-bg"></span>
                    </button>
                </div>
            </div>
            <div class="specials-products f fwrap">
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="new"></span>
                            <img src="assets/images/urun.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Hardal Soslu Pane Somon Fileto</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="new"></span>
                            <img src="assets/images/urun.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 6 adet</span>

                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">375 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="new"></span>
                            <img src="assets/images/urun3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/urun3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kitchen-academy f jc">
        <div class="container f fcol jc c-s">
            <div class="academy-title f fcol jc ic">
                <h5>The Fish Company</h5>
                <h2>Mutfak Akademi</h2>
                <p>Deniz ürünleri ve denizcilikle ilgili aradığın tüm bilgiler burada.</p>
            </div>
            <div class="academy-sss f r">
                <div class="figures f jc ic r">
                    <img src="assets/images/academy.png" alt="">
                    <img class="arrow" src="assets/images/arrow2.png" alt="">
                    <img class="dumen" src="assets/images/dumen.png" alt="">
                    <?php
                    $label = "İncele";
                    $right = "17";
                    $style = "position: absolute; right:200px; bottom:40px;";
                    include "includes/fish-button.php"
                        ?>
                </div>
                <div class="sss w-1/2 f ic">
                    <div class="sss-container f fcol gap-8 w-full">
                        <div class="sss-card bg-[#F6F6F6] px-10 py-8 rounded-2xl cursor-pointer">
                            <div class="sss-title w-full f fcol jb ic">
                                <div class="sss-title-top w-full f jb ic">
                                    <h3 class="text-2xl font-semibold">Donuk Ürünleri nasıl çözdürmeliyim?</h3>
                                    <i class="fa-solid fa-chevron-down sss-list rotate-0"></i>
                                </div>
                                <div class="sss-title-bottom">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, provident off
                                        iciis autem incidunt quibusdam omnis porro maiores itaque aliquam ut explicabo,
                                        commodi, aut tempore velit assumenda unde asperiores modi. Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Repellendus necessitatibus possimus enim
                                        iure? Voluptas nihil esse natus recusandae iure, repellendus similique veritatis
                                        in. Eius debitis aspernatur suscipit, ipsa dolorum similique! </p>
                                </div>
                            </div>
                        </div>
                        <div class="sss-card bg-[#F6F6F6] px-10 py-8 rounded-2xl cursor-pointer">
                            <div class="sss-title w-full f fcol jb ic">
                                <div class="sss-title-top w-full f jb ic">
                                    <h3 class="text-2xl font-semibold">Donuk Ürünleri nasıl çözdürmeliyim?</h3>
                                    <i class="fa-solid fa-chevron-down sss-list rotate-0"></i>
                                </div>
                                <div class="sss-title-bottom">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, provident off
                                        iciis autem incidunt quibusdam omnis porro maiores itaque aliquam ut explicabo,
                                        commodi, aut tempore velit assumenda unde asperiores modi. </p>
                                </div>
                            </div>
                        </div>
                        <div class="sss-card bg-[#F6F6F6] px-10 py-8 rounded-2xl  cursor-pointer">
                            <div class="sss-title w-full f fcol justify-between ic">
                                <div class="sss-title-top w-full f jb ic">
                                    <h3 class="text-2xl font-semibold">Donuk Ürünleri nasıl çözdürmeliyim?</h3>
                                    <i class="fa-solid fa-chevron-down sss-list rotate-0"></i>
                                </div>
                                <div class="sss-title-bottom">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, provident off
                                        iciis autem incidunt quibusdam omnis porro maiores itaque aliquam ut explicabo,
                                        commodi, aut tempore velit assumenda unde asperiores modi. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cargo-service py-20 select-none">
        <div class="cargo-service-top w-full py-20">
            <div class="pink h-60 w-2/3 bg-red-100 r">
                <figure class="absolute z-29 -right-100 -top-50"><img class="h-150" src="assets/images/cargo.png" alt="">
                </figure>
                <h2 class="absolute left-30 -top-10 leading-13">Siparişlerin <span class="text-6xl text-red-400">soğuk
                        zincirle</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; işletmende
                </h2>
            </div>
        </div>
        <div class="cargo-service-bottom py-20 f jc">
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
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <script src="../script.js"></script>
</body>

</html>