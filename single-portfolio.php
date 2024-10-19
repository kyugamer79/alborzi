<?php get_header() ?>

<?php $portfolioMini = new WP_Query([
    'post_type' => CYN_PORTFOLIO_POST_TYPE,
    'posts_per_page' => -1,
]) ?>

<section class="md:mx-4">

    <!-- Title -->
    <div class="container text-zinc-900 text-4xl">
        <?php echo get_the_title() ?>
    </div>

    <!-- Roadmap -->
    <div class="container">
        <div class="bg-no-repeat bg-clip-content bg-center overflow-hidden grid gap-9"
            style="background-image: url('<?php echo get_option('portfolio_img') ?>');">
            <div class="md:bg-transparent bg-white w-full h-full space-y-6">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <?php
                    $roadMapImage = get_field("road_img_$i");
                    $roadMapTitle = get_field("road_title_$i");
                    $roadMapText = get_field("road_text_$i");
                    ?>
                    <div class="roadmap-item flex flex-row max-md:flex-col justify-around items-center md:even:flex-row-reverse gap-4"
                        style="opacity: 0; transform: translateY(50px); transition: opacity 0.6s ease-out, transform 0.6s ease-out;">
                        <!-- Content -->
                        <div class="flex flex-col gap-2 w-[510px] max-md:order-1">
                            <!-- Title -->
                            <div class="text-2xl md:text-3xl text-neutral-700">
                                <?php echo $roadMapTitle ?>
                            </div>
                            <!-- Text -->
                            <div class="text-lg md:text-2xl text-zinc-400">
                                <?php echo $roadMapText ?>
                            </div>
                        </div>
                        <!-- Image -->
                        <div>
                            <?php echo wp_get_attachment_image($roadMapImage, 'full', false, ['class' => 'image']) ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="py-10"></div>

    <!-- Project Images -->
    <div class="team-section bg-black mx-0 px-10 py-8 ">

        <div class="text-white text-4xl max-md:text-2xl py-8">
            <?php _e('تصاویر  محل پروژه', 'cyn-dm') ?>
        </div>

        <swiper-container space-between="12" slides-per-view="auto">

            <?php for ($i = 1; $i <= 8; $i++): ?>

                <?php $projectImage = get_field("project_img_$i") ?>

                <?php if ($projectImage): ?>

                    <swiper-slide class="max-w-[350px]">

                        <div class="group rounded-[20px] bg-no-repeat bg-cover overflow-hidden min-h-[360px] flex flex-col justify-center items-center p-5 transition-all duration-500 relative"
                            style="background-image: url('<?php echo wp_get_attachment_image_url($projectImage, 'full', false) ?>');">
                        </div>

                    </swiper-slide>

                <?php endif ?>

            <?php endfor ?>

        </swiper-container>
    </div>

    <div class="py-10"></div>

    <!-- Content -->
    <div class="container grid gap-6">
        <div class="text-2xl text-zinc-900 md:text-4xl">
            <?php _e('توضیحات پروژه', 'cyn-dm') ?>
        </div>

        <div class="text-gsap text-zinc-500 text-2xl py-4 leading-[62px] max-md:text-base max-md:leading-8">
            <?php the_content(); ?>
        </div>

    </div>

    <div class="py-10"></div>

    <!-- Portfolio Table -->
    <div class="container">

        <div class="text-4xl">
            <?php _e('نمونه کارهای بیشتر', 'cyn-dm') ?>
        </div>

        <div class="flex flex-row justify-between pt-5 pb-3 border-b border-zinc-700">
            <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('سال', 'cyn-dm') ?></div>
            <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('محل پروژه', 'cyn-dm') ?></div>
            <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('نام پروژه', 'cyn-dm') ?></div>
        </div>

        <div>
            <?php if ($portfolioMini->have_posts()): ?>

                <?php while ($portfolioMini->have_posts()): ?>

                    <?php $portfolioMini->the_post() ?>

                    <?php cyn_get_card('portfolio-mini') ?>

                <?php endwhile; ?>

            <?php endif ?>
        </div>

    </div>

</section>


<?php get_footer() ?>