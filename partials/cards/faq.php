<div class="group flex flex-row justify-between items-center border-b gap-16 py-9 px-6 cursor-pointer">

    <div class="flex flex-col gap-2">
        <!-- Question -->
        <div class="text-lg min-[768px]:text-2xl text-zinc-900">
            <?php the_title(); ?>
        </div>

        <!-- Answer -->
        <div
            class="max-h-0 overflow-hidden text-sm min-[768px]:text-lg opacity-0 group-hover:max-h-96 group-hover:opacity-100 text-zinc-500 leading-8 transition-all duration-500">
            <?php the_content(); ?>
        </div>
    </div>

    <!-- Icon -->
    <div class="rotate-90 group-hover:rotate-0 transition-all duration-300">
        <a href="<?php the_permalink(); ?>">
            <svg class="icon w-6 h-6 min-[768px]:w-12 min-[768px]:h-12">
                <use href="#icon-Arrow-17" />
            </svg>
        </a>
    </div>

</div>