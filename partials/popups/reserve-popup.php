<?php

$services = get_posts([
    'post_type' => CYN_SERVICE_POST_TYPE,
    'posts_per_page' => -1,
]);

?>

<div id="pricePopup" class="price-cover fixed inset-0 hidden bg-black bg-opacity-75 flex justify-center items-center z-50 transition-opacity duration-300 opacity-0">
    <form action="/" method="post" id="pricePopupForm">
        <div class="relative flex flex-col gap-6 px-10 py-7 bg-white rounded-[40px] overflow-hidden transform transition-all duration-300 scale-95 max-md:w-full"
            id="popupContent">

            <div class="flex flex-row justify-between gap-4">
                <div class="text-black text-2xl md:text-4xl">
                    <?php echo get_option('cyn_form_title') ?>
                </div>
                <div class="flex items-center cursor-pointer" id="popUpCloser">
                    <div class="border bottom-1 rounded-full border-slate-100 p-3">
                        <svg class="icon text-zinc-600">
                            <use href="#icon-xmark" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="space-y-5">
                <div class="grid grid-cols-4 gap-5">
                    <div class="col-span-4 md:col-span-2">
                        <input name="name" type="text" required="required" placeholder="نام شما"
                            class="px-4 py-3 rounded-[40px] bg-zinc-100 w-full border border-slate-200">
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <input name="last_name" type="text" required="required" placeholder="نام خانوادگی شما"
                            class="px-4 py-3 rounded-[40px] bg-zinc-100 w-full border border-slate-200">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="col-span-4 md:col-span-2">
                        <input maxlength="11" type="text" required="required" id="phone_number"
                            aria-describedby="helper-text-explanation" placeholder="شماره تماس"
                            class="px-4 py-3 rounded-[40px] bg-zinc-100 w-full border border-slate-200"
                            name="phone_number">
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <select name="services" id="services"
                            class=" bg-zinc-100 py-3 w-full border border-slate-200 rounded-[40px]">
                            <option value=""><?php _e('خدمات', 'cyn-dm') ?></option>
                            <?php foreach ($services as $index => $service): ?>
                                <option value="<?php echo $service->post_title ?>">
                                    <?php echo $service->post_title ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div>
                    <textarea name="message" placeholder="متن پیام"
                        class="px-4 py-3 h-[154px] bg-zinc-100 border w-full border-slate-200 rounded-[40px]"></textarea>
                </div>

            </div>

            <button id="form-submit" type="submit"
                class="group flex justify-end max-lg:justify-center items-center gap-2">
                <div
                    class="border border-slate-200 bg-white group-hover:bg-teal-600 rounded-full p-2 transition-all duration-300 mt-4 md:mt-0">
                    <a class="flex items-center">
                        <span>
                            <svg class="icon object size-6 rotate-45 group-hover:text-white transition-all duration-300">
                                <use href="#icon-Arrow-17" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="text-zinc-600 text-sm cursor-pointer"><?php _e('ارسال پیام', 'cyn-dm') ?></div>
            </button>

        </div>
    </form>
</div>