<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version    3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	global $product, $post;
	emarket_setPostViews( $post->ID );
	$product_style_variation = emarket_options()->getCpanelValue('product_style_variation');
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked woocommerce_show_messages - 10
	 */
	 do_action( 'woocommerce_before_single_product' );
	global $product;
	if ( post_password_required() ) {
		echo get_the_password_form();
		return;
	}
?>
<div class="container">
	<div class="row sidebar-row">
		<div id="contents-detail" class="col-lg-12" role="main">
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action('woocommerce_before_main_content');
			?>
			<div class="single-product clearfix">
			
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="product_detail <?php echo $product_style_variation ? 'variation-select' : ''; ?> row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">							
								<div class="slider_img_productd">
									<!-- woocommerce_show_product_images -->
									<?php
										/**
										 * woocommerce_show_product_images hook
										 *
										 * @hooked woocommerce_show_product_sale_flash - 10
										 * @hooked woocommerce_show_product_images - 20
										 */
										do_action( 'woocommerce_before_single_product_summary' );
									?>
									  <a href="#" data-target="#left" class="sw-sidebar-button"><span><?php echo esc_html__('Filters', 'emarket'); ?></span>
									</a>
								</div>							
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
								<div class="content_product_detail">
									<!-- woocommerce_template_single_title - 5 -->
									<!-- woocommerce_template_single_rating - 10 -->
									<!-- woocommerce_template_single_price - 20 -->
									<!-- woocommerce_template_single_excerpt - 30 -->
									<!-- woocommerce_template_single_add_to_cart 40 -->
									<?php
										/**
										 * woocommerce_single_product_summary hook
										 *
										 * @hooked woocommerce_template_single_title - 5
										 * @hooked woocommerce_template_single_price - 10
										 * @hooked woocommerce_template_single_excerpt - 20
										 * @hooked woocommerce_template_single_add_to_cart - 30
										 * @hooked woocommerce_template_single_meta - 40
										 * @hooked woocommerce_template_single_sharing - 50
										 */
										do_action( 'woocommerce_single_product_summary' );
									?>				
								</div>
							</div>
							
							<?php if ( is_active_sidebar('left-product-detail') && emarket_sidebar_product() == 'full' ): ?>
								
								<aside id="left" class="sidebar sticky-canvas">
									<a href="#" data-target="left" class="sw-sidebar-close"></a>
									<div class="wrap-content">
										<?php dynamic_sidebar('left-product-detail'); ?>
									</div>
								</aside>
								
							<?php endif; ?>
							
						</div>
					</div>
					<div class="sticky-detail">
						<div class="container">
							<?php 
								do_action( 'woocommerce_before_shop_loop_item_title' );		
							?>		
							<div class="item-content">
							<?php do_action('sticky_single_product'); ?>
							</div>	
						</div>
					</div>
					<div class="tabs clearfix">
						<?php
							/**
							 * woocommerce_after_single_product_summary hook
							 *
							 * @hooked woocommerce_output_product_data_tabs - 10
							 * @hooked woocommerce_output_related_products - 20
							 */
							do_action( 'woocommerce_after_single_product_summary' );
						?>
					</div>

					<?php if (is_active_sidebar('bottom-detail-product')) { ?>
						<div class="bottom-single-product theme-clearfix">
							<?php dynamic_sidebar('bottom-detail-product'); ?>
						</div>
					<?php } ?>
						
					<?php do_action( 'woocommerce_after_single_product' ); ?>
				<?php endwhile; // end of the loop. ?>
			
			</div>
			
			<?php
				/**
				 * woocommerce_after_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action('woocommerce_after_main_content');
			?>
		</div>		
	</div>
</div>