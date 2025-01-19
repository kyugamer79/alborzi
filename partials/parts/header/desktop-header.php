<div class="container flex justify-between py-8 max-md:hidden">

    <!-- menu & language -->
    <div class="flex gap-5 items-center">
        <!-- menu -->
        <div class="border bottom-1 rounded-full border-slate-100 p-3 cursor-pointer" id="desktopMenuOpener">
            <svg class="icon rotate-180">
                <use href="#icon-menu-burger-square-6" />
            </svg>
        </div>

        <!-- language button -->
        <div class="border bottom-1 rounded-full border-slate-100 p-3 ">
            <svg class="icon">
                <use href="#icon-Earth,-Home,-World-4" />
            </svg>
        </div>
    </div>

    <!-- search -->
    <div class="flex items-center flex-grow">
        <form class="w-full mx-48 max-lg:mx-4" action="/" method="GET">
            <div class="relative flex items-center">
                <a href="/?search-type=all&s=">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3">
                        <svg class="icon text-zinc-600">
                            <use href="#icon-Search,-Loupe" />
                        </svg>
                    </div>
                </a>

                <input type="search" id="search" value="<?php the_search_query()?>"
                    class="block rounded-full w-full py-3 pl-4 pr-9 text-base placeholder:text-zinc-600 text-zinc-600 bg-zinc-100 border border-slate-200"
                    placeholder="جستجو کن" name="s" required />
            </div>
        </form>
    </div>


    <!-- logo & call -->
    <div class="flex gap-5 items-center">
        <!-- call -->
        <a href="<?php echo 'tel:' . get_option('desktop_header_phone') ?>">
            <div class="border bottom-1 rounded-full border-slate-100 p-3">
                <svg class="icon">
                    <use href="#icon-Phone,-Call-11" />
                </svg>
            </div>
        </a>

        <!-- logo -->
        <div>
            <?php the_custom_logo() ?>
        </div>
    </div>
</div>