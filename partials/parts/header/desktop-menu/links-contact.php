<?php $desktop_menu = cyn_get_menu_items_by_slug(CYN_DESKTOP_MENU); ?>


<div class="col-span-1 grid grid-rows-2 w-full">

    <!-- Links -->
    <div class="space-y-7 pr-24">
        <!--Title -->
        <div class=" text-3xl text-neutral-950">
            <?php echo get_option('up_section_title') ?>
        </div>

        <!-- Options -->
        <div class="grid gap-8 text-zinc-400">

            <!-- Price PopUp -->
            <div>
                <a id="menuItem1" class="hover:text-slate-950 transition-all duration-500"
                    href="<?php echo get_option("price_title_link", '#') ?>">
                    <?php echo get_option("price_title") ?>
                </a>
            </div>


            <?php for ($i = 1; $i <= 2; $i++): ?>
                <a class="hover:text-slate-950 transition-all duration-500"
                    href="<?php echo get_option("title_link_$i", '#') ?>">
                    <?php echo get_option("title_$i") ?>
                </a>
            <?php endfor ?>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="space-y-7 pt-14 pr-24 border-t border-slate-200">
        <!-- Title -->
        <div class="text-3xl text-neutral-950">
            <?php echo get_option('down_section_title') ?>
        </div>

        <div class="grid gap-8 text-zinc-400">
            <!-- Phone Number -->
            <div class="group">
                <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                    <div class="flex flex-row">
                        <svg class="icon group-hover:rotate-180 transition-all duration-500	">
                            <use href="#icon-Arrow-17" />
                        </svg>

                        <span class="underline">
                            <?php echo get_option('desktop_menu_phone') ?>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Email -->
            <div class="group">
                <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                    <div class="flex flex-row">
                        <svg class="icon group-hover:rotate-180 transition-all duration-500">
                            <use href="#icon-Arrow-17" />
                        </svg>

                        <span class=" underline">
                            <?php echo get_option('desktop_menu_mail') ?>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Social Medias -->
            <div class="flex flex-row gap-4">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <a class="hover:scale-110 transition-all duration-500"
                        href="<?php echo get_option("icon_text_$i", '#') ?>">
                        <img src="<?php echo get_option("icon_img_$i", '#') ?>" alt="">
                    </a>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>