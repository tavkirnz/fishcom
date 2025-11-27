<!-- Sepet Modal -->
<div id="cartModal" class="cart-modal-overlay">
    <div id="cart" class="cart-modal">
        <div class="cart-modal-header">
            <h2>Alışveriş Sepeti</h2>
            <button id="closeCartModal" class="cart-close-btn">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="cart-modal-body">
            <div class="cart-empty">
                <img src="assets/images/sepet.svg" alt="">
                <p class="text-gray-500 mt-4">Sepetiniz boş</p>
                <p class="text-sm text-gray-400">Ürün eklemek için mağazamızı keşfedin</p>
            </div>
            <!-- Cart items would go here when implemented -->
            <div class="cart-true">

            </div>
        </div>
        <div class="cart-modal-pricing">
            <table>
                <tbody>
                    <tr>
                        <td class="text-start">Ara Toplam</td>
                        <td class="text-end">11.500TL</td>
                    </tr>
                    <tr>
                        <td class="text-start">KDV</td>
                        <td class="text-end">500TL</td>
                    </tr>
                    <tr>
                        <td class="text-start">İndirim</td>
                        <td class="text-end offsale">- 1.000TL</td>
                    </tr>
                    <tr>
                        <td class="text-start">Toplam</td>
                        <td class="text-end">11.000TL</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-modal-link">
            <img src="assets/images/siparisler.png" alt="">
            <span>Bir Günde Teslimat</span>
        </div>
        <div class="cart-modal-buttons">
            <button class="bg-(--fish-red)">Sepetim</button>
            <button class="bg-(--fish-blue)">Ödeme</button>
        </div>
    </div>
</div>