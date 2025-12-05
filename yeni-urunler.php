<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/user.css">
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
    $crumb = " / Yeni Ürünlerim";
    include "includes/breadcrumb.php";
    ?>
    <section class="f jc">
        <div class="container f c-s gap-10">
            <?php
            $active = "Yeni Ürünlerim";
            include "includes/leftmenu.php"
                ?>
            <div class="right">
                <section id="uyari" class="f jc bg-(--fish-gold)" style="">
                    <div class="container py-3 text-center">
                        Son girişinizden sonraki gelen yeni ürünler!
                    </div>
                </section>
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
        </div>
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>