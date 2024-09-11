<?php $desktop_menu = cyn_get_menu_items_by_slug(CYN_DESKTOP_MENU); ?>

<div class="col-span-1 text-5xl text-zinc-400 px-20 border-l">
    <div class="flex flex-col h-full justify-between">
        <?php foreach ($desktop_menu as $index => $menu_item): ?>
        <a href="<?php echo $menu_item->url ?>">
            <span>
                <?php echo $menu_item->title ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>