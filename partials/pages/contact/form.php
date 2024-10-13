<div class="col-span-3 lg:col-span-2 grid gap-7 max-[1023px]:order-2">

    <div class="space-y-7">

        <!-- Title -->
        <div class="text-5xl text-zinc-900 max-[1024px]:hidden">
            <?php _e('تماس با ما', 'cyn-dm') ?>
        </div>

        <div class="grid grid-cols-2 max-lg:col-span-3 gap-3">
            <div class="col-span-1 max-lg:col-span-2">
                <label class="form-group order-1">
                    <input placeholder="نام و نام خانوادگی" type="text"
                        class="form-control w-full text-base text-zinc-400 rounded-[40px] border border-slate-200 bg-zinc-100 p-4 focus-visible:border-zinc-500 focus:text-zinc-600 transition-all duration-300 focus:ring-0"
                        name="author">
                </label>
            </div>

            <div class="form-group col-span-1 max-lg:col-span-2">
                <input placeholder="شماره تماس" type="text"
                    class="form-control w-full text-base text-zinc-400 rounded-[40px] border border-slate-200 bg-zinc-100 p-4 focus-visible:border-zinc-500 focus:text-zinc-600 transition-all duration-300 focus:ring-0"
                    name="text">
            </div>
        </div>

        <div>
            <textarea placeholder="متن پیام"
                class="form-control resize-none w-full h-[154px] text-base text-zinc-400 rounded-[40px] border border-slate-200 bg-zinc-100 p-4 focus-visible:border-zinc-500 focus:text-zinc-600 transition-all duration-300 focus:ring-0"
                name="comment"></textarea>
        </div>

        <div class="form-submit flex justify-end max-lg:justify-center items-center gap-2">
            <svg class="icon rotate-45 object border border-slate-200 rounded-full p-2 size-12 cursor-pointer">
                <use href="#icon-Arrow-17" />
            </svg>
            <div class="text-zinc-600 text-sm cursor-pointer"><?php _e('ارسال پیام', 'cyn-dm') ?></div>
        </div>


        <!-- Contact Ways -->
        <section class="flex flex-row max-[767px]:block max-[767px]:divide-y border-y gap-3 p-5 text-zinc-400">

            <!-- Column 1-->
            <div class="justify-center py-4 px-3 flex flex-col gap-3 min-[768px]:border-l">
                <div class="text-lg max-lg:text-sm">
                    <?php echo get_option('footer_title_email') ?>
                </div>
                <div class="flex flex-row gap-1">
                    <a href="<?php echo 'mailto:' . get_option('desktop_menu_mail') ?>">
                        <div
                            class="flex gap-2 text-base text-teal-600 underline max-lg:text-sm hover:text-slate-950 transition-all duration-500 cursor-pointer">
                            <?php echo get_option('desktop_menu_mail') ?>
                        </div>
                    </a>
                    <svg class="icon text-[#323232]">
                        <use href="#icon-Clip,-Attachment-3" />
                    </svg>
                </div>
            </div>

            <!-- Column 2-->
            <div class="justify-center py-4 px-3 flex flex-col gap-3 min-[768px]:border-l">
                <div class="text-lg max-lg:text-sm">
                    <?php echo get_option('footer_title_phone') ?>
                </div>
                <div class="flex flex-row gap-1">
                    <a class="group" href="<?php echo 'tel:' . get_option('desktop_menu_phone') ?>">
                        <div
                            class="grid gap-2 max-lg:text-sm text-teal-600 underline hover:text-slate-950 transition-all duration-500 cursor-pointer ">
                            <?php echo get_option('desktop_menu_phone') ?>
                        </div>
                    </a>
                    <svg class="icon text-[#323232]">
                        <use href="#icon-Clip,-Attachment-3" />
                    </svg>
                </div>
            </div>


            <!-- Column 3-->
            <div class="justify-center py-4 px-3 align-center flex flex-col gap-3">
                <div class="text-lg max-lg:text-sm">
                    <?php echo get_option('footer_address_title') ?>
                </div>
                <a href="<?php echo 'mailto:' . get_option('footer_address') ?>">
                    <div
                        class="flex f-column text-base max-lg:text-sm text-zinc-700 hover:text-zinc-500 transition-all duration-500 cursor-pointer">
                        <?php echo get_option('footer_address') ?>
                    </div>
                </a>
            </div>
        </section>
    </div>

</div>