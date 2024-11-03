<?php $render_template = $args['render_template'] ?? true ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('relative') ?>>
    <?php wp_body_open() ?>

    <div id="customCursor"
	class="hidden fixed -translate-x-[50%] -translate-y-[50%] size-40 bg-cover bg-center rounded-full pointer-events-none z-50 transform transition-transform duration-100">
    </div>


    <div data-name="cyan-php-files">
        <?php get_template_part('/assets/icons/icons') ?>
    </div>

    <?php if ($render_template): ?>
        <header>
            <?php cyn_get_part('/header/desktop-header') ?>
            <?php cyn_get_part('/header/mobile-header') ?>
            <?php cyn_get_part('/header/desktop-menu') ?>
            <?php cyn_get_part('/header/mobile-menu') ?>
        </header>
    <?php endif; ?>
    <main class="min-h-screen">