<!-- Archive Blog Page -->
<?php get_header() ?>

<!-- Breadcrumb -->
<?php cyn_get_component('breadcrumb') ?>

<section class="container gap-3">

	<!-- Hero -->
	<div class=""
		style="background-image: url('<?php echo get_template_directory_uri() . './assets/img/Blog-hero.png' ?>');">
	</div>

	<!-- Admin Selected Blogs -->
	<div></div>

	<!-- Blogs -->
	<div>

		<div class="flex justify-between border-b border-slate-200">

			<div class="text-4xl text-zinc-900">
				<?php _e('دسته بندی ها', 'cyn-dm') ?>
			</div>

			<!-- Blogs Category -->
			<div>
				<nav class="flex space-x-4 rtl:space-x-reverse" aria-label="Tabs">
					<?php
					$terms = get_terms([
						'taxonomy' => 'category',
						'hide_empty' => true,
					]);
					?>
					<?php foreach ($terms as $term): ?>
						<a href="<?php echo get_term_link($term); ?>"
							class="px-3 py-2 font-sm <?php echo (is_tax('category', $term->term_id)) ? 'text-zinc-900 border-slate-200' : 'text-zinc-900 border-transparent active:border-teal-600'; ?> border-b-2">
							<?php echo $term->name ?>
						</a>
					<?php endforeach; ?>
				</nav>
			</div>

		</div>

		<div class="py-5"></div>

		<!-- Blog Card -->
		<div class="space-y-3 max-xl:mx-5">

			<!-- Title -->
			<div class="text-h1 max-lg:text-h4">
				<?php _e('همه ی مقالات', 'cyn-dm') ?>
			</div>

			<div class="grid grid-cols-2 max-md:grid-cols-1 gap-3">
				<?php
				if (have_posts()):
					while (have_posts()):
						the_post();
						cyn_get_card('post', ['post-id' => get_the_ID(), 'class' => 'min-h-[400px] first:col-span-2 first:max-xl:col-span-1']);
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>

			<!-- Pagination -->
			<?php cyn_get_component('pagination') ?>

		</div>
	</div>

	<!-- Pagination -->
	<?php cyn_get_component('pagination') ?>

</section>
<?php get_footer() ?>