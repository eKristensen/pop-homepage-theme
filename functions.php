<?php
// Extension of sydney theme for use by the website for P. O. Pedersen Kollegiet. For more detail see style.css


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function pop_wp_head(){
    // Close PHP tags
    // Note 2019-04-24: Maybe this metatag doesn't make much sense anymore
    ?>
        <meta name="robots" content="noodp"/>
    <?php //Open PHP tags
}
add_action('wp_head', 'pop_wp_head');

/* Add External Sitemap to Yoast Sitemap Index
 * Credit: Paul https://wordpress.org/support/users/paulmighty/
 * Last Tested: Aug 25 2017 using Yoast SEO 5.3.2 on WordPress 4.8.1
 *********
 */
add_filter( 'wpseo_sitemap_index', 'add_sitemap_custom_items' );
function add_sitemap_custom_items() {

$sitemap_custom_items = '';

if ($_SERVER['REQUEST_URI'] != "/en/sitemap_index.xml") {

   $sitemap_custom_items = '
<sitemap>
<loc>https://pop.k-net.dk/en/page-sitemap.xml</loc>
</sitemap>';

}

return $sitemap_custom_items;
}

// Corona widget
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );


/**
 * Clear cache on everything when a post is saved
 */
   function clear_cache_save_post($postid)
   {
        wp_cache_clear_cache();
   }

  add_action( 'save_post', 'clear_cache_save_post' );



?>
