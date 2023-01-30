<?php
/**
 * Fonctions qui ne sont pas appelées à partir des templates 
 * et qui ne peuvent pas être regroupées dans un autre fichier.
 */

function montheme_setup() {
  
  /**
   * add_theme_support() enregistre la prise en charge du thème pour des fonctionnalités données.
   * @link https://developer.wordpress.org/reference/functions/add_theme_support/
   */

  // permet aux plugins et aux thèmes de gérer la balise de titre du document.
  add_theme_support( 'title-tag' );

  // permet la prise en charge des images mises en avant.
  add_theme_support( 'post-thumbnails' );

  // permet de rendre le code valide pour HTML5.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  /**
   * permet la prise en charge d'un logo personnalisé.
   * @link https://developer.wordpress.org/themes/functionality/custom-logo/
   */
  add_theme_support( 'custom-logo', array(
    'height'      => 1532,
    'width'       => 1532,
    'flex-width'  => true,
    'flex-height' => true,
  ) );

  // Désactive les tailles de police et couleurs pour Gutenberg
  add_theme_support( 'disable-custom-font-sizes' );
  add_theme_support( 'disable-custom-colors' );
  add_theme_support( 'editor-color-palette' );

  /**
   * Enregistre la prise en charge de certaines fonctionnalités pour un type de publication.
   * @link https://developer.wordpress.org/reference/functions/add_post_type_support/
   */
  // permet la prise en charge des extraits.
  add_post_type_support( 'page', 'excerpt' );

}

/**
 * File d'attente des scripts et des styles.
 */
function montheme_scripts_styles() {
	/**
	 * wp_enqueue_style() et wp_enqueue_script() permettent de charger respectivement une feuille de style et un script. 
	 * Cette action s'effectue depuis la fonction wp_head() ou wp_footer()
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
	 */

	 wp_enqueue_style( 
    'style',
    get_template_directory_uri() . '/dist/css/main.css', 
    array(), 
    '1.0'
);

wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/script.js', array(), '', true );

}

/**
 * Enregistre les emplacements du menu de navigation pour un thème.
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function register_my_menu(){
  register_nav_menus( array(
  'header-menu' => __( 'Menu'),
  'footer-menu' => __( 'Footer'),
  ) );
  }

  require_once get_template_directory() . '/inc/plugins/acf.php';

  