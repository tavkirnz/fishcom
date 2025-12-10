<div class="top-img" style="background-image: url('<?= isset($img) ? htmlspecialchars($img) : "" ?>');">
        <div class="overlay f jc ic">
            <div class="container r">
                <?php
                $title = isset($title) ? $title : "";
                $crumb = isset($crumb) ? $crumb : "";
                include "includes/breadcrumb.php";
                ?>
                <a href="" class="play-btn-text cursor-pointer">
                    <div class="play-circle-text" aria-hidden="true">
                        <svg viewBox="0 0 120 120" width="80" height="80" class="circle-svg">
                            <defs>
                                <!-- Small offset hack so the path is a full circle -->
                                <path id="recipeCirclePath" d="M60,15 a45,45 0 1,1 -0.1,0" />
                            </defs>
                            <text>
                                <textPath href="#recipeCirclePath" startOffset="0%">
                                    En Uygun Fiyat Avantajı ------------------
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    <div class="play-btn"><i class="fa-solid fa-coins"></i></div>
                </a>
            </div>
        </div>
    </div>