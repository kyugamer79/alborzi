<?php $mobile_menu = cyn_get_menu_items_by_slug(CYN_MOBILE_MENU) ?>

<div class="fixed space-y-5 inset-0 p-5 pb-10 bg-gray-50 [clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)] duration-700 transition-all"
    id="mobileMenu">

    <div class="flex gap-4 justify-between">
        <!-- Close Button -->
        <div class="flex items-center cursor-pointer" id="mobileMenuCloser">
            <div class="border bottom-1 rounded-full border-slate-100 p-3">
                <svg class="icon text-zinc-600">
                    <use href="#icon-xmark" />
                </svg>
            </div>
        </div>

        <!-- Logo -->
        <div>
            <?php the_custom_logo() ?>
        </div>
    </div>

    <!-- Menu -->
    <div>
        <div class="flex flex-col h-full justify-between text-xl text-zinc-400 ">
            <?php foreach ($mobile_menu as $index => $menu_item): ?>
            <a href="<?php echo $menu_item->url ?>">
                <span>
                    <?php echo $menu_item->title ?>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

</div>