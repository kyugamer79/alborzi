<div class="portfolio-container ">
    <a href="<?php echo get_permalink(); ?>"
        class="relative container group flex flex-col md:flex-row justify-between items-start bg-no-repeat bg-cover w-full h-auto md:h-[635px] p-6 md:p-12 rounded-[80px] transition-all duration-300"
        style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');" data-animate="true">

        <div class="absolute inset-0 bg-black opacity-50 rounded-[80px]"></div>

        <div class="relative z-10 text-3xl md:text-4xl font-bold text-white mb-4 md:mb-0">
            <?php echo get_the_title(); ?>
        </div>

        <div
            class="relative z-10 bg-white group-hover:bg-teal-600 rounded-full p-2 transition-all duration-300 mt-4 md:mt-0">
            <span class="flex items-center">
                <svg class="icon object w-6 h-6 md:w-8 md:h-8 group-hover:text-white transition-all duration-300">
                    <use href="#icon-Arrow-17" />
                </svg>
            </span>
        </div>
    </a>
</div>