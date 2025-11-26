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
    <section class="flex justify-center urundetay-tag">
        <div class="container">
            <div class="flex justify-between items-center py-3">
                <div class="flex flex-col leftupmenu-title-header">
                    <span class="">Füme Serisi</span>
                </div>
                <div class="flex flex-col">
                    <span class="">Anasayfa / Balık Grupları / Füme Serisi</span>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center urundetay-ucretsiz">
        <div class="container">
            <div id="uyariKapsayici" class="flex justify-between items-center py-3">
                <div id="uyari" class="mx-auto">
                    Sepet tutarını 5000 TL’ye tamamla kargon ücretsiz olsun!
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center">
        <div class="container">
            <div class="flex justify-between py-10">
                <div class="urunbilgi-kucukresimler">
                    <ul>
                        <li>
                            <img src="assets/images/urun.webp" class="urunbilgi-kucuk">
                        </li>
                        <li>
                            <img src="assets/images/urun.webp" class="urunbilgi-kucuk">
                        </li>
                        <li>
                            <img src="assets/images/urun.webp" class="urunbilgi-kucuk">
                        </li>
                        <li>
                            <img src="assets/images/neylabu.png" class="urunbilgi-kucuk" alt="">
                        </li>
                    </ul>
                </div>
                <div class="urunbilgi-resim flex items-center">
                    <img src="assets/images/urun.webp" id="kocamanimg" class="urunbilgi-kocaman">
                </div>
                <div class="urunbilgi-islemler">
                    <div class="items-center justify-between flex">
                        <div>
                            <span class="urunisim">Dil balığı Dolması</span>
                        </div>
                        <div class="fav">
                            <img src="assets/images/yeni.png" alt="">
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="urunkod">Ürün Kodu: 45123698</span>
                    </div>
                    <div>
                        <span class="urunisim-2">200 gr / kutu</span>
                    </div>
                    <div class="flex flex-col my-10">
                        <div>
                            <input type="radio" name="secim" value="3000" checked> 10 Kutu
                        </div>
                        <div>
                            <input type="radio" name="secim" value="6000"> 20 Kutu
                        </div>
                        <div>
                            <input type="radio" name="secim" value="10000"> Koli
                        </div>
                    </div>
                    <div class="urunisim">
                        <span id="fiyat">0 </span><span>TL</span>
                    </div>
                    <div class="havale">
                        Havale ile ödemelerinizde ekstra %5 indirim!
                    </div>
                    <div class="aciklamayazi my-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum excepturi veniam officia
                        laboriosam dolor dolorum repellendus at rem quis assumenda magni voluptatem ad, quos voluptates
                        repudiandae quasi a voluptate cum.
                    </div>
                    <div class="mb-5">
                        <button class="btnimg"><img src="assets/images/butonloggo.png" alt=""></button>
                        <button class="btnimg"><img src="assets/images/butonloggok.png" alt=""></button>
                        <button class="btnimg"><img src="assets/images/butonloggoy.png" alt=""></button>
                    </div>

                    <!-- Lightbox / Modal -->
                    <div id="modal" class="modal">
                        <span id="close">&times;</span>
                        <img class="modal-content" id="modal-img">
                    </div>


                    <div class="islemler-cizgi">
                    </div>
                    <div class="items-center justify-between flex">
                        <div class="urundetay-toplacikar items-center flex justify-between my-10">
                            <div>
                                <button id="cikar" class="margin-margin">-</button>
                            </div>
                            <div>
                                <span id="sayim" class="margin-margin sayims">1</span>
                            </div>
                            <div>
                                <button id="ekle" class="margin-margin">+</button>
                            </div>
                        </div>
                        <div>
                            <button class="urundetay-sepetekle">Sepete Ekle</button>
                        </div>
                    </div>
                    <div class="items-center justify-between flex">
                        <div class="items-center justify-between flex">
                            <img src="assets/images/yardim.png" style="width:30px;" alt="">
                            <span class="ml-2">Soru Sor</span>
                        </div>
                        <div class="items-center justify-between flex">
                            <img src="assets/images/not.png" style="width:30px; height:30px;" alt="">
                            <span class="ml-2">Siparişe Not Ekle</span>
                        </div>
                        <div class="items-center justify-between flex">
                            <img src="assets/images/paylas.png" style="width:30px;" alt="">
                            <span class="ml-2">Paylaş</span>
                        </div>
                        <div class="items-center justify-between flex">
                            <img src="assets/images/siparisler.png" style="width:30px;" alt="">
                            <span class="ml-2">Bir Günde Teslimat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center">
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
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/product-info-modal.php'; ?>
    <script src="assets/scripts/script.js"></script>
    
    <script>
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modal-img');
        const closeBtn = document.getElementById('close');
        const buttons = document.querySelectorAll('.btnimg');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                modal.style.display = 'flex';          // modal açılır
                modalImg.src = button.querySelector('img').src; // img kaynağı büyük resme gelir
                modalImg.style.transform = 'scale(0.5)';
                setTimeout(() => modalImg.style.transform = 'scale(1)', 10); // hafif animasyon
            });
        });

        // Kapatma butonuna tıklayınca modal kapanır
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Modal dışında tıklayınca da kapanmasını isteyebilirsin
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        const buyukResim = document.getElementById('kocamanimg');

        const kucukResimler = document.querySelectorAll('.urunbilgi-kucuk');

        kucukResimler.forEach((resim) => {
            resim.addEventListener('click', () => {
                buyukResim.src = resim.src;
            });
        });

        function changeText(baslik, yazi) {
            const baslikEl = document.getElementById("baslik");
            const yaziEl = document.getElementById("yazi");
            const cizgiEl = document.getElementById("cizgi");

            baslikEl.classList.remove("show");
            yaziEl.classList.remove("show");
            cizgiEl.classList.remove("show");

            baslikEl.classList.add("fade");
            yaziEl.classList.add("fade");
            cizgiEl.classList.add("fade");

            setTimeout(() => {
                baslikEl.textContent = baslik;
                yaziEl.textContent = yazi;

                baslikEl.classList.remove("fade");
                yaziEl.classList.remove("fade");
                cizgiEl.classList.remove("fade");

                baslikEl.classList.add("show");
                yaziEl.classList.add("show");
                cizgiEl.classList.add("show");
            }, 400);
        }

        const tabData = {
            aciklama: {
                baslik: "Ürün Açıklaması",
                yazi: "Buraya ürün açıklaması gelecek."
            },
            bilgi: {
                baslik: "Ürün Bilgisi",
                yazi: "Ürün bilgisi içerikleri burada gösterilir."
            },
            besin: {
                baslik: "Besin Değerleri",
                yazi: "Besin değerleri tablosu burada yer alacak."
            },
            kimyasal: {
                baslik: "Kimyasal Parametreler",
                yazi: "Kimyasal analiz sonuçları burada görüntülenir."
            },
            mikro: {
                baslik: "Mikrobiyolojik Parametreler",
                yazi: "Mikrobiyolojik parametre içerikleri."
            },
            yasal: {
                baslik: "Yasal Kriter",
                yazi: "Ürünün yasal kriterleri buraya yazılacak."
            },
            agirlik: {
                baslik: "Net Ağırlık Ölçüm Tanımlaması",
                yazi: "Tanımlar ve kurallar burada yer alır."
            },
            alerjen: {
                baslik: "Alerjenler",
                yazi: "Üründe bulunan potansiyel alerjenler."
            },
            medya: {
                baslik: "Medya Kiti",
                yazi: "Medya materyalleri burada gösterilir."
            },
            ödeme: {
                baslik: "Ödeme Seçenekleri",
                yazi: "Ödeme yöntemleri ve bilgiler."
            }
        };

        Object.keys(tabData).forEach(id => {
            const buton = document.getElementById(id);
            if (buton) {
                buton.addEventListener("click", function () {
                    changeText(tabData[id].baslik, tabData[id].yazi);
                });
            }
        });

        const items = document.querySelectorAll('.urundetay-hovers');

        items.forEach(item => {
            item.addEventListener('click', function () {
                items.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        document.addEventListener("DOMContentLoaded", function () {

            const buttons = document.querySelectorAll(".urundetay-hovers");

            buttons.forEach(btn => btn.classList.remove("active"));

            const besinBtn = document.getElementById("besin");
            if (besinBtn) {
                besinBtn.classList.add("active");
            }
        });

        let sayi = 1;
        let birimFiyat = 3000;

        const uyariSection = document.querySelector("section.urundetay-ucretsiz");
        const toplamabtn = document.getElementById("ekle");
        const cikarbtn = document.getElementById("cikar");
        const degisensayi = document.getElementById("sayim");
        const fiyatSpan = document.getElementById("fiyat");

        function fiyatiGuncelle() {
            const toplam = birimFiyat * sayi;
            fiyatSpan.textContent = toplam;

            // 5000 TL üzerindeyse gözükmesin ama yerini korusun
            if (toplam > 5000) {
                uyariSection.style.visibility = "hidden";
            } else {
                uyariSection.style.visibility = "visible";
            }
        }

        // Başlangıç
        fiyatiGuncelle();

        // Radio butonları
        const radioButtons = document.querySelectorAll("input[name='secim']");

        radioButtons.forEach(radio => {
            radio.addEventListener("change", function () {
                birimFiyat = parseInt(this.value);
                fiyatiGuncelle();
            });
        });

        toplamabtn.addEventListener("click", function () {
            sayi++;
            degisensayi.innerText = sayi;
            fiyatiGuncelle();
        });

        cikarbtn.addEventListener("click", function () {
            sayi--;
            if (sayi < 1) sayi = 1;
            degisensayi.innerText = sayi;
            fiyatiGuncelle();
        });

    </script>
</body>
</html>