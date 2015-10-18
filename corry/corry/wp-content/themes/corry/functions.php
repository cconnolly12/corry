<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'food-menu' => __( 'Food Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/** Thumnails/Featured Image **/
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


//walker nav
include 'bootstrap-walker.php';

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Open Table sidebar',
    'id'            => 'open_table_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function sofa_scnf_add_meta_boxes() {
	add_meta_box(
		'ninja_forms_selector',
		__( 'Append A Ninja Form', 'sofa-scnf'),
		'ninja_forms_inner_custom_box',
		'sc_event',
		'side',
		'low'
	);
}

add_action('add_meta_boxes', 'sofa_scnf_add_meta_boxes');


function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img { 
               width: 100% !important; 
               height: auto !important; 
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');

/**
 * split content at the more tag and return an array
 *
 */
function split_content() {
    global $more;
    $more = true;
    $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
    for($c = 0, $csize = count($content); $c < $csize; $c++) {
        $content[$c] = apply_filters('the_content', $content[$c]);
    }
    return $content;
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

?>