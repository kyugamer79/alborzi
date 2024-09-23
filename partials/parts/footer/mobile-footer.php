<?php $footer_mobile_menu = cyn_get_menu_items_by_slug(CYN_FOOTER_MOBILE_MENU) ?>

<div class="container hidden max-[767px]:flex flex-col gap-6 mt-20">

    <!-- Footer Title -->
    <div class="text-4xl text-center text-neutral-400 hover:text-slate-950 transition-all duration-500 cursor-default">
        <?php echo get_option('footer_title') ?>
    </div>

    <!-- Menu -->
    <div class="text-zinc-400">
        <div class="divide-y">
            <?php foreach ($footer_mobile_menu as $index => $menu_item): ?>
                <div class="text-lg text-center py-4 menu-item items-center first:before:content-['.'] first:before:w-3 first:before:h-1 first:before:rounded-full first:text-teal-600">
                    <a href="<?php echo $menu_item->url ?>"
                        class="hover:text-neutral-950 transition-colors <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                        data-id="<?php echo $menu_item->ID ?>">
                        <span>
                            <?php echo $menu_item->title ?>
                        </span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="divide-y">
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="py-4 text-center first:border-t">
                    <a class="text-lg hover:text-slate-950 transition-all duration-500"
                        href="<?php echo get_option("title_link_$i", '#') ?>">
                        <?php echo get_option("title_$i") ?>
                    </a>
                </div>
            <?php endfor ?>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="grid grid-cols-2 text-lg text-zinc-400 border-y">
        <div class="col-span-1 space-y-2 border-l px-6 py-3">
            <!-- Phone -->
            <div class="flex flex-col gap-1">
                <div class="text-sm">
                    <?php echo get_option('footer_title_phone') ?>
                </div>
                <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                    <div class="text-xs grid gap-2 hover:text-slate-950 transition-all duration-500 cursor-pointer ">
                        <?php echo get_option('desktop_menu_phone') ?>
                    </div>
                </a>
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-1">
                <div class="text-sm">
                    <?php echo get_option('footer_title_email') ?>
                </div>
                <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                    <div class="flex gap-2 text-xs hover:text-slate-950 transition-all duration-500 cursor-pointer">
                        <?php echo get_option('desktop_menu_mail') ?>
                    </div>
                </a>
            </div>
        </div>

        <!-- Address -->
        <div class="col-span-1 flex flex-col gap-3 px-6 py-3">
            <div class="text-sm">
                <?php echo get_option('footer_address_title') ?>
            </div>
            <a href="<?php echo 'mailto:' . get_option('footer_address') ?>">
                <div class="flex f-column text-xs hover:text-slate-950 transition-all duration-500 cursor-pointer">
                    <?php echo get_option('footer_address') ?>
                </div>
            </a>
        </div>
    </div>

    <!-- Social Media -->
    <div class="flex justify-center gap-4">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <a class="hover:scale-110 transition-all duration-500" href="<?php echo get_option("icon_text_$i", '#') ?>">
                <img src="<?php echo get_option("icon_img_$i", '#') ?>" alt="">
            </a>
        <?php endfor ?>
    </div>

    <!-- Cyan Name -->
    <div class="text-xs text-zinc-400 text-center">
        طراحی و توسعه توسط شرکت سایان
    </div>

</div>



</div>