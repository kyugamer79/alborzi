<!-- Archive Blog Page -->
<?php get_header(); ?>

<!-- Breadcrumb -->
<?php cyn_get_component('breadcrumb'); ?>

<section class="container gap-3">

	<!-- Hero -->
	<div class="h-[515px] bg-no-repeat bg-cover overflow-hidden w-full flex justify-end p-5"
		style="background-image: url('<?php echo esc_url(get_option('blog_img')); ?>');">
		<div>
			<div class="text-[#A3A3A3] text-7xl w-[550px] leading-[100px] max-md:text-5xl max-md:w-full">
				<?php echo esc_html(get_option('blog_title')); ?>
			</div>

			<div class="flex justify-end items-center gap-1 cursor-pointer max-md:flex-col" id="button">
				<div>
					<a href="#blog-items" class="text-base text-zinc-500">
						<?php _e('مشاهده مقالات', 'cyn-dm'); ?>
					</a>
				</div>

				<div class="border border-slate-200 rounded-full p-1">
					<a href="#blog-items" class="flex items-center">
						<span>
							<svg class="icon rotate-[136deg] w-8 h-8">
								<use href="#icon-Arrow-17"></use>
							</svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Admin Selected Blogs -->
	<div></div>

	<!-- Blogs -->
	<div id="blog-items" class="scroll-smooth">

		<div class="hidden md:flex justify-between border-b border-slate-200 pb-3">

			<div class="text-4xl text-zinc-900">
				<?php _e('دسته بندی ها', 'cyn-dm'); ?>
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
						<a href="<?php echo esc_url(get_term_link($term)); ?>"
							class="px-3 py-2 text-sm <?php echo (is_tax('category', $term->term_id)) ? 'text-zinc-900 border-slate-200' : 'text-zinc-900 border-transparent'; ?> border-b-2 active:border-teal-600">
							<?php echo esc_html($term->name); ?>
						</a>
					<?php endforeach; ?>
				</nav>
			</div>

		</div>

		<div class="py-5"></div>

		<!-- Blog Card -->
		<div class="space-y-3 max-xl:mx-5">

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
			<?php cyn_get_component('pagination'); ?>

		</div>
	</div>

</section>

<?php get_footer(); ?>