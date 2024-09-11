<?php $desktop_menu = cyn_get_menu_items_by_slug(CYN_DESKTOP_MENU); ?>

<div class="col-span-1 text-5xl max-lg:text-lg text-zinc-400 px-0 border-l">
    <div class="flex flex-col h-full justify-between">
        <?php foreach ($desktop_menu as $index => $menu_item): ?>
            <a href="<?php echo $menu_item->url ?>"
                class="menu-item flex gap-2 items-center hover:text-neutral-950 transition-colors <?php echo $menu_item->child_items ? 'has-child' : 'no-child' ?>"
                data-id="<?php echo $menu_item->ID ?>">
                <span>
                    <?php echo $menu_item->title ?>
                </span>
                <?php if ($menu_item->child_items): ?>
                    <svg class="icon size-4">
                        <use href="#icon-chevron-left" />
                    </svg>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>