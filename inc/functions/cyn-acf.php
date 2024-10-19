<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}
	cyn_register_acf_home_settings();
	cyn_register_acf_service_settings();
	cyn_register_acf_portfolio_settings();
	cyn_register_acf_about_settings();
}
function cyn_register_acf_home_settings()
{
	$fields = [

		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('front_hero_bg', 'پس زمینه هیرو'),
		cyn_acf_add_image('front_hero_bg_number', 'پس زمینه عدد هیرو'),
		cyn_acf_add_tab('پاپ آپ ویدئو'),
		cyn_acf_add_file('video_cover', 'کاور ویدئو'),
		cyn_acf_add_file('video_teaser', 'ویدئو'),
		cyn_acf_add_tab('درباره ما'),
		cyn_acf_add_text('about_title', 'تایتل درباره ما'),
		cyn_acf_add_text('about_text', 'متن درباره ما'),
		cyn_acf_add_url('aboutـusـurl', 'لینک دکمه درباره ما'),
		cyn_acf_add_tab('نمونه کار'),
		cyn_acf_add_post_object('portfolios', 'انتخاب نمونه کارها', CYN_PORTFOLIO_POST_TYPE, '', 1),
		cyn_acf_add_tab('سوالات متداول'),
		cyn_acf_add_image('faq_img', 'تصویر سوالات متداول'),
		cyn_acf_add_post_object('faqs', 'انتخاب سوال متداول', CYN_FAQ_POST_TYPE, '', 1),
		cyn_acf_add_tab('اعضای تیم'),
		cyn_acf_add_text('team_text', 'متن اعضای تیم'),


	];


	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/front-page.php',
			],
		],
	];

	cyn_register_acf_group('تنظیمات خدمات', $fields, $location);
}
function cyn_register_acf_service_settings()
{
	$fields = [

		cyn_acf_add_tab('آرشیو'),
		cyn_acf_add_text('archive_txt', 'توضیحات آرشیو'),
		cyn_acf_add_taxonomy('portfolio', 'نمونه کار', CYN_PORTFOLIO_CATEGORY_TAXONOMY)

	];

	array_push($fields, cyn_acf_add_tab('گالری'));

	for ($i = 1; $i < 10; $i++) {
		array_push($fields, cyn_acf_add_image("img_$i", "تصویر $i"));
	}

	array_push($fields, cyn_acf_add_tab('مراحل کار'));

	array_push($fields, cyn_acf_add_text('main_title', 'تیتر اصلی'));

	for ($i = 1; $i <= 3; $i++) {
		array_push($fields, cyn_acf_add_text("step_title_$i", "تیتر $i"));
		array_push($fields, cyn_acf_add_text("step_text_$i", "متن $i"));
		array_push($fields, cyn_acf_add_image("step_image_$i", "تصویر $i"));
	}

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => CYN_SERVICE_POST_TYPE,
			],
		],
	];

	cyn_register_acf_group('تنظیمات خدمات', $fields, $location);
}
function cyn_register_acf_portfolio_settings()
{
	$fields = [

		cyn_acf_add_tab('مکان'),
		cyn_acf_add_text('portfolio_location', 'مکان پروڑه', 0, 50),
		cyn_acf_add_tab('شماره'),
		cyn_acf_add_text('portfolio_number', 'شماره پروڑه', 0, 50),
		cyn_acf_add_tab('تاریخ'),
		cyn_acf_add_text('portfolio_year', 'سال پروڑه', 0, 50),

	];

	array_push($fields, cyn_acf_add_tab('نقشه راه'));

	for ($i = 1; $i <= 3; $i++) {
		array_push($fields, cyn_acf_add_image("road_img_$i", "تصویر $i"));
		array_push($fields, cyn_acf_add_text("road_title_$i", "سربرگ $i", 0, 30));
		array_push($fields, cyn_acf_add_text("road_text_$i", "متن $i", 0, 30));
	}

	array_push($fields, cyn_acf_add_tab('تصاویر پروژه'));

	for ($i = 1; $i <= 8; $i++) {
		array_push($fields, cyn_acf_add_image("project_img_$i", "تصویر $i"));
	}

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => CYN_PORTFOLIO_POST_TYPE,
			],
		],
	];

	cyn_register_acf_group('تنظیمات نمونه کار', $fields, $location);
}
function cyn_register_acf_about_settings()
{
	$fields = [

		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_text('hero_title', 'سربرگ هیرو'),
		cyn_acf_add_text('hero_txt', 'متن هیرو'),

	];

	array_push($fields, cyn_acf_add_tab('اعضای تیم'));

	for ($i = 1; $i < 10; $i++) {
		array_push($fields, cyn_acf_add_image("team_img_$i", "تصویر $i"));
		array_push($fields, cyn_acf_add_text("team_name_$i", "نام $i", 0, 20));
	}

	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about.php',
			],
		],
	];

	cyn_register_acf_group('تنظیمات نمونه کار', $fields, $location);
}



