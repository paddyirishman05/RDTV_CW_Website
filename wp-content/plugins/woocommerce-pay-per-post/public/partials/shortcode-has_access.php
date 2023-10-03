<?php  /** @noinspection PhpUndefinedVariableInspection */ ?>
<?php
/**
 * Do not edit this file directly.  You can copy this file to your theme directory
 * in /your-theme/woocommerce-pay-per-post/shortcode-has_access.php
 * The $purchased variable is a WP Posts Object of purchased posts.
 */
?>
<div class="wc-ppp-purchased-container">
	<?php if ( count( $purchased ) > 0 ) : ?>
        <ul id="what-ever-you-want">
			<?php foreach ( $purchased as $post ) : ?>
                <li>
                    <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo esc_html( $post->post_title ); ?></a>
                </li>
			<?php endforeach; ?>
        </ul>
	<?php else : ?>
        <p><?php /** @noinspection PhpVoidFunctionResultUsedInspection */
                apply_filters('wc_pay_per_post_shortcode_has_access_no_posts', _e('You do not have access to any protected posts.', 'wc_pay_per_post' ) ); ?></p>
	<?php endif; ?>
</div>