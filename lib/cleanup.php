<?php
/**
 * Add and remove body_class() classes
 */
function emarket_body_class($classes) {
	$page_metabox_hometemp	= get_post_meta( get_the_ID(), 'page_home_template', true );
	$emarket_direction 		= emarket_options()->getCpanelValue( 'direction' );
	$emarket_light_layout 		= emarket_options()->getCpanelValue( 'layout_light' );
	$single_sticky 		= emarket_options()->getCpanelValue( 'single_sticky' );
	$menu_event		  		= emarket_options()->getCpanelValue( 'menu_event' );
	$disable_search 		=  emarket_options()->getCpanelValue( 'disable_search' );
	$bg_shop_full 		=  emarket_options()->getCpanelValue( 'bg_shop_full' );
	$emarket_box_layout 	= emarket_options()->getCpanelValue( 'layout_home' );
	$product_single_style 	= emarket_options()->getCpanelValue( 'product_single_style' );
	$product_modern_style 	= emarket_options()->getCpanelValue( 'shop_modern' );
	$product_filter_off_canvas 	= emarket_options()->getCpanelValue( 'product_filter_off_canvas' );
	$product_drawer_filter 	= emarket_options()->getCpanelValue( 'product_drawer_filter' );
	$product_single_full_bg = emarket_options()->getCpanelValue('product_single_full_bg');
	$sw_demo  = get_option( 'sw_mdemo' );
	if( $emarket_direction == 'rtl' ){
		$classes[] = 'rtl';
	}
	
	/* WC Vendor class */
	if( class_exists( 'WC_Vendors' ) ) {
		$classes[] = 'wc-vendor-page';
		if( WCV_Vendors::is_vendor_page() ) {
			$classes[] = 'wc-vendor-listing';
		}
	}
	
	if( $menu_event == 'click' ){
		$classes[] = 'menu-click';
	}
	
	if( $sw_demo == 1 ){
		$classes[] = 'mobile-demo';
	}
	
	if( $single_sticky == 1 ){
		$classes[] = 'single-bottom';
	}
	if( emarket_mobile_check() ){
		$classes[] = 'mobile-layout';
	}
	if( $disable_search  ){
		$classes[] = 'disable-search';
	}
	if( $bg_shop_full  ){
		$classes[] = 'bg-shop-full';
	}
	if( $emarket_box_layout == 'boxed' ){
		$classes[] = 'boxed-layout';
	}
	if( $emarket_box_layout == 'wide' ){
		$classes[] = 'wide-1650';
	}
	if( $emarket_box_layout == 'home-style17' ){
		$classes[] = 'home-style17';
	}
	if( $emarket_light_layout == 'light' ){
		$classes[] = 'light-style';
	}
	if( $page_metabox_hometemp != '' ){
		$classes[] = $page_metabox_hometemp;
	}

	// Add post/page slug
	if (is_single() || is_page() && !is_front_page()) {
		$classes[] = basename(get_permalink());
	}
	
	// Remove unnecessary classes
	$home_id_class = 'page-id-' . get_option('page_on_front');
	$remove_classes = array(
			'page-template-default',
			$home_id_class
	);
	
	if( is_home() || is_front_page() ){
		$remove_classes[] = 'woocommerce';
		$remove_classes[] = 'woocommerce-page';
		$remove_classes[] = 'woocommerce-wishlist';
	}
	
	if( is_singular( 'product' ) ){
		$classes[] = 'single-product-' . $product_single_style;
	}
	
	if( is_singular( 'product' ) && emarket_sidebar_product() == 'full' && $product_single_full_bg ){
		$classes[] = 'product-full-bg';
	}
	
	if( ( is_shop() && $product_modern_style ) || ( is_product_category() && $product_modern_style ) ){
		$classes[] = 'page-shop-modern';
	}
	
	if( ( is_shop() && $product_drawer_filter && emarket_options() -> getCpanelValue('sidebar_product') == 'left' ) || ( is_product_category() && $product_drawer_filter && emarket_options() -> getCpanelValue('sidebar_product') == 'left' ) ){
		$classes[] = 'page-filter-drawer';
	}
	
	if( ( is_shop() && $product_filter_off_canvas ) || ( is_product_category() && $product_filter_off_canvas ) ){
		$classes[] = 'page-shop-filter-canvas';
	}
	
	$classes = array_diff($classes, $remove_classes);
	return $classes;
}
add_filter('body_class', 'emarket_body_class');


/**
 * Wrap embedded media as suggested by Readability
 *
 * @link https://gist.github.com/965956
 * @link http://www.readability.com/publishers/guidelines#publisher
 */
function emarket_embed_wrap($cache, $url, $attr = '', $post_ID = '') {
	$cache = preg_replace('/width="(.*?)?"/', 'width="100%"', $cache);
	return '<div class="entry-content-asset">' . $cache . '</div>';
}
add_filter('embed_oembed_html', 'emarket_embed_wrap', 10, 4);
add_filter('embed_googlevideo', 'emarket_embed_wrap', 10, 2);

/**
 * Add class="thumbnail" to attachment items
 */
function emarket_attachment_link_class($html) {
	$postid = get_the_ID();
	$html = str_replace('<a', '<a class="thumbnail"', $html);
	return $html;
}
add_filter('wp_get_attachment_link', 'emarket_attachment_link_class', 10, 1);

/**
 * Add Bootstrap thumbnail styling to images with captions
 * Use <figure> and <figcaption>
 *
 * @link http://justintadlock.com/archives/2011/07/01/captions-in-wordpress
 */
function emarket_caption($output, $attr, $content) {
	if (is_feed()) {
		return $output;
	}

	$defaults = array(
			'id'      => '',
			'align'   => 'alignnone',
			'width'   => '',
			'caption' => ''
	);

	$attr = shortcode_atts($defaults, $attr);

	// If the width is less than 1 or there is no caption, return the content wrapped between the [caption] tags
	if ($attr['width'] < 1 || empty($attr['caption'])) {
		return $content;
	}

	// Set up the attributes for the caption <figure>
	$attributes  = (!empty($attr['id']) ? ' id="' . esc_attr($attr['id']) . '"' : '' );
	$attributes .= ' class="thumbnail wp-caption ' . esc_attr($attr['align']) . '"';
	$attributes .= ' style="width: ' . esc_attr($attr['width']) . 'px"';

	$output  = '<figure' . $attributes .'>';
	$output .= do_shortcode($content);
	$output .= '<figcaption class="caption wp-caption-text">' . $attr['caption'] . '</figcaption>';
	$output .= '</figure>';

	return $output;
}
add_filter('img_caption_shortcode', 'emarket_caption', 10, 3);


/**
 * Clean up the_excerpt()
 */
function emarket_excerpt_length($length) {
	return 40;
}

function emarket_excerpt_more($more) {
	//return;
	return ' &hellip; <a href="' . get_permalink() . '">' . esc_html__('Readmore', 'emarket') . '</a>';
}
add_filter('excerpt_length', 'emarket_excerpt_length');
add_filter('excerpt_more',   'emarket_excerpt_more');

/**
 * Remove unnecessary self-closing tags
 */
function emarket_remove_self_closing_tags($input) {
  return str_replace(' />', '>', $input);
}
add_filter('get_avatar',          'emarket_remove_self_closing_tags'); // <img />
add_filter('comment_id_fields',   'emarket_remove_self_closing_tags'); // <input />
add_filter('post_thumbnail_html', 'emarket_remove_self_closing_tags'); // <img />


/**
 * Allow more tags in TinyMCE including <iframe> and <script>
 */
function emarket_change_mce_options($options) {
	$ext = 'pre[id|name|class|style],iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src],script[charset|defer|language|src|type]';

	if (isset($initArray['extended_valid_elements'])) {
		$options['extended_valid_elements'] .= ',' . $ext;
	} else {
		$options['extended_valid_elements'] = $ext;
	}

	return $options;
}
add_filter('tiny_mce_before_init', 'emarket_change_mce_options');

/**
 * Add additional classes onto widgets
 *
 * @link http://wordpress.org/support/topic/how-to-first-and-last-css-classes-for-sidebar-widgets
 */
function emarket_widget_first_last_classes($params) {
	global $my_widget_num;

	$this_id = $params[0]['id'];
	$arr_registered_widgets = wp_get_sidebars_widgets();

	if (!$my_widget_num) {
		$my_widget_num = array();
	}

	if (!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) {
		return $params;
	}

	if (isset($my_widget_num[$this_id])) {
		$my_widget_num[$this_id] ++;
	} else {
		$my_widget_num[$this_id] = 1;
	}

	$class = 'class="widget-' . esc_attr( $my_widget_num[$this_id] ) . ' ';

	if ($my_widget_num[$this_id] == 1) {
		$class .= 'widget-first ';
	} elseif ($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) {
		$class .= 'widget-last ';
	}

	$params[0]['before_widget'] = preg_replace('/class=\"/', "$class", $params[0]['before_widget'], 1);

	return $params;
}
add_filter('dynamic_sidebar_params', 'emarket_widget_first_last_classes');

/**
 * Redirects search results from /?s=query to /search/query/, converts %20 to +
 *
 * @link http://txfx.net/wordpress-plugins/nice-search/
 */
function emarket_nice_search_redirect() {
	global $emarket_rewrite;
	if (!isset($emarket_rewrite) || !is_object($emarket_rewrite) || !$emarket_rewrite->using_permalinks()) {
		return;
	}

	$search_base = $emarket_rewrite->search_base;
	if (is_search() && !is_admin() && strpos($_SERVER['REQUEST_URI'], "/{$search_base}/") === false) {
		wp_redirect(home_url("/{$search_base}/" . urlencode(get_query_var('s'))));
		exit();
	}
}
if (current_theme_supports('nice-search')) {
	add_action('template_redirect', 'emarket_nice_search_redirect');
}

/**
 * Fix for empty search queries redirecting to home page
 *
 * @link http://wordpress.org/support/topic/emarket-search-sends-you-to-the-homepage#post-1772565
 * @link http://core.trac.wordpress.org/ticket/11330
 */
function emarket_request_filter($query_vars) {
  if (isset($_GET['s']) && empty($_GET['s'])) {
    $query_vars['s'] = ' ';
  }

  return $query_vars;
}
add_filter('request', 'emarket_request_filter');



function emarket_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'emarket' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'emarket_wp_title', 10, 2 );


add_filter('wp_link_pages_args','add_next_and_number');
function add_next_and_number($args){
    if($args['next_or_number'] == 'next_and_number'){
        global $page, $numpages, $multipage, $more, $pagenow;
        $args['next_or_number'] = 'number';
        $prev = '';
        $next = '';
        if ( $multipage ) {
            if ( $more ) {
                $i = $page - 1;
                if ( $i && $more ) {
					$prev .='<p>';
                    $prev .= _wp_link_page($i);
                    $prev .= $args['link_before'].$args['previouspagelink'] . $args['link_after'] . '</a></p>';
                }
                $i = $page + 1;
                if ( $i <= $numpages && $more ) {
					$next .='<p>';
                    $next .= _wp_link_page($i);
                    $next .= $args['link_before']. $args['nextpagelink'] . $args['link_after'] . '</a></p>';
                }
            }
        }
        $args['before'] = $args['before'].$prev;
        $args['after'] = $next.$args['after'];    
    }
    return $args;
}
