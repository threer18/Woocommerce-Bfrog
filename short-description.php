<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

if ( ! $post->post_excerpt ) return;
?>
<div id="area_size">
	<div id="product_size">
		<?php
		$firstcategory = get_the_term_list( $post->ID, 'product_cat', '', ', ', '' );
		echo related_size('the_color');
		
		?>
	</div>
</div>

<div itemprop="description" id="not_description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
