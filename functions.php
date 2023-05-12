<?php
//Adding css and js
function add_theme_scripts() {
    
   //Styles
    
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css',false, null,'all');
    wp_enqueue_style( 'template-style', get_template_directory_uri() . '/css/normalize.css',false, null,'all');
    wp_enqueue_style( 'icomoon-style', get_template_directory_uri() . '/icomoon/icomoon.css"',false, null,'all');
    wp_enqueue_style( 'icomoon-json', get_template_directory_uri() . '/icomoon/selection.json"',false, null,'all');
    wp_enqueue_style( 'text-style', get_template_directory_uri() . '/css/vendor.css',false, null,'all');
   
    
    //Scripts
    wp_enqueue_script( 'jquery-min', 'https://code.jquery.com/jquery-3.2.1.min.js', '', null, true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/ui-easing.js', array(), null, true );
    wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array(), null, true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), null, true );
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// thumbmail support//
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}
// This adds support for pages only:
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); 


// featur image of cpt////////

add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );

function portfolio_post_type() {
    $labels = array(
     'name'                => _x( 'portfolio', 'Post Type General Name', 'acsweb' ),
     'singular_name'       => _x( 'portfolio', 'Post Type Singular Name', 'acsweb' ),
     'menu_name'           => __( 'portfolio', 'acsweb' ),
     'parent_item_colon'   => __( 'Parent portfolio', 'acsweb' ),
     'all_items'           => __( 'All portfolio', 'acsweb' ),
     'view_item'           => __( 'View portfolio', 'acsweb' ),
     'add_new_item'        => __( 'Add New portfolio', 'acsweb' ),
     'add_new'             => __( 'New portfolio', 'acsweb' ),
     'edit_item'           => __( 'Edit portfolio', 'acsweb' ),
     'update_item'         => __( 'Update portfolio', 'acsweb' ),
     'search_items'        => __( 'Search portfolio', 'acsweb' ),
     'not_found'           => __( 'Not Found', 'acsweb' ),
     'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
    );
    $args = array(
     'label'               => __( 'portfolio', 'acsweb' ),
     
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor','thumbnail', 'excerpt', 'author', 'thumbnail', ),
     
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
   
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-format-image',
     'can_export'          => true,
     'has_archive'         => true,
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
     'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'portfolio', $args );
    register_post_type( 'portfolio', $args );
    register_taxonomy( 'portcategories', array('portfolio'), array(
        'hierarchical' => true, 
        'label' => 'Portcategories', 
        'singular_label' => 'Portcategory', 
        'rewrite' => array( 'slug' => 'portcategories', 'with_front'=> false )
        )
    );
    register_taxonomy_for_object_type( 'portcategories', 'portfolio' ); //add taxonomy

}
add_action( 'init', 'portfolio_post_type', 0 );
// actine menu......
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

//nav Menu
register_nav_menus( array(
    'Header Menu' => __( 'Header Menu', 'text_domain' ),
    'Footer Menu' => __( 'Footer Menu', 'text_domain' ),
) );

// widget
function theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer Logo',
        'id'            => 'footer_logo',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer Left',
        'id'            => 'footer_left',
        'before_widget' => '<ul> ',
        'after_widget'  => '</ul>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer Menu',
        'id'            => 'footer_menu',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer Contact',
        'id'            => 'footer_contact',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer Gallery',
        'id'            => 'footer_gallery',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer left Copyright ',
        'id'            => 'footer_left_copyright',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
    register_sidebar( array(
        'name'          => 'Footer Right Copyright ',
        'id'            => 'footer_right_copyright',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
?>

<?php
add_action( 'wp_footer', 'redirect_cf7' );

function redirect_cf7() { ?>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            _location = '<?php echo esc_url( home_url( '/thankyou-page' ) ); ?>';
            window.open(_location, "MsgWindow");
        }, false );
    </script>
<?php }?>

		
