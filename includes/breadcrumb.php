<section class="f jc breadcrumb">
    <div class="container f jb ic py-3">
        <div class="title f fcol">
            <span><?= isset($title) ? htmlspecialchars($title) : "" ?></span>
        </div>
        <div class="crumb f fcol">
            <span><a href="/">Anasayfa</a><?= isset($crumb) ? htmlspecialchars($crumb) : "" ?></span>
        </div>
    </div>
</section>