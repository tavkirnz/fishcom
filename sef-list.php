<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/sef-list.css">
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
    <?php
    $title = "Yeni Ürünlerim";
    $crumb = "Anasayfa / Yeni Ürünlerim";
    include "includes/breadcrumb.php";
    ?>
    <section class="special-recipes f jc">
        <div class="container f fcol ic c-s">
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
            </div>
            <div class="recipes f fwrap jc">
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
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek1.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Sample Recipe 5 →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek2.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Sample Recipe 6 →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek3.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Sample Recipe 7 →</h3>
                        </a>
                    </div>
                </div>
                <div class="recipe-box">
                    <div class="recipe-card">
                        <div class="over">
                            <img src="assets/images/yemek4.webp" alt="Yemek" class="recipe-bg-img" />
                        </div>
                        <a href="" class="card-title">
                            <h5>18.02.2025</h5>
                            <h3 class="text-2xl z-50">Sample Recipe 8 →</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>