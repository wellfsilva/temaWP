if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress  
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 *  @since MyFirstTheme 1.0
 */
function myfirsttheme_setup() { 

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);


} //fim do function setup



