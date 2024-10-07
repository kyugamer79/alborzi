<?php /* Template name: About Us */ ?>

<?php get_header() ?>

<?php

$heroTitle = get_field( 'hero_title' );

$heroText = get_field( 'hero_txt' );

?>

<?php $portfolioMini = new WP_Query( [ 
	'post_type' => CYN_PORTFOLIO_POST_TYPE,
	'posts_per_page' => -1,
] ) ?>

<section class="">

	<!-- Hero -->
	<div class="container rounded-[32px] max-h-[520px] bg-no-repeat bg-cover overflow-hidden w-full flex flex-col justify-end items-center p-5"
		 style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>'); aspect-ratio: 16 / 9">

		<?php if ( $heroTitle ) : ?>
			<div class="text-white text-5xl max-md:hidden"><?php echo esc_html( $heroTitle ); ?></div>
		<?php endif; ?>
	</div>

	<div class="py-3"></div>

	<!-- Mobile Hero -->
	<?php if ( $heroTitle ) : ?>

		<div class="text-zinc-700 text-2xl hidden max-md:block py-4 border-y border-slate-200">
			<?php echo esc_html( $heroTitle ); ?>
		</div>


		<div
			 class="container text-zinc-500 text-2xl py-4 leading-[62px] max-md:text-base max-md:leading-8 hover:text-zinc-800 transition-all duration-300">
			<?php echo $heroText ?>
		</div>

	<?php endif; ?>

	<div class="py-5 max-[767px]:py-2"></div>

	<!-- Team Members -->
	<div class="bg-black px-10 py-8">

		<div class="text-white text-4xl max-md:text-2xl py-8">
			<?php _e( 'اعضای تیم بعد پنج', 'cyn-dm' ) ?>
		</div>

		<swiper-container space-between="12"
						  slides-per-view="auto">
			<?php for ( $i = 1; $i < 10; $i++ ) : ?>

				<?php

				$teamImage = get_field( "team_img_$i" );
				$teamName = get_field( "team_name_$i" );

				?>

				<?php if ( $teamImage || $teamName ) : ?>

					<swiper-slide class="max-w-[350px]">

						<div class="group rounded-[20px] bg-no-repeat bg-cover overflow-hidden min-h-[360px] flex flex-col justify-center items-center p-5 transition-all duration-500 relative"
							 style="background-image: url('<?php echo wp_get_attachment_image_url( $teamImage, 'full', false, [ 'class' => 'img' ] ) ?>');">

							<!-- Overlay -->
							<div
								 class="absolute inset-0 bg-slate-600/65 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-[1]">
							</div>

							<div class="hidden group-hover:block text-slate-200 text-2xl transition-all duration-500 z-[2]">
								<?php echo $teamName ?>
							</div>

						</div>

					</swiper-slide>

				<?php endif ?>

			<?php endfor ?>

		</swiper-container>

	</div>

	<div class="py-5 max-[767px]:py-8"></div>

	<!-- Quote -->
	<div class="container group cursor-pointer before:h-full before:w-full before:content-[''] before:bg-[url(var(--content-url))] border border-slate-200 rounded-[40px] min-md:p-10 text-4xl max-md:text-lg text-zinc-400 leading-[64px] transition-all duration-500 "
		 style="--content-url:<?php echo CYN_THEME_DIR . '/assets/img/Quote.png' ?>">


		<div
			 class="prose-strong:font-normal group-hover:prose-strong:text-zinc-800 group-hover:first:prose-strong:underline p-10 transition-all duration-500">
			<?php echo the_content() ?>
		</div>
	</div>

	<div class="py-10"></div>

	<!-- Portfolio -->
	<div class="container">

		<div class="text-4xl">
			<?php echo _e( 'نمونه کارهای ما', 'cyn-dm' ) ?>
		</div>

		<div class="flex flex-row justify-between pt-5 pb-3 border-b border-zinc-700">
			<div class="text-2xl text-zinc-900">سال</div>
			<div class="text-2xl text-zinc-900">محل پروژه</div>
			<div class="text-2xl text-zinc-900">نام پروژه</div>
		</div>

		<div>
			<?php if ( $portfolioMini->have_posts() ) : ?>

				<?php while ( $portfolioMini->have_posts() ) : ?>

					<?php $portfolioMini->the_post() ?>

					<?php cyn_get_card( 'portfolio-mini' ) ?>

				<?php endwhile; ?>

			<?php endif ?>
		</div>

	</div>

</section>

<?php get_footer() ?>