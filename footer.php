<?php $render_template = $args['render_template'] ?? true ?>

</main>
<?php if ($render_template): ?>

	<footer>
		<?php cyn_get_part('/footer/desktop-footer') ?>
		<?php cyn_get_part('/footer/mobile-footer') ?>
	</footer>
<?php endif; ?>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>

</body>

</html>