<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Blog</title>
    <link rel="stylesheet" href="assets/css/iletisim.css">
</head>

<body>
    <?php include "includes/header.php" ?>
    <?php
        $img = "/assets/images/gemi.jpg";
        $title = "Blog";
        $crumb = " / Blog";
        include "includes/breadcrumb-big.php" 
    ?>

    <div class="container iletisim-genel c-s">
        <section class="iletisim-div">
            <h2>
                Bizimle İletişime Geçin
            </h2>
            <div>
                Ürünlerimiz veya hizmetlerimiz hakkında bilgi almak için bizimle iletişime geçebilirsiniz. Müşteri
                temsilcilerimiz sizinle en kısa zamanda iletişime geçecektir.
            </div>
            <div class="iletisim-form">
                <div class="uyelikformu">
                    <div class="flex uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Firma Adı ">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Ad Soyad">
                    </div>
                    <div class="uyelik-inputbox">
                        <input type="text" class="uyelik-input" placeholder="Cep Telefonu ">
                        <input type="text" class="uyelik-input" placeholder="E-posta ">
                    </div>
                    <div class="uyelik-inputbox">
                        <textarea class="uyelik-input u-message" placeholder="Mesajınız "></textarea>
                    </div>
                    <div class="iletisim-kurallar iletisim-impflex">
                        <div class="iletisim-impflex2" style="width:65%;">
                            <div>
                                <input type="checkbox">
                            </div>
                            <div style="text-align:left; font-size: 0.8em;">
                                Kişisel verilerimin işlenmesine ilişkin tarafıma sunulan linkte yer alan 6698 Sayılı
                                Kişisel Verilerin Korunması Kanunu kapsamında Aydınlatma ve Açık Rıza Metni'ni okudum ve
                                kabul ediyorum.
                            </div>
                        </div>
                        <div style="width:30%;">
                            <button class="iletisim-buton" style="">Gönder</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px;">
                <h2>
                    info@thefishcompany.com
                </h2>
            </div>
            <div class="iletisim-insimpflex">
                <div class="iletisim-icons">
                    <a href="https://www.facebook.com" target="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <div class="iletisim-icons">
                    <a href="https://www.instagram.com" target="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="iletisim-icons">
                    <a href="https://www.youtube.com" target="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="iletisim-icons">
                    <a href="https://www.whatsapp.com" target="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
    </div>
    <?php include "includes/cargo.php" ?>
    <?php include "includes/numbers.php" ?>
    <?php include "includes/footer.php" ?>
</body>