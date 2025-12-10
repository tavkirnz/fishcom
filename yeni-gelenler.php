<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head-links.php" ?>
    <link rel="stylesheet" href="assets/css/list-page.css">
    <link rel="stylesheet" href="assets/css/yeni-gelenler.css">
    <title>Denizev | Ürünler</title>
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php
    $title = "Yeni Gelenler";
    $crumb = " / Yeni Gelenler";
    include "includes/breadcrumb.php"
        ?>

    <section class="listing f jc">
        <div class="container c-s">
            <div class="listing-header f jb ic">
                <div class="filter-grids">
                    <span>Görünüm</span>
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
    <script src="assets/scripts/view.js"></script>
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