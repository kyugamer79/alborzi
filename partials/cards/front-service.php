<div class="portfolio-container">
    <div class="container group flex flex-row justify-between items-start bg-no-repeat bg-cover w-full h-[635px] p-6 md:p-12 rounded-[80px] transition-all duration-300"
        style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');" data-animate="true">

        <div class="text-3xl md:text-4xl font-bold text-white mb-4 md:mb-0">
            <?php echo get_the_title() ?>
        </div>

        <div class="bg-white group-hover:bg-teal-600 rounded-full p-2 transition-all duration-300">
            <a class="flex items-center">
                <span>
                    <svg class="icon object w-6 h-6 md:w-8 md:h-8 group-hover:text-white transition-all duration-300">
                        <use href="#icon-Arrow-17" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>