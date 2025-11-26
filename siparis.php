<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/siparislerkimi.css">
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
        $title = "Sipariş";
        $crumb = "Anasayfa / Sipariş";
        include "includes/breadcrumb.php";
    ?>
    <section class="f jc">
        <div class="container f c-s gap-10">
            <?php include "includes/leftmenu.php" ?>
            <div class="w-full pages-padding pages-border pages-right">
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Sipariş Kodu</th>
                                <th>Sipariş Tarihi</th>
                                <th>Durum</th>
                                <th>Fiyat</th>
                                <th>Ödeme Türü</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>45216987</td>
                                <td>12.05.2024</td>
                                <td class="text-(--fish-blue)">Hazırlanıyor</td>
                                <td>3500 TL</td>
                                <td>
                                    Kredi Kartı
                                    <img src="/assets/images/garantibank.png" alt="" style="height:20px;">
                                </td>
                                <td class="f gap-2 jc">
                                    <button class="button-1 bg-(--fish-blue)">Ödeme Yapıldı</button>
                                    <button class="button-1 bg-black">Detay</button>
                                    <button class="button-1 bg-(--fish-green)">Siparişi Tekrarla</button>
                                    <button class="button-1 border border-black !text-black">E-Fatura</button>
                                </td>
                            </tr>
                            <tr>
                                <td>45216987</td>
                                <td>12.05.2024</td>
                                <td class="text-(--fish-green)">Teslim Edildi</td>
                                <td>3500 TL</td>
                                <td>
                                    Kredi Kartı
                                    <img src="/assets/images/garantibank.png" alt="" style="height:20px;">
                                </td>
                                <td class="f gap-2 jc">
                                    <button class="button-1 bg-(--fish-blue)">Ödeme Yapıldı</button>
                                    <button class="button-1 bg-black">Detay</button>
                                    <button class="button-1 bg-(--fish-green)">Siparişi Tekrarla</button>
                                    <button class="button-1 border border-black !text-black">E-Fatura</button>
                                </td>
                            </tr>
                            <tr>
                                <td>45216987</td>
                                <td>12.05.2024</td>
                                <td class="text-(--fish-red)">Ödeme bekleniyor</td>
                                <td>3500 TL</td>
                                <td>
                                    <span>Kredi Kartı</span>
                                    <img src="/assets/images/garantibank.png" alt="" style="height:20px;">
                                </td>
                                <td class="f gap-2 jc">
                                    <button class="button-1 bg-(--fish-blue)">Ödeme Yapıldı</button>
                                    <button class="button-1 bg-black">Detay</button>
                                    <button class="button-1 bg-(--fish-green)">Siparişi Tekrarla</button>
                                    <button class="button-1 border border-black !text-black">E-Fatura</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>