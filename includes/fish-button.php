<a href="#" class="fish-button">
    <div class="fish-image">
        <img src="assets/fish.png" alt="">
        <span style="margin-right: <?= isset($right) ? htmlspecialchars($right) : "" ?>px; <?= isset($style) ? htmlspecialchars($style) : "" ?>">
            <?= isset($label) ? htmlspecialchars($label) : "Fish" ?>
        </span>
    </div>
</a>