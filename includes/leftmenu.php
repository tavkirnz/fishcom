<div class="left-menu f fcol gap-2">
    <h4>Engin Tasarım ve Elektronik San. Tic. Ltd. Şti</h4>
    <ul>
        <li>
        <img src="assets/images/siparisler.png" alt="">
            <a class='<?= isset($active) && $active === "Önceki Siparişlerim" ? "text-(--fish-red)" : "" ?>' href="/siparis.php">Önceki Siparişlerim</a>
        </li>
        <li>
        <img src="assets/images/yeni.png" alt="">
            <a class='<?= isset($active) && $active === "Favorilerim" ? "text-(--fish-red)" : "" ?>' href="#">Yeni Ürünlerim</a>
        </li>
        <li>
        <img src="assets/images/kullanici.png" alt="">
            <a class='<?= isset($active) && $active === "Kullanıcı Bilgilerim" ? "text-(--fish-red)" : "" ?>' href="#">Kullanıcı Bilgilerim</a>
        </li>
        <li>
        <img src="assets/images/adreslerim.png" alt="">
            <a class='<?= isset($active) && $active === "Adreslerim" ? "text-(--fish-red)" : "" ?>' href="#">Adreslerim</a>
        </li>
        <li>
        <img src="assets/images/favoriler.png" alt="">
            <a class='<?= isset($active) && $active === "Favorilerim" ? "text-(--fish-red)" : "" ?>' href="#">Favorilerim</a>
        </li>
        <li class="hover:text-(--fish-blue)!">
            <img src="assets/images/yardim.png" alt="">
            <a class='<?= isset($active) && $active === "Yardım" ? "text-(--fish-blue)" : "" ?>' href="/destek.php">Yardım</a>
        </li>
        <li class="hover:text-red-600!">
        <img src="assets/images/cikis.png" alt="">
            <a class="flex">Çıkış Yap</a>
        </li>
    </ul>
</div>