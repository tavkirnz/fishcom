<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head-links.php" ?>
    <link rel="stylesheet" href="assets/css/list-page.css">
    <title>Denizev | Ürünler</title>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php
    $title = "Ürünler";
    $crumb = "Anasayfa / Ürünler";
    include "includes/breadcrumb.php"
        ?>

    <section class="listing f jc">
        <div class="container c-s">
            <div class="listing-header f jb ic">
                <div class="filter-title f jb ic">
                    <span class="title">Balık Grupları (145)</span>
                    <i class="fa-solid fa-chevron-down sss-list rotate-0"></i>
                </div>
                <div class="filter-grids">
                    <button>
                        <i class="fa-solid fa-table-cells-large"></i>
                    </button>
                    <button>
                        <i class="fa-solid fa-table-cells"></i>
                    </button>
                    <button>
                        <i class="fa-solid fa-table-list"></i>
                    </button>
                </div>
                <div class="filter-sort">
                    <select id="sort" onchange="this.form.submit()">
                        <option value="sort-popular" selected>En Uygun</option>
                        <option value="sort-up">Fiyata göre artan</option>
                        <option value="sort-down">Fiyata göre azalan</option>
                        <option value="sort-newest">En yeni ürünler</option>
                    </select>

                </div>
            </div>
            <div class="listing-content f jb">
                <div class="listing-filter f fcol gap-10">
                    <div class="filter-nav">
                        <ul>
                            <li>Horeca Serisi (15)</li>
                            <li>Çiğ ürünler Serisi (25)</li>
                            <li>Füme Serisi (8)</li>
                            <li>Gurme Serisi (13)</li>
                            <li>Hamurlular Serisi (14)</li>
                            <li>Klasik Retail Serisi (11)</li>
                            <li>Konserve Ürünler Serisi (3)</li>
                            <li>Marinat Serisi (7)</li>
                            <li>Skinpack Serisi (9)</li>
                            <li>Skinpack Serisi Bilezikli Ürünler (5)</li>
                        </ul>
                    </div>
                    <div class="filter-most-sell f fcol gap-5">
                        <span class="title">Çok Satanlar</span>
                        <div class="filter-most-sell-content f fcol gap-5">
                            <div class="most-sell-box">
                                <img src="assets/images/urun.webp" alt="">
                                <div class="price f fcol gap-1">
                                    <span class="urunadi">Çıtır Çubuk</span>
                                    <div class="offsale f ic">
                                        <span>%25</span>
                                        <span class="line-through opacity-60 ml-2">500 TL</span>
                                        <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="most-sell-box">
                                <img src="assets/images/urun.webp" alt="">
                                <div class="price f fcol gap-1">
                                    <span class="urunadi">Çıtır Çubuk</span>
                                    <div class="offsale f ic">
                                        <span>%25</span>
                                        <span class="line-through opacity-60 ml-2">500 TL</span>
                                        <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="most-sell-box">
                                <img src="assets/images/urun.webp" alt="">
                                <div class="price f fcol gap-1">
                                    <span class="urunadi">Çıtır Çubuk</span>
                                    <span class="font-medium">350 TL</span>
                                </div>
                            </div>
                        </div>
                        <button>Tümünü Göster</button>
                    </div>
                    <div class="filter-cargo f fcol gap-5">
                        <span class="title">Kargo ve Teslimat</span>
                        <div class="cargo-content f fcol gap-5 py-10">
                            <div class="link">
                                <img class="h-7" src="assets/images/img3.png" alt="">
                                <span>Bir Günde Teslimat</span>
                            </div>
                            <div class="link">
                                <img class="h-10" src="assets/images/img9.png" alt="">
                                <span>Güvenli Ödeme Sistemi</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter-social f fcol gap-5">
                        <span class="title">Bizi Takip Edin!</span>
                        <ul class="social f flex-row! gap-4!">
                            <li><a href=""><i class="fa-brands fa-square-facebook text-4xl"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-square-instagram text-4xl"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin text-4xl"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-square-whatsapp text-4xl"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="listing-products f fwrap">
                    <?php $tag = "gluten";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "offsale";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "gluten";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "offsale";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                    <?php $tag = "nothing";
                    include "includes/geciciurun.php" ?>
                </div>
            </div>
            <div class="listing-footer f jc ic gap-5">
                <div class="pagination f ic gap-3">
                    <button class="prev-page f ic jc">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="page-num active">1</button>
                    <button class="page-num">2</button>
                    <button class="page-num">3</button>
                    <button class="page-num">4</button>
                    <button class="page-num">5</button>
                    <button class="next-page f ic jc">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
    </section>

    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
    <script>

document.querySelectorAll('#sepete-ekle').forEach(button => {
  button.addEventListener("click", function () {
    const adet = this.nextElementSibling;
    adet.style.display = "flex";
    this.style.display = "none";
  });
});
document.querySelectorAll('#ekle').forEach(button => {
  button.addEventListener("click", function () {
    const adet = this.closest('.content-adet').querySelector('#adet');
    adet.value = parseInt(adet.value) + 1;
  });
});

document.querySelectorAll('#cikar').forEach(button => {
  button.addEventListener("click", function () {
    const contentAdet = this.closest('.content-adet');
    const adet = contentAdet.querySelector('#adet');
    const adetSayi = parseInt(adet.value);

    if (adetSayi > 1) {
      adet.value = adetSayi - 1;
    } else if (adetSayi === 1) {
      // Adet 1'se, input'u gizle ve sepete ekle butonunu göster
      contentAdet.style.display = "none";
      contentAdet.previousElementSibling.style.display = "flex";
    }
  });
});
    </script>
</body>

</html>