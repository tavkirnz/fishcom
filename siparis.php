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
    <section class="flex justify-center leftupmenu-anasayfadestek">
        <div class="container">
            <div class="flex justify-between items-center py-3">
                <div class="flex flex-col leftupmenu-title-header">
                    <span class="">Sipariş</span>
                </div>
                <div class="flex flex-col">
                    <span class="">Anasayfa / Sipariş</span>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center pages-content">
        <div class="container">
            <div class="flex gap-10">
                <?php include "includes/leftmenu.php" ?>
                <div class="w-full pages-padding pages-border pages-right">
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Sipariş Kodu
                                    </th>
                                    <th>
                                        Sipariş Tarihi
                                    </th>
                                    <th>
                                        Durum
                                    </th>
                                    <th>
                                        Fiyat
                                    </th>
                                    <th>
                                        Ödeme Türü
                                    </th>
                                    <th>
                                        İşlemler
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>
                                        45216987
                                    </td>
                                    <td>
                                        12.05.2024
                                    </td>
                                    <td>
                                        Hazırlanıyor
                                    </td>
                                    <td>
                                        3500 TL
                                    </td>
                                    <td>
                                        Kredi Kartı
                                        <img src="././assets/balik.jpg" alt="" style="height:50px;">
                                    </td>
                                    <td>
                                        <button class="button-1">Ödeme Yapıldı</button>
                                        <button class="button-1">Detay</button>
                                        <button class="button-1">Siparişi Tekrarla</button>
                                        <button class="button-1">E-Fatura</button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        45216987
                                    </td>
                                    <td>
                                        12.05.2024
                                    </td>
                                    <td>
                                        Hazırlanıyor
                                    </td>
                                    <td>
                                        3500 TL
                                    </td>
                                    <td>
                                        Kredi Kartı
                                    </td>
                                    <td>
                                        <button class="button-1">Ödeme Yapıldı</button>
                                        <button class="button-1">Detay</button>
                                        <button class="button-1">Siparişi Tekrarla</button>
                                        <button class="button-1">E-Fatura</button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        45216987
                                    </td>
                                    <td>
                                        12.05.2024
                                    </td>
                                    <td>
                                        Hazırlanıyor
                                    </td>
                                    <td>
                                        3500 TL
                                    </td>
                                    <td>
                                        Kredi Kartı
                                    </td>
                                    <td>
                                        <button class="button-1">Ödeme Yapıldı</button>
                                        <button class="button-1">Detay</button>
                                        <button class="button-1">Siparişi Tekrarla</button>
                                        <button class="button-1">E-Fatura</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>
</body>
</html>
<script src="script.js"></script>