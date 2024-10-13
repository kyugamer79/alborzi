<?php

$portfolioLocation = get_field('portfolio_location');

$portfolioNumber = get_field('portfolio_number');

?>

<a href="<?php echo get_the_permalink() ?>">
    <div class="group hover:cursor-pointer flex flex-col justify-end min-h-[350px] rounded-[40px] bg-cover p-5 overflow-hidden after:content-[''] after:inset-0 after:absolute relative  after:bg-gradient-to-t after:from-black/80 after:via-black/50 after:to-black/0 isolate after:rounded-[inherit] after:z-[-1]"
        style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">

        <!-- Caption -->
        <div class="flex flex-row justify-between items-end relative z-10">
            <!-- Name & Location -->
            <div>
                <!-- Name -->
                <span class="text-xl text-white">
                    <?php echo get_the_title() . '،' ?>
                </span>

                <!-- Location -->
                <span class="text-sm text-gray-200">
                    <?php echo $portfolioLocation ?>
                </span>
            </div>

            <!-- Number -->
            <div class="text-8xl text-white/40 group-hover:text-white transition-all duration-300">
                <?php echo $portfolioNumber ?>
            </div>
        </div>
    </div>
</a>