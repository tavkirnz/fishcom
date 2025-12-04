<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Destek</title>
    <link rel="stylesheet" href="assets/css/destek.css">
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
    $title = "Destek";
    $crumb = "Anasayfa / Destek";
    include "includes/breadcrumb.php"
        ?>
    <section class="flex justify-center pages-content">
        <div class="container c-s">
            <div class="flex gap-10">
                <?php
                $active = "Destek";
                include "includes/leftmenu.php"
                    ?>
                <div class="destek">
                    <h5>Destek</h5>
                    <p>Destek almak istediğiniz konu hakkında bize telefon numaranızı bırakın sizi arayalım!</p>
                    <form class="f fcol gap-4">
                        <input id="telno" type="text" class="inputs" placeholder="Telefon Numaranız">
                        <textarea id="message" class="inputs h-40" placeholder="Mesajınız"></textarea>
                        <button type="submit" class="">Gönder</button>
                    </form>
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