<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head-links.php' ?>
    <title>Denizev | Ürün Detay</title>
    <link rel="stylesheet" href="assets/css/urundetay.css">
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
    <?php include 'includes/header.php'; ?>
    <?php
    $title = "Füme Serisi";
    $crumb = "Anasayfa / Ürünler / Füme Serisi";
    include "includes/breadcrumb.php"
        ?>
    <section id="uyari" class="f jc bg-(--fish-gold)" style="">
        <div class="container py-3 text-center">
            Sepet tutarını 5000 TL’ye tamamla kargon ücretsiz olsun!
        </div>
    </section>
    <section class="urun f jc">
        <div class="container f jb c-s gap-10">
            <div class="image-area f gap-10">
                <div class="image-roof">
                    <ul>
                        <li><img src="assets/images/urun1.png" id="roof-img"></li>
                        <li><img src="assets/images/urun1.png" id="roof-img"></li>
                        <li><img src="assets/images/urun1.png" id="roof-img"></li>
                        <li><img src="assets/images/urun1.png" id="roof-img"></li>
                        <li><img src="assets/images/neylabu.png" id="roof-img"></li>
                    </ul>
                </div>
                <div class="image-main f ic">
                    <img src="assets/images/urun1.png" id="main-img">
                </div>
            </div>
            <div class="content-area">
                <div class="content-title f ic jb">
                    <h2 class="font-normal!">Somon Füme</h2>
                    <i class="fa-regular fa-heart favorite-icon"></i>
                </div>
                <div class="content-code">
                    <span>Ürün Kodu: 45123698</span>
                </div>
                <div class="content-quantity">
                    <span>200 gr / kutu</span>
                </div>
                <div class="content-much f fcol my-10">
                    <ul>
                        <li>
                            <input type="radio" name="secim" value="3000" checked>
                            <span>10 Kutu</span>
                        </li>
                        <li>
                            <input type="radio" name="secim" value="6000">
                            <span>20 Kutu</span>
                        </li>
                        <li>
                            <input type="radio" name="secim" value="10000">
                            <span>1 Koli</span>
                        </li>
                    </ul>
                </div>
                <div class="content-price">
                    <span id="price"></span>TL
                </div>
                <div class="text-(--fish-red) font-medium">
                    Havale ile ödemelerinizde ekstra %5 indirim!
                </div>
                <div class="content-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet euismod libero.
                </div>
                <div class="content-certificates">
                    <button id="cert1" class="certificate-btn"><img src="assets/images/butonloggo.png"></button>
                    <button id="cert2" class="certificate-btn"><img src="assets/images/butonloggok.png"></button>
                    <button id="cert3" class="certificate-btn"><img src="assets/images/butonloggoy.png"></button>
                </div>
                <hr>
                <div class="f ic jb my-10 gap-5">
                    <div class="content-adet f ic jb">
                        <button id="cikar">-</button>
                        <input type="number" name="adet" id="adet" value="1" min="1">
                        <button id="ekle">+</button>
                    </div>
                    <button class="content-buy">Sepete Ekle</button>
                </div>
                <div class="content-links ic jb f">
                    <div class="link" id="askQuestionLink">
                        <img src="assets/images/yardim.png" alt="">
                        <span>Soru Sor</span>
                    </div>
                    <div class="link" id="addNoteLink">
                        <img src="assets/images/not.png" alt="">
                        <span>Siparişe Not Ekle</span>
                    </div>
                    <div class="link" id="shareLink">
                        <img src="assets/images/paylas.png" alt="">
                        <span>Paylaş</span>
                    </div>
                    <div class="link">
                        <img src="assets/images/siparisler.png" alt="">
                        <span>Bir Günde Teslimat</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="f jc">
        <div class="container">
            <div class="flex justify-between items-center py-3">
                <div class="urundetay-genelbilgiler flex justify-center">
                    <div class="urundetay-genelbilgilerlist">
                        <ul>
                            <li>
                                <p class="urundetay-kocamanyazi">GENEL BİLGİLER</p>
                            </li>
                            <li>
                                <div class="urundetay-cizgi"></div>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="aciklama">Ürün Açıklaması</button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="bilgi">Ürün Bilgisi</button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="besin">Besin Değerleri</button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="kimyasal">Kimyasal Parametreler </button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="mikro">Mikrobiyolojik Parametreler </button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="yasal">Yasal Kriter </button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="agirlik">Net Ağırlık Ölçüm Tanımlaması </button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="alerjen">Alerjenler</button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="medya">Medya Kiti</button>
                            </li>
                            <li>
                                <button class="urundetay-hovers" id="ödeme">Ödeme Seçenekleri</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="urundetay-yazilar urunbilgi flex justify-center">
                    <div class="urundetay-bilgitablosu">
                        <p class="urundetay-kocamanyazi" id="baslik" style="padding: 8px 0px;">Besin Değerleri</p>
                        <div class="urunbilgi-cizgi" id="cizgi" style="margin: 8px 0px;"></div>
                        <div>
                            <span id="yazi">Besin değerleri tablosu burada yer alacak.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products f jc">
        <div class="container f fcol ic c-s">
            <div class="products-title">
                <h2>Bu Ürünle Birlikte Tercih Edilenler</h2>
                <hr>
            </div>
            <div class="products-area f fwrap">
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="guluten-free"></span>
                            <img src="assets/images/yemek1.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek2.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products f jc">
        <div class="container f fcol ic c-s">
            <div class="products-title">
                <h2>Balık Ürünlerimiz</h2>
                <hr>
            </div>
            <div class="products-area f fwrap">
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="guluten-free"></span>
                            <img src="assets/images/yemek1.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="nothing"></span>
                            <img src="assets/images/yemek2.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <span class="my-5 font-medium">300 TL</span>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-box group">
                    <div class="products-card" data-href="#">
                        <div class="image-area r">
                            <span class="offsale"></span>
                            <img src="assets/images/yemek3.webp" alt="">
                            <div class="fast-buttons">
                                <button>
                                    <i class="fa-regular fa-eye text-lg"></i>
                                </button>
                                <button class="opencart-btn">
                                    <i class="fa-brands fa-opencart text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="title-area">
                            <div class="f jb ic">
                                <span>Balık Köftesi</span>
                                <i class="fa-regular fa-heart favorite-icon"></i>
                            </div>
                            <span class="quantity">200gr, 4 adet</span>
                            <div class="offsale my-5 f ic">
                                <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                                <span class="ml-1">%25</span>
                                <span class="line-through opacity-60 ml-2">500 TL</span>
                                <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                            </div>
                            <div class="f jb ic quantity">
                                <span>1200 TL / Paket</span>
                                <span>Koli İçi Adet: 20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/product-info-modal.php' ?>
    <?php include 'includes/sepet-modal.php' ?>
    <?php include "includes/whatsapp-contact.php" ?>
    <?php include "includes/share-modal.php" ?>
    
    <!-- Certificate Modal -->
    <div id="certificateModal" class="modal hidden">
        <div class="modal-content">
            <div class="modal-header f jb ic">
                <h3 id="certificateTitle">Sertifika</h3>
                <button id="closeCertificateModal" class="close-btn">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="certificateContent" style="width: 100%; height: 600px; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <embed id="pdfEmbed" src="" type="application/pdf" style="width: 100%; height: 100%; border-radius: 8px;">
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/not-ekle.php' ?>
    <?php include 'includes/soru-sor.php' ?>
    <?php include 'includes/share-modal.php' ?>
    <script src="assets/scripts/script.js"></script>
    <script src="assets/scripts/index.js"></script>
</body>

</html>