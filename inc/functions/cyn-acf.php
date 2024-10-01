<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}
	cyn_register_acf_service_settings();
	cyn_register_acf_portfolio_settings();

}
function cyn_register_acf_service_settings()
{
	$fields = [

		cyn_acf_add_tab('آرشیو'),
		cyn_acf_add_text('archive_txt', 'توضیحات آرشیو'),
		cyn_acf_add_taxonomy('portfolio', 'نمونه کار',CYN_PORTFOLIO_CATEGORY_TAXONOMY)

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

	];

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



