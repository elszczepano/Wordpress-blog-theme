<?php if(!defined('THEME_DIR'))
		{
		define('THEME_DIR', get_theme_root().'/'.get_template().'/');}
		if(!defined('THEME_URL'))
		{
		define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');}

//require_once THEME_DIR.'libs/posttypes.php';
require_once THEME_DIR.'libs/utils.php';

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );

function wpb_rand_posts() {
$args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 5,
    );
$rand = new WP_Query( $args );
if ( $rand->have_posts() ) {
$string .= '<div>';
    while ( $rand->have_posts() ) {
        $rand->the_post();
        $string .= '<div class="sidebar-post"><div class="sidebar-thumbnail" style="background-image:url('. get_the_post_thumbnail_url().')"></div><div class="sidebar-desc"><a href="'. get_permalink() .'">'.get_the_title() .'</a></div></div>';
    }
    $string .= '</div>';
    wp_reset_postdata();
} else {
$string .= 'Nie znaleziono wpisów.';
}
return $string;
}
add_shortcode('wpb-random-posts','wpb_rand_posts');
add_filter('widget_text', 'do_shortcode');
add_filter('jpeg_quality', function(){return 100;});
add_filter( 'wp_editor_set_quality', function(){return 100;});

//numeric pagination
function numeric_posts_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
/** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
/** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
}
echo '<div class="navigation"><ul>' . "\n";
/** Previous Post Link */
    if ( get_previous_posts_link() )
			printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
/** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
}
/** Link to current page, plus 2 pages in either direction if necessary */
sort( $links );
foreach ( (array) $links as $link ) {
  $class = $paged == $link ? ' class="active"' : '';
  printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
/** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
}
/** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
