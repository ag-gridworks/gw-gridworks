<?php
/**
 * Gridworks Funções e definições
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gridworks
 */

if ( ! function_exists( 'gridworks_setup' ) ) :

function gridworks_setup() {
	add_theme_support('menus');

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gridworks' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'gridworks_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gridworks_setup' );

// Definir caminho base

define('INC', get_template_directory() . '/inc/');

// Adiciona Estilos e Scripts

function gridworks_scripts() {

	// CSS
	wp_enqueue_style( 'gridworks-plugins', get_template_directory_uri() . '/assets/css/vendors/plugins.css' );
	wp_enqueue_style( 'gridworks-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'gridworks-custom', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/components/font-awesome/css/font-awesome.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/components/wow/css/libs/animate.css' );
	// JS
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/components/wow/dist/wow.js', array(), false , true );
	wp_enqueue_script( 'gridworks-script', get_template_directory_uri() . '/js/main.js', array(), false , true );
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/assets/components/scrollreveal/dist/scrollreveal.js', array(), false , true );
}

add_action( 'wp_enqueue_scripts', 'gridworks_scripts' );

// Widgets

function gridworks_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gridworks' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gridworks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gridworks_widgets_init' );


add_action('init', 'type_post_portfolio');
 
    function type_post_portfolio() { 
        $labels = array(
            'name' => _x('Portfolio', 'post type general name'),
            'singular_name' => _x('Portfolio', 'post type singular name'),
            'add_new' => _x('Adicionar Novo', 'Novo item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Itens'),
            'not_found' =>  __('Nenhum registro encontrado'),
            'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Porfolio'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,           
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,    
            'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'trackbacks')
          );
 
register_post_type( 'portfolio' , $args );
flush_rewrite_rules();
}


register_taxonomy(
"categorias", 
      "portfolio", 
      array(            
        "label" => "Categorias", 
            "singular_label" => "Categoria", 
            "rewrite" => true,
            "hierarchical" => true
)
);

register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gridworks' ),
	) );

// create custom plugin settings menu
add_action('admin_menu', 'gridworks_social');

function gridworks_social() {

	//create new top-level menu
	add_menu_page('Redes Sociais', 'Redes Sociais', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_gridworks_social' );
}


function register_gridworks_social() {
	//register our settings
	register_setting( 'gridworks-social-settings', 'facebook' );
	register_setting( 'gridworks-social-settings', 'twitter' );
	register_setting( 'gridworks-social-settings', 'instagram' );
}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Redes Sociais</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'gridworks-social-settings' ); ?>
    <?php do_settings_sections( 'gridworks-social-settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Facebook</th>
        <td><input type="text" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Twitter</th>
        <td><input type="text" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Instagram</th>
        <td><input type="text" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>