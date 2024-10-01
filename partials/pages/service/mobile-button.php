<?php

$services = new WP_Query([
    "post_type" => CYN_SERVICE_POST_TYPE,
    "post__not_in" => [
        get_the_ID()
    ],
]);

?>

<!-- Mobile -->
<section class="max-[767px]:px-4 min-[768px]:px-10 min-[768px]:hidden">

    <div class="block min-[768px]:hidden text-3xl">
        <?php _e('سایر خدمات', 'cyn-dm') ?>
    </div>

    <div class="py-3"></div>

    <?php

    if ($services->have_posts()): ?>

        <div class="flex flex-col gap-4 justify-end ">
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