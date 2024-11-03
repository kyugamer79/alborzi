<section class="max-[767px]:px-4 min-[768px]:px-10">

    <swiper-container speed="500">

        <?php for ($i = 1; $i <= 10; $i++): ?>

            <?php $image = get_field("img_$i") ?>

            <?php if (empty($image))
                continue; ?>

            <swiper-slide class="object-cover">

                <?php echo wp_get_attachment_image($image, 'full', false, ['class' => 'w-full h-[196px] md:h-[520px] rounded-[32px]']) ?>

            </swiper-slide>

        <?php endfor; ?>

    </swiper-container>

</section>