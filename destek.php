<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Destek</title>
    <link rel="stylesheet" href="assets/css/destekkimi.css">
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
        <div class="container">
            <div class="flex gap-10">
                <?php include "includes/leftmenu.php" ?>
                <div class="w-full pages-border pages-padding pages-right">
                    <form id="destek-form">
                        <div class="destek-header mb-1.5">
                            Destek
                        </div>
                        <div class="destek-cizgi">

                        </div>
                        <div class="destek-message-header">
                            Destek almak istediğiniz konu hakkında bize telefon numaranızı bırakın sizi arayalım!
                        </div>
                        <div>
                            <input id="telno" type="text" class="pages-border destek-placeholder destek-message-number"
                                placeholder="Telefon Numaranız">
                        </div>
                        <div>
                            <textarea id="message" class="pages-border destek-placeholder destek-message-mesaj"
                                placeholder="Mesajınız"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="destek-button">Gönder</button>
                        </div>
                        <p id="messageten"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
        <?php include "includes/sepet-modal.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>