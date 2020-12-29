<?php 
/*
	* Name: WC Vendor Hook
	* Develop: SmartAddons
*/

/*
** Wrapper for dashboard
*/
add_action( 'wcvendors_before_dashboard', 'emarket_wrapper_before_vendor_dashboard' );
add_action( 'wcvendors_after_dashboard', 'emarket_wrapper_after_vendor_dashboard' );
function emarket_wrapper_before_vendor_dashboard(){
	echo '<div class="vendor-dashboard-wrapper">';
}

function emarket_wrapper_after_vendor_dashboard(){
	echo '</div>';
}

add_action( 'wp', 'emarket_wcvendor_hook' );
function emarket_wcvendor_hook(){
	$wc_prd_vendor_options 	= get_option( 'wc_prd_vendor_options' ); 
	$pro_store_header		= ( isset( $wc_prd_vendor_options[ 'vendor_store_header_type' ] ) ) ? $wc_prd_vendor_options[ 'vendor_store_header_type' ] : ''; 
	if( 'pro' !== $pro_store_header ) {
		remove_action( 'woocommerce_before_main_content', array( 'WCV_Vendor_Shop', 'shop_description' ), 30 );
		add_action( 'woocommerce_archive_description', array( 'WCV_Vendor_Shop', 'shop_description' ), 10 );
	}else{
		if( WCV_Vendors::is_vendor_page() ) {
			add_action( 'woocommerce_before_main_content', 'emarket_vendor_breadcrumb', 9 );
			remove_action( 'woocommerce_before_main_content', 'emarket_banner_listing', 10 );
		}
	}
	if( WCV_Vendors::is_vendor_page() ) {
		add_action( 'woocommerce_before_main_content', 'emarket_vendor_breadcrumb', 9 );
	}
}

function emarket_vendor_breadcrumb(){
?>
	<div class="emarket_breadcrumbs">
		<div class="container">
			<?php
				if (!is_front_page() ) {
					if (function_exists('emarket_breadcrumb')){
						emarket_breadcrumb('<div class="breadcrumbs theme-clearfix">', '</div>');
					} 
				} 
			?>
		</div>
	</div>
<?php 
}

// Add sold by to product loop before add to cart
if ( get_option('wcvendors_display_label_sold_by_enable') ) { 
	remove_action( 'woocommerce_after_shop_loop_item', array('WCV_Vendor_Shop', 'template_loop_sold_by'), 9 );
	add_action( 'woocommerce_single_product_summary', array('WCV_Vendor_Shop', 'template_loop_sold_by'), 55 );
	add_action( 'woocommerce_single_product_summary', 'emarket_soldby_wrapper_start', 51 );
	add_action( 'woocommerce_single_product_summary', 'emarket_soldby_wrapper_end', 56 );
	function emarket_soldby_wrapper_start(){
		echo '<div class="wc-soldby-start">';
	}
	
	function emarket_soldby_wrapper_end(){
		echo '</div>';
	}
} 