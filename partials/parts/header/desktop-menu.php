<div class="fixed z-50 inset-0 gap-20 bg-gray-50 duration-700 transition-all py-7 [clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]"
    id="desktopMenu">

    <div class="container flex flex-col gap-20">
        <!-- Logo & Close Button -->
        <?php cyn_get_part('header/desktop-menu/logo-close-btn') ?>

        <!-- Menus -->
        <div class="grid grid-cols-3 min-md:ml-10 max-[820px]:ml-10 justify-evenly py-12 border-y border-slate-200 ">
            <!-- Menu -->
            <?php cyn_get_part('header/desktop-menu/menu') ?>

            <!-- Hover Menu -->
            <?php cyn_get_part('header/desktop-menu/hover-menu') ?>

            <!-- Links & Contact Information -->
            <?php cyn_get_part('header/desktop-menu/links-contact') ?>

        </div>
    </div>
</div>