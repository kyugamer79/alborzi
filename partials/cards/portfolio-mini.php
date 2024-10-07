<?php

$portfolioLocation = get_field('portfolio_location');

$portfolioYear = get_field('portfolio_year');


?>

<a href="<?php echo get_the_permalink() ?>">
    <div
        class="group flex flex-row hover:bg-neutral-800 p-5 hover:rounded-[20px] justify-between items-center transition-all duration-300 border-y pb-3 pt-10">
        <!-- Portfolio Year -->
        <div class="md:text-xl text-sm text-zinc-500 group-hover:text-white">
            <?php echo $portfolioYear ?>
        </div>

        <!-- Portfolio Location -->
        <div class="md:text-xl text-sm text-zinc-500 group-hover:text-white">
            <?php echo $portfolioLocation ?>
        </div>

        <!-- Portfolio Name -->
        <div class="md:text-xl text-sm text-zinc-500 group-hover:text-white max-[767px]:hidden">
            <?php echo the_title(); ?>
        </div>

        <!-- Mobile Portfolio Name -->
        <div
            class="text-sm text-zinc-900 group-hover:text-white flex items-center gap-1 border rounded-full py-2 px-3 min-[768px]:hidden">

            <span>
                <svg class="icon size-5">
                    <use href="#icon-Arrow-17" />
                </svg>
            </span>

            <span>
                <?php

                echo wp_trim_words($portfolioName = the_title(), 2);

                ?>
            </span>

        </div>
    </div>
</a>