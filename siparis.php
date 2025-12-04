<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Sipariş</title>
    <link rel="stylesheet" href="assets/css/siparis.css">
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
            <?php
            $active = "Önceki Siparişlerim";
            include "includes/leftmenu.php"
                ?>
            <div class="siparisler">
                <div>
                    <table>
                        <thead class="mb-10">
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
                                <td class="teslim-edildi">Teslim Edildi</td>
                                <td>3500 TL</td>
                                <td>
                                    <p>Havale ile ödeme</p>
                                    <p class="garanti banka">Garanti Bankası</p>
                                </td>
                                <td class="buttons">
                                    <button class="button-1 bg-(--fish-blue) odeme">Ödeme Yapıldı</button>
                                    <button class="button-1 bg-black">Detay</button>
                                    <button class="button-1 bg-(--fish-green)">Siparişi Tekrarla</button>
                                    <button class="button-1 border border-black !text-black">E-Fatura</button>
                                </td>
                            </tr>

                            <tr>
                                <td>45216987</td>
                                <td>12.05.2024</td>
                                <td class="bekleniyor">Ödeme Bekleniyor</td>
                                <td>3500 TL</td>
                                <td>
                                    <p>Havale ile ödeme</p>
                                    <p class="vakıf banka">Vakıf Bank</p>
                                </td>
                                <td class="buttons">
                                    <button class="button-1 bg-(--fish-red) odeme">Ödeme Yap</button>
                                    <button class="button-1 bg-black">Detay</button>
                                    <button class="button-1 bg-(--fish-green)">Siparişi Tekrarla</button>
                                    <button class="button-1 border border-black !text-black">E-Fatura</button>
                                </td>
                            </tr>

                            <tr>
                                <td>45216987</td>
                                <td>12.05.2024</td>
                                <td class="hazirlaniyor">Hazırlanıyor</td>
                                <td>3500 TL</td>
                                <td>
                                    <p>Kredi Kartı</p>
                                </td>
                                <td class="buttons">
                                    <button class="button-1 bg-(--fish-blue) odeme">Ödeme Yapıldı</button>
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
    <?php include "includes/product-info-modal.php" ?>
    <?php include "includes/sepet-modal.php" ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <script src="assets/scripts/script.js"></script>
</body>

</html>