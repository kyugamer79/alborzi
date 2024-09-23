<?php

$services = new WP_Query([
    "post_type" => CYN_SERVICE_POST_TYPE,
    "post__not_in" => [
        get_the_ID()
    ],
]);


$portfolio = new WP_Query([
    'post_type' => CYN_PORTFOLIO_POST_TYPE,
    'tax_query' => [
        [
            'taxonomy' => CYN_PORTFOLIO_CATEGORY_TAXONOMY,
            'field' => 'term_id',
            'terms' => get_terms(['taxonomy' => CYN_PORTFOLIO_CATEGORY_TAXONOMY, 'fields' => 'ids']),
        ],
    ],

    'post__not_in' => [
        get_the_ID()
    ],

])

    ?>

<?php

$mainTitle = get_field('main_title');

?>


<?php get_header() ?>

<main class="default-page">


    <!-- Tttle -->
    <section class="text-5xl py-7 px-10">
        <?php the_title() ?>
    </section>

    <!-- Gallery Swiper -->
    <section class="px-10">

        <swiper-container speed="500">

            <?php for ($i = 1; $i <= 10; $i++): ?>

                <?php $image = get_field("img_$i") ?>

                <?php if (empty($image))
                    continue; ?>

                <swiper-slide class="max-h-[520px] object-cover">

                    <?php echo wp_get_attachment_image($image, 'full', false, ['class' => 'w-full h-[520px] rounded-[32px]']) ?>

                </swiper-slide>

            <?php endfor; ?>

        </swiper-container>

    </section>

    <div class="py-7"></div>

    <!-- Services Buttons -->
    <section class="px-10">

        <?php

        if ($services->have_posts()): ?>

            <div class="flex flex-row gap-4 justify-end ">
                <?php

                while ($services->have_posts()):
                    $services->the_post();
                    ?>
                    <div>
                        <a href="<?php echo get_the_permalink() ?>" class="primary-btn">

                            <span><?php echo get_the_title() ?></span>

                            <span>
                                <svg class="icon">
                                    <use href="#icon-Arrow-17" />
                                </svg>
                            </span>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php
        else:
            esc_html_e('Sorry, no posts matched your criteria.');
        endif;
        wp_reset_postdata();

        ?>

    </section>

    <div class="py-7"></div>

    <!-- Content -->
    <section class="text-base leading-8 px-10">
        <?php the_content() ?>
    </section>

    <div class="py-10"></div>

    <!-- Steps -->
    <?php if (!empty($mainTitle)): ?>

        <section class="bg-slate-950 p-10">

            <div class="text-white text-4xl">
                <?php echo $mainTitle ?>
            </div>

            <swiper-container>

                <?php for ($i = 1; $i <= 3; $i++): ?>


                    <?php

                    $stepsTtile = get_field("step_title_$i");
                    $stepsText = get_field("step_text_$i");
                    $stepsImage = get_field("step_image_$i");

                    ?>

                    <swiper-slide class="p-10">
                        <div class="flex flex-row justify-around items-center gap-5">
                            <!-- Content -->
                            <div class="flex flex-col gap-2 justify-center w-[608px]">
                                <!-- Title -->
                                <div class="text-neutral-300 text-3xl">
                                    <?php echo $stepsTtile ?>
                                </div>

                                <!-- Text -->
                                <div class="text-zinc-600 text-2xl">
                                    <?php echo $stepsText ?>
                                </div>
                            </div>

                            <!-- Image -->
                            <div>
                                <?php echo wp_get_attachment_image($stepsImage, 'full', false, ['class' => 'w-[350px] object-cover']) ?>
                            </div>

                        </div>

                    </swiper-slide>


                <?php endfor ?>

            </swiper-container>

        </section>

    <?php endif ?>

    <div class="py-10"></div>

    <!-- Portfolio -->
    <section class="px-10">


        <?php

        $posts = get_posts([
            'post_type' => CYN_PORTFOLIO_POST_TYPE,
            'fields' => 'ids',
        ])

            ?>
        <!-- Title -->

        <div class="text-5xl">
            نمونه کارهای
            <?php echo the_title() ?>
        </div>


        <!-- Swiper -->
         


    </section>

    </div>
</main>

<?php get_footer() ?>