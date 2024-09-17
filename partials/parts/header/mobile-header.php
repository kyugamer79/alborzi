<div class="container py-4 flex justify-between md:hidden">
    <!-- menu -->
    <div class="flex items-center cursor-pointer" id="mobileMenuOpener">
        <div class="border bottom-1 rounded-full border-slate-100 p-3">
            <svg class="icon rotate-180">
                <use href="#icon-menu-burger-square-6" />
            </svg>
        </div>
    </div>

    <!-- logo -->
    <div>
        <?php the_custom_logo() ?>
    </div>

    <!-- call -->
    <div class="flex items-center">
        <a href="<?php echo get_option('text_control') ?>">
            <div class="border rounded-full border-slate-100 bg-teal-600 p-3">
                <svg class="icon text-white">
                    <use href="#icon-Phone,-Call-11" />
                </svg>
            </div>
        </a>
    </div>
</div>