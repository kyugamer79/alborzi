<?php

if (!class_exists('cyn_customize')) {
	class cyn_customize
	{
		function __construct()
		{
			add_action('customize_register', [$this, 'cyn_basic_settings']);
		}

		public function cyn_basic_settings($wp_customize)
		{

			$this->cyn_register_panel_header($wp_customize);
			$this->cyn_register_panel_footer($wp_customize);
		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control($wp_customize, $section, $type, $id, $label, $description = '')
		{
			$wp_customize->add_setting(
				$id,
				['type' => 'option']
			);


			if ($type == "file") {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ($type != 'file') {
				$wp_customize->add_control(
					$id,
					[
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_header($wp_customize)
		{

			$wp_customize->add_panel(
				'cyn_header_panel',
				[
					'title' => 'تنظیمات هدر',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'desktop_header_section',
				[
					'title' => 'هدر',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_header_section', 'text', 'desktop_header_phone', ' شماره تماس');

			$wp_customize->add_section(
				'desktop_menu_section',
				[
					'title' => 'منو دسکتاپ',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);
			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'up_section_title', 'تیتر سمت چپ بالا');

			for ($i = 1; $i <= 3; $i++) {
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "title_$i", "تیتر $i");
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "title_link_$i", "لینک تیتر $i");
			}

			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'down_section_title', 'تیتر سمت چپ پایین');
			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'desktop_menu_phone', ' شماره تماس');
			$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', 'desktop_menu_mail', 'ایمیل');
			for ($i = 1; $i <= 4; $i++) {
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'file', "icon_img_$i", "آیکون شبکه اجتماعی $i");
				$this->cyn_add_control($wp_customize, 'desktop_menu_section', 'text', "icon_text_$i", "لینک شبکه اجتماعی $i");
			}

			$wp_customize->add_section(
				'blog_hero_section',
				[
					'title' => 'هدر بلاگ',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);
			$this->cyn_add_control($wp_customize, 'blog_hero_section', 'file', "blog_img", "تصویر هیرو بلاگ");
			$this->cyn_add_control($wp_customize, 'blog_hero_section', 'text', 'blog_title', 'سربرگ بلاگ');

			$wp_customize->add_section(
				'portfolio_hero_section',
				[
					'title' => 'هدر نمونه کار',
					'priority' => 1,
					'panel' => 'cyn_header_panel'
				]
			);
			$this->cyn_add_control($wp_customize, 'portfolio_hero_section', 'file', "portfolio_img", "وکتور هیرو نمونه کار");
		}

		private function cyn_register_panel_footer($wp_customize)
		{

			$wp_customize->add_panel(
				'cyn_footer_panel',
				[
					'title' => 'تنظیمات فوتر',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'desktop_footer_section',
				[
					'title' => 'فوتر',
					'priority' => 1,
					'panel' => 'cyn_footer_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_footer_section', 'text', 'footer_title', 'تیتر فوتر');

			$wp_customize->add_section(
				'desktop_footer_col_4',
				[
					'title' => 'تنظیمات ستون ۴',
					'priority' => 2,
					'panel' => 'cyn_footer_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_footer_col_4', 'text', 'footer_title_phone', 'تیتر شماره');

			$wp_customize->add_section(
				'desktop_footer_col_5',
				[
					'title' => 'تنظیمات ستون ۵',
					'priority' => 2,
					'panel' => 'cyn_footer_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_footer_col_5', 'text', 'footer_title_email', 'تیتر ایمیل');


			$wp_customize->add_section(
				'desktop_footer_col_6',
				[
					'title' => 'تنظیمات ستون ۶',
					'priority' => 2,
					'panel' => 'cyn_footer_panel'
				]
			);

			$this->cyn_add_control($wp_customize, 'desktop_footer_col_6', 'text', 'footer_address_title', 'تیتر آدرس');
			$this->cyn_add_control($wp_customize, 'desktop_footer_col_6', 'text', 'footer_address', 'آدرس');

		}
	}
}