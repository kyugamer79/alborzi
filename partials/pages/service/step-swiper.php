<?php 

$mainTitle = get_field('main_title');

?>

<?php if (!empty($mainTitle)): ?>

    <section class="bg-slate-950 p-10">

        <div class="text-white text-4xl">
            <?php echo $mainTitle ?>
        </div>

        <swiper-container slides-per-view="1" space-between="20">

            <?php for ($i = 1; $i <= 3; $i++): ?>


                <?php

                $stepsTtile = get_field("step_title_$i");
                $stepsText = get_field("step_text_$i");
                $stepsImage = get_field("step_image_$i");

                ?>

                <swiper-slide class="p-10">
                    <div class="flex flex-col min-[768px]:flex-row justify-around items-center gap-5">
                        <!-- Content -->
                        <div class="flex flex-col gap-2 max-[768px]:order-1 justify-center w-[608px]">
                            <!-- Title -->
                            <div class="text-neutral-300 text-3xl">
                                <?php echo $stepsTtile ?>
                            </div>

                            <!-- Text -->
                            <div class="text-zinc-600 text-2xl">
                                <?php echo $stepsText ?>
                            </div>
                        </div>

                        <!-- Image -->
                        <div>
                            <?php echo wp_get_attachment_image($stepsImage, 'full', false, ['class' => 'w-[350px] object-cover']) ?>
                        </div>

                    </div>

                </swiper-slide>


            <?php endfor ?>

        </swiper-container>

    </section>

<?php endif ?>