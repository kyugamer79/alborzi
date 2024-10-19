<?php $footer_menu_1 = cyn_get_menu_items_by_slug(CYN_FOOTER_MENU_1) ?>
<?php $footer_menu_2 = cyn_get_menu_items_by_slug(CYN_FOOTER_MENU_2) ?>

<div class="container min-[768px]:grid hidden gap-6 mt-20">

    <!-- Footer Title -->
    <div class="footer-text-gsap text-4xl text-neutral-400 cursor-default">
        <?php echo get_option('footer_title') ?>
    </div>

    <!-- Footer Information -->
    <div class="grid grid-cols-12 border-y gap-6 text-zinc-400">
        <!-- Column 1 -->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center gap-3 border-l">
            <?php foreach ($footer_menu_1 as $index => $menu_item): ?>
                <a href="<?php echo $menu_item->url ?>"
                    class="menu-item max-lg:text-sm first:before:content-[''] first:before:w-3 first:before:h-1 first:before:rounded-full first:before:bg-teal-600 first:text-teal-600 flex gap-3 items-center text-lg hover:text-neutral-950 transition-colors <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                    data-id="<?php echo $menu_item->ID ?>">
                    <span>
                        <?php echo $menu_item->title ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Column 2-->
        <div class="col-span-1 justify-center py-4 flex flex-col items-center gap-3 ">
            <?php foreach ($footer_menu_2 as $index => $menu_item): ?>
                <a href="<?php echo $menu_item->url ?>"
                    class="menu-item max-lg:text-sm flex gap-3 items-center text-lg hover:text-neutral-950 transition-colors <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                    data-id="<?php echo $menu_item->ID ?>">
                    <span>
                        <?php echo $menu_item->title ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Column 3-->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center space-y-3 border-r">
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <a class="text-lg max-lg:text-sm hover:text-slate-950 transition-all duration-500"
                    href="<?php echo get_option("title_link_$i", '#') ?>">
                    <?php echo get_option("title_$i") ?>
                </a>
            <?php endfor ?>
        </div>

        <!-- Column 4-->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center gap-3 border-r">
            <div class="text-lg max-lg:text-sm">
                <?php echo get_option('footer_title_phone') ?>
            </div>
            <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                <div class="grid gap-2 max-lg:text-sm hover:text-slate-950 transition-all duration-500 cursor-pointer ">
                    <?php echo get_option('desktop_menu_phone') ?>
                </div>
            </a>
        </div>

        <!-- Column 5-->
        <div class="col-span-2 justify-center py-4 flex flex-col items-center gap-3 border-x">
            <div class="text-lg max-lg:text-sm">
                <?php echo get_option('footer_title_email') ?>
            </div>
            <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                <div
                    class="flex gap-2 text-base max-lg:text-sm hover:text-slate-950 transition-all duration-500 cursor-pointer">
                    <?php echo get_option('desktop_menu_mail') ?>
                </div>
            </a>
        </div>

        <!-- Column 6-->
        <div class="col-span-3 justify-center py-4 grid grid-cols-5 gap-3 align-center">
            <div class="col-span-4">
                <div class="text-lg max-lg:text-sm">
                    <?php echo get_option('footer_address_title') ?>
                </div>
                <a href="<?php echo 'mailto:' . get_option('footer_address') ?>">
                    <div
                        class="flex f-column text-base max-lg:text-sm hover:text-slate-950 transition-all duration-500 cursor-pointer">
                        <?php echo get_option('footer_address') ?>
                    </div>
                </a>
            </div>

            <div class="col-span-1 grid gap-4">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <a class="hover:scale-110 transition-all duration-500"
                        href="<?php echo get_option("icon_text_$i", '#') ?>">
                        <img src="<?php echo get_option("icon_img_$i", '#') ?>" alt="">
                    </a>
                <?php endfor ?>
            </div>
        </div>

    </div>

    <!-- Cyan Name -->
    <div class="text-xs text-zinc-400 text-center">
        طراحی و توسعه توسط شرکت سایان
    </div>

</div>
