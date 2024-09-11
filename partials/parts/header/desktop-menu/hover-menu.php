<?php $desktop_menu = cyn_get_menu_items_by_slug(CYN_DESKTOP_MENU); ?>


<div class="text-5xl max-lg:text-lg text-zinc-400 border-l relative parent w-0 col-span-1 hidden">
    <?php foreach ($desktop_menu as $menu_item):
        if (empty($menu_item->child_items)) continue;
    ?>
    <div class="[clip-path:polygon(100%_0,_100%_0,_100%_100%,_100%_100%)] flex flex-col justify-between absolute inset-0 transition-all duration-500 child-menu-item"
        data-id="<?php echo $menu_item->ID ?>">

        <?php foreach ($menu_item->child_items as $child): ?>
        <a href="<?php echo $child->url ?>"
            class="flex gap-2 pr-10 items-center hover:text-neutral-950  before:content-[''] before:w-0 transition-colors before:h-1 before:rounded-full before:transition-all before:bg-black hover:before:w-3">
            <span>
                <?php echo $child->title ?>
            </span>

        </a>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>