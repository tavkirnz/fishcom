<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head-links.php" ?>
    <link rel="stylesheet" href="assets/css/list-page.css">
    <title>Denizev | Ürünler</title>
</head>
<style>
    .listing-content .listing-products {
        width: 100%;
    }

    .listing-products .products-box {
        position: relative;
        width: calc(1/4 * 100%);
        padding: 20px;
    }


    /* #region Grid View Modes */
    .products-box.grid-2col {
        width: calc(1/3 * 100%);
    }

    .products-box.grid-2col .image-area img {
        height: auto;
    }

    .products-box.list-view {
        width: 100%;
        padding: 15px 20px;
        border-bottom: 1px solid #efefef;
    }

    .products-box.list-view .products-card {
        display: flex;
        gap: 20px;
        box-shadow: none;
    }

    .products-box.list-view .image-area {
        width: auto;
        min-width: 150px;
        height: 150px;
    }

    .products-box.list-view .image-area img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .products-box.list-view .title-area {
        flex: 1;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 50px;
        padding: 0;
    }

    .products-box.list-view .price-buy {
        display: flex;
        justify-content: space-between;
    }

    .products-box.list-view .price-buy #price,
    .products-box.list-view .price-buy .offsale {
        margin: 0 !important;
        font-size: 18px;
    }

    .products-box.list-view .price-ext {
        width: 80%;
    }

    .products-box.list-view .title-ext {
        width: 20%;
        font-size: 18px;
    }

    .products-box.list-view .quantity {
        font-size: 16px;
    }

    .products-box.list-view .title-ext .favorite-icon {
        display: none;
    }

    .products-box.list-view .title-area .list-quantity {
        display: block;
    }

    .products-box.list-view .title-area .grid-quantity {
        display: none;
    }

    /* #endregion */
</style>

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