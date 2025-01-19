<?php
define('CYN_THEME_DIR',get_stylesheet_directory_uri());
//all names in theme

//acf
defined('CYN_ACF_PATH') || define('CYN_ACF_PATH', get_stylesheet_directory() . '/inc/acf/');
defined('CYN_ACF_URL') || define('CYN_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/');


//Post types
define('CYN_SERVICE_POST_TYPE', 'service');
define('CYN_PORTFOLIO_POST_TYPE', 'portfolio');
define('CYN_FAQ_POST_TYPE', 'faq');
define('CYN_FORM_POST_TYPE', 'form');


//Menu
define('CYN_DESKTOP_MENU', 'desktop_header');
define('CYN_MOBILE_MENU', 'mobile_header');
define('CYN_FOOTER_MENU_1', 'footer_menu_1');
define('CYN_FOOTER_MENU_2', 'footer_menu_2');
define('CYN_FOOTER_MOBILE_MENU', 'footer_mobile_menu');


//Taxonomies
define('CYN_PORTFOLIO_CATEGORY_TAXONOMY', 'portfolio-cat');
define('CYN_POST_CATEGORY_TAXONOMY', 'special-posts');

// Pages
define( 'CYN_FRONT_PAGE', 'front-page' );
define( 'CYN_ABOUT_US_PAGE', 'about-us' );
define( 'CYN_CONTACT_US_PAGE', 'contact-us' );
