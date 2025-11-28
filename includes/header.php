<div class="topbar f jc">
    <div class="container f jb">
        <div class="f ic">
            <a href="#" class="f gap-2">
                <i class="fa-solid fa-location-dot text-xl"></i>
                <span>The Fish Company</span>
            </a>
        </div>
        <div class="f ic">
            <span>3000TL ve üzeri siparişlerde kargo ücretsiz!</span>
        </div>
        <div class="social-area f ic">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</div>
<header class="f jc">
    <div class="container f jb ic">
        <a href="/">
            <img src="assets/images/logo.svg">
        </a>
        <div class="search-area r">
            <form action="/submit">
                <div class="search-btn r">
                    <input class="header-search-input" id="searchInput" type="text">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </form>
            <div class="hidden" id="suggestions"></div>
        </div>
        <div class="user-area f ic r">
            <div class="user-account r">
                <a class="ic" id="accountBtn">
                    <i class="fa-regular fa-user"></i>
                    <span>Engin Tasarım</span>
                </a>
                <div id="accountMenu" class="hidden">
                    <h4>Engin Tasarım ve Elektronik San. Tic. Ltd. Şti</h4>
                    <ul>
                        <li>
                            <img src="assets/images/siparisler.png" alt="">
                            <a href="/siparis.php">Önceki Siparişlerim</a>
                        </li>
                        <li>
                            <img src="assets/images/yeni.png" alt="">
                            <a href="#">Yeni Ürünlerim</a>
                        </li>
                        <li>
                            <img src="assets/images/kullanici.png" alt="">
                            <a href="#">Kullanıcı Bilgilerim</a>
                        </li>
                        <li>
                            <img src="assets/images/adreslerim.png" alt="">
                            <a href="#">Adreslerim</a>
                        </li>
                        <li>
                            <img src="assets/images/favoriler.png" alt="">
                            <a href="/favorilerim.php">Favorilerim</a>
                        </li>
                        <li class="hover:text-(--fish-blue)!">
                            <img src="assets/images/yardim.png" alt="">
                            <a href="/destek.php">Destek</a>
                        </li>
                        <li class="hover:text-red-600!">
                            <img src="assets/images/cikis.png" alt="">
                            <a href="#" class="flex">Çıkış Yap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user-favorites">
                <a href="/favorilerim.php" class="ic">
                    <i class="fa-regular fa-heart"></i>
                    <span>Favorilerim</span>
                </a>
            </div>
            <div class="user-cart">
                <a href="" class="ic">
                    <img src="assets/images/sepet.svg" alt="" style="height: 16px;">
                    <span>Sepetim</span>
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="ext-nav">
    <nav class="header-nav f jc">
        <div class="container f jb ">
            <div class="features-nav f ic">
                <i id="hamburger-menu" class="fa-solid fa-bars"></i>
                <ul class="f ic">
                    <li><a href="/list-page.php">Ürünler</a></li>
                    <li><a href="">Yeni Gelenler</a></li>
                    <li><a href="">Kampanyalar</a></li>
                    <li><a href="">Birlikte Al Kazan</a></li>
                </ul>
            </div>
            <div class="user-nav f ic">
                <ul class="f ic">
                    <li>
                        <a class="f ic" href="/siparis.php">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            Önceki Siparişlerim
                        </a>
                    </li>
                    <li>
                        <a class="f ic" href="/yeni-urunler.php">
                            <i class="fa-solid fa-star"></i>
                            Yeni Ürünlerim
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="open-header-nav f jc a">
        <div class="container">
            <div class="open-nav f">
                <ul class="f fcol w-75">
                    <h6>Balık Grupları</h6>
                    <li><a href="">Horeca Serisi</a></li>
                    <li><a href="">Çiğ ürünler Serisi</a></li>
                    <li><a href="">Füme Serisi</a></li>
                    <li><a href="">Gurme Serisi</a></li>
                    <li><a href="">Hamurlular Serisi</a></li>
                    <li><a href="">Klasik Retail Serisi</a></li>
                    <li><a href="">Konserve Ürünler Serisi</a></li>
                    <li><a href="">Marinat Serisi</a></li>
                    <li><a href="">Skinpack Serisi</a></li>
                    <li><a href="">Skinpack Serisi Bilezikli Ürünler</a></li>
                </ul>
                <div class="f fcol gap-10">
                    <ul class="f fcol w-50">
                        <h6>Deniz Ürünleri</h6>
                        <li><a href="">Somon</a></li>
                        <li><a href="">Ahtapot</a></li>
                        <li><a href="">Karides</a></li>
                    </ul>
                    <ul class="f fcol w-50">
                        <h6>Sushi</h6>
                        <li><a href="">Somon</a></li>
                        <li><a href="">Ahtapot</a></li>
                        <li><a href="">Karides</a></li>
                    </ul>
                </div>
                <div class="f fcol gap-10">
                    <ul class="flex flex-col w-50">
                        <h6>pişirme türleri</h6>
                        <li><a href="">Izgara</a></li>
                        <li><a href="">Tava</a></li>
                        <li><a href="">Fırın</a></li>
                        <li><a href="">Çiğ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</nav>