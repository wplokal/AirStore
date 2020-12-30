<?php

/**
 * Load carbonfield
 * 2020-11-25 09:14:38
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'crb_load', 10);
function crb_load()
{
	require_once('vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}


/**
 *  Load app
 *	2020-11-25 09:14:29
 */
require get_template_directory() . '/app/loads.php';


if (!function_exists('cifor_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cifor_theme_setup()
	{




		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cifor-theme, use a find and replace
		 * to change 'cifor-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('cifor-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-top' => esc_html__('Top', 'cifor-theme'),
			'menu-main' => esc_html__('Main', 'cifor-theme'),
			'menu-subsite' => esc_html__('Subsite', 'cifor-theme'),
			'menu-footer' => esc_html__('Footer', 'cifor-theme'),
			'menu-sidebar' => esc_html__('Sidebar', 'cifor-theme'),
			'menu-footer-library' => esc_html__('Footer library', 'cifor-theme'),
			'menu-footer-ourwork' => esc_html__('Footer ourwork', 'cifor-theme'),
			'menu-footer-research' => esc_html__('Footer research', 'cifor-theme'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));

		// Adding support for core block visual styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for custom color scheme.
		add_theme_support('editor-color-palette', array(
			array(
				'name' => __('Strong Blue', 'cifor-theme'),
				'slug' => 'strong-blue',
				'color' => '#0073aa',
			),
			array(
				'name' => __('Lighter Blue', 'cifor-theme'),
				'slug' => 'lighter-blue',
				'color' => '#229fd8',
			),
			array(
				'name' => __('Very Light Gray', 'cifor-theme'),
				'slug' => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name' => __('Very Dark Gray', 'cifor-theme'),
				'slug' => 'very-dark-gray',
				'color' => '#444',
			),
		));

		add_post_type_support( 'page', 'excerpt' );
		// Add support for responsive embeds.
		add_theme_support('responsive-embeds');
		// Add support for editor styles.
		add_theme_support('editor-styles');
		// Enqueue editor styles.
		add_editor_style('assets/css/style-editor.css');
	}
endif;
add_action('after_setup_theme', 'cifor_theme_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cifor_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cifor_theme_content_width', 800);
}

add_action('after_setup_theme', 'cifor_theme_content_width', 0);
