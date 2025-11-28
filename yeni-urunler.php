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
    $crumb = "Anasayfa / Yeni Ürünlerim";
    include "includes/breadcrumb.php";
    ?>
    <section class="f jc">
        <div class="container f c-s gap-10">
            <?php
            $active = "Yeni Ürünlerim";
            include "includes/leftmenu.php"
                ?>
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
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>