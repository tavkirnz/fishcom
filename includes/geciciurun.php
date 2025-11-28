<div class="products-box group">
    <div class="products-card" data-href="/urundetay.php">
        <div class="image-area r">
            <span class='
                <?= isset($tag) && $tag === "gluten" ? "guluten-free" : "" ?>
                <?= isset($tag) && $tag === "offsale" ? "offsale" : "" ?>
                <?= isset($tag) && $tag === "nothing" ? "nothing" : "" ?>
            '></span>
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
            <div class="title-ext">
                <div class="f jb ic">
                    <span>Balık Köftesi</span>
                    <i class="fa-regular fa-heart favorite-icon"></i>
                </div>
                <span class="quantity">200gr, 4 adet</span>
            </div>
            <div class="price-ext">
                <div class="price-buy f ic jb">

                    <?= isset($tag) && $tag === "offsale" ? '
            
                <div class="offsale f ic">
                    <i class="fa-solid fa-caret-down text-(--fish-red) text-4xl"></i>
                    <span class="ml-1">%25</span>
                    <span class="line-through opacity-60 ml-2">500 TL</span>
                    <span class="font-medium text-(--fish-red) ml-2">376 TL</span>
                </div>

            ' : '' ?>
                    <?= isset($tag) && $tag === "gluten" ? '
            
                <span class="my-5 font-medium">350 TL</span>
            
            ' : '' ?>
                    <?= isset($tag) && $tag === "nothing" ? '
            
                <span class="my-5 font-medium">300 TL</span>
            
            ' : '' ?>
                    <button id="sepete-ekle">
                        <i class="fa-solid fa-circle-plus text-2xl"></i>
                    </button>
                    <div id="adet-ayar" class="content-adet f ic jb">
                        <button id="cikar">-</button>
                        <input type="number" name="adet" id="adet" value="1" min="1">
                        <button id="ekle">+</button>
                    </div>
                </div>
                <div class="f jb ic quantity">
                    <span>1200 TL / Paket</span>
                    <span>Koli İçi Adet: 20</span>
                </div>
            </div>
        </div>
    </div>
</div>