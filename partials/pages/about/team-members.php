<div class="team-section bg-black mx-0 px-10 py-8 relative" style="background-image: url(<?php echo CYN_THEME_DIR . '/assets/img/opacity-black-sections.png'?>);">
    <div class="text-white text-4xl max-md:text-2xl py-8">
        <?php _e('اعضای تیم بعد پنج', 'cyn-dm') ?>
    </div>

    <swiper-container space-between="12" slides-per-view="auto">
        <?php for ($i = 1; $i < 10; $i++): ?>

            <?php
            $teamImage = get_field("team_img_$i");
            $teamName = get_field("team_name_$i");
            ?>

            <?php if ($teamImage && $teamName): ?>
                <swiper-slide class="max-w-[350px]">
                    <div class="group rounded-[20px] bg-no-repeat bg-cover overflow-hidden min-h-[360px] flex flex-col justify-center items-center p-5 transition-all duration-500 relative"
                        style="background-image: url('<?php echo wp_get_attachment_image_url($teamImage, 'full', false) ?>');">
                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-slate-600/65 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-[1]">
                        </div>
                        <div class="hidden group-hover:block text-slate-200 text-2xl transition-all duration-500 z-[2]">
                            <?php echo $teamName ?>
                        </div>
                    </div>
                </swiper-slide>
            <?php endif; ?>

        <?php endfor; ?>
    </swiper-container>

    <div id="custom-cursor"
        class="fixed pointer-events-none bg-blue-500 w-6 h-6 rounded-full transform transition-transform duration-200">
    </div>

</div>