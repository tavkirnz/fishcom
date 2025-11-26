<!-- Ürün Detay Modal -->
    <div id="productModal" class="modal-overlay hidden">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalProductTitle">Ürün Detayı</h2>
                <button id="closeModal" class="close-btn">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalProductImage" src="" alt="">
                    <div class="modal-badges">
                        <span id="modalProductBadge" class="product-badge"></span>
                    </div>
                </div>
                <div class="modal-info">
                    <div class="modal-title-section">
                        <h3 id="modalProductName"></h3>
                        <i class="fa-regular fa-heart favorite-icon" id="modalFavorite"></i>
                    </div>
                    <p id="modalProductDescription" class="modal-description"></p>
                    <div class="modal-price-section">
                        <div id="modalPriceContainer">
                            <span id="modalProductPrice" class="modal-price"></span>
                        </div>
                        <div class="modal-package-info">
                            <span id="modalPackagePrice"></span>
                            <span id="modalPackageCount"></span>
                        </div>
                    </div>
                    <div class="modal-actions">
                        <button class="add-to-cart-btn">
                            <i class="fa-brands fa-opencart"></i>
                            Sepete Ekle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>