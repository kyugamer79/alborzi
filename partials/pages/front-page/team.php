<?php



?>
<div class="bg-no-repeat w-full h-[690px] bg-center bg-contain"
    style="background-image: url(<?php echo CYN_THEME_DIR . '/assets/img/front-team-bg.png' ?>);">

    <!-- Images -->
    <div>
        <?php for ($i = 1; $i <= 4; $i++):

            $teamImage = get_field("team_img_$i") ?>

            <div>
                <?php echo wp_get_attachment_image_url($teamImage, 'full', false, ['class' => 'image']) ?>
            </div>

        <?php endfor ?>

    </div>

    <!-- Content -->
    <div>

    </div>
</div>