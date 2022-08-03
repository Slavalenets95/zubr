<?php
/**
 * onlinegroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package onlinegroup
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function onlinegroup_scripts() {
	wp_enqueue_style( 'onlinegroup_reset_styles', get_template_directory_uri() . '/assets/css/reset.css', _S_VERSION );
	wp_enqueue_style( 'slick_theme_styles', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick-theme.css', _S_VERSION );
	wp_enqueue_style( 'slick_styles', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.css', _S_VERSION );
	wp_enqueue_style( 'onlinegroup_styles', get_template_directory_uri() . '/assets/css/styles.css', _S_VERSION );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css', _S_VERSION );

	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carousel_js', get_template_directory_uri() . '/assets/libs/scrollingCarousel/scrollingCarousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'onlinegroup_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'onlinegroup_scripts' );


/**
 * Меню
 */

add_action('after_setup_theme', function(){
	show_admin_bar( false );
	add_theme_support('post-thumbnails');
	add_theme_support( 'menus' );

	register_nav_menus( array(
	  'header_menu' => __( 'Меню в шапке', 'header_menu' ),
	  'footer_menu' => __( 'Меню в подвале', 'footer_menu' ), 
	) );

  });

/**
 * Custom post types
 */
function remove_page_from_query_string($query_string)
{ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }      
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'projects', [
		'label'  => 'Проекты',
		'labels' => [
			'name'               => 'Проекты', // основное название для типа записи
			'singular_name'      => 'Проект', // название для одной записи этого типа
			'add_new'            => 'Добавить проект', // для добавления новой записи
			'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
			'new_item'           => 'Новый проект', // текст новой записи
			'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
			'search_items'       => 'Искать проект', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
		],
		'description'         => '',
		'public'              => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail',  ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	
}

/**
 * SVG FIX
 */

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

/**
 * Polylang Strings
 */
add_action('init', 'polylang_strings' );
 
function polylang_strings() {
 
	if( ! function_exists( 'pll_register_string' ) ) {
		return;
	}
 
	pll_register_string(
		'contact us', // название строки
		'contact us', // сама строка
		'Header', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
  	pll_register_string(
		'work time', // название строки
		'work time', // сама строка
		'Header', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
  	pll_register_string(
		'day off', // название строки
		'day off', // сама строка
		'Header', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
  	pll_register_string(
		'company name', // название строки
		'company name', // сама строка
		'Footer', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
  	pll_register_string(
		'write to us', // название строки
		'write to us', // сама строка
		'Perspective Page', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
  	pll_register_string(
		'plug', // название строки
		'plug', // сама строка
		'Blog Archive Page', // категория для удобства
		false // будут ли тут переносы строк в тексте или нет
	);
}

function svg_shortcode() {
	return '<svg style="width: 30px; height: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3333 3333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M1667 0c920 0 1667 746 1667 1667 0 920-746 1667-1667 1667C747 3334 0 2588 0 1667 0 747 746 0 1667 0zm700 952c-175-175-407-271-655-271-510 0-925 415-925 925 0 163 43 322 124 462l-131 480 491-129c135 74 287 113 442 113 510 0 925-415 925-925 0-247-96-480-271-655zm-654 1424c-138 0-274-37-392-107l-28-17-291 76 78-284-18-29c-77-122-118-264-118-409 0-424 345-769 770-769 205 0 399 80 544 225 145 146 225 338 225 544 0 424-345 770-769 770zm422-576c-23-12-137-67-158-75s-37-12-52 12c-15 23-60 75-73 91-14 15-27 18-50 6s-98-36-186-115c-69-61-115-137-129-160s-2-36 10-47c11-10 23-27 35-41s15-23 23-39c8-15 4-29-2-41s-52-125-71-172c-19-45-38-39-52-40s-29-1-44-1-40 6-62 29c-21 23-81 79-81 193s83 224 94 239c12 15 163 249 395 349 55 24 98 38 132 49 55 17 106 15 146 9 44-7 137-56 156-110s19-100 14-110-21-16-44-28z"></path></svg>';
}

add_shortcode('svg', 'svg_shortcode');
