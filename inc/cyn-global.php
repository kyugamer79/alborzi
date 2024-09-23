<?php
//all names in theme

//acf
defined('CYN_ACF_PATH') || define('CYN_ACF_PATH', get_stylesheet_directory() . '/inc/acf/');
defined('CYN_ACF_URL') || define('CYN_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/');


//Post types
define('CYN_SERVICE_POST_TYPE', 'service');
define('CYN_PORTFOLIO_POST_TYPE', 'portfolio');


//Menu
define('CYN_DESKTOP_MENU', 'desktop_header');
define('CYN_MOBILE_MENU', 'mobile_header');
define('CYN_FOOTER_MENU_1', 'footer_menu_1');
define('CYN_FOOTER_MENU_2', 'footer_menu_2');
define('CYN_FOOTER_MOBILE_MENU', 'footer_mobile_menu');


//Taxonomies
define('CYN_SERVICE_CATEGORY_TAXONOMY', 'service-cat');
define('CYN_PORTFOLIO_CATEGORY_TAXONOMY', 'portfolio-cat');

// Pages
define( 'CYN_FRONT_PAGE', 'front-page' );
define( 'CYN_ABOUT_US_PAGE', 'about-us' );
define( 'CYN_CONTACT_US_PAGE', 'contact-us' );
