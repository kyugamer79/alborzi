<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}
	cyn_register_acf_company_settings();
	cyn_register_acf_service_settings();

}

function cyn_register_acf_company_settings()
{
	$fields = [
		cyn_acf_add_number('established_year', 'Established Year'),
		cyn_acf_add_text('country', 'country'),
		cyn_acf_add_text('location', 'location'),
		cyn_acf_add_text('phone', 'phone'),
		cyn_acf_add_image('flag', 'Flag'),
		cyn_acf_add_image('logo', 'Logo'),
		cyn_acf_add_options('verified_type', 'Verified Type', ['star-supplier', 'supplier']),
		cyn_acf_add_url('website', 'website'),
		cyn_acf_add_color('color', 'Color'),

	];
	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			],
		],
	];

	cyn_register_acf_group('Company Settings', $fields, $location);
}
function cyn_register_acf_service_settings()
{
	$fields = [

		cyn_acf_add_tab('آرشیو'),
		cyn_acf_add_text('archive_txt', 'توضیحات آرشیو')

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



