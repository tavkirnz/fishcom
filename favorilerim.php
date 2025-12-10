<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php
    $title = "Favorilerim";
    $crumb = " / Favorilerim";
    include "includes/breadcrumb.php";
    ?>
    <section class="f jc">
        <div class="container f c-s gap-10">
            <?php
            $active = "Favorilerim";
            include "includes/leftmenu.php"
                ?>
            <div class="listing-products f fwrap">
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
                                <i class="fa-solid fa-heart favorite-icon" style="color: var(--fish-red);"></i>
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
                                <i class="fa-solid fa-heart favorite-icon" style="color: var(--fish-red);"></i>
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
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>