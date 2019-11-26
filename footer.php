<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div id="social">
					<?php 
					$has_social_menu = has_nav_menu( 'social' );
					$footer_top_classes = '';

					$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
					$footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';
					?>
					<?php if ( $has_social_menu ) { ?>

<nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>" class="footer-social-wrapper">

	<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'social',
				'container'       => '',
				'container_class' => '',
				'items_wrap'      => '%3$s',
				'menu_id'         => '',
				'menu_class'      => '',
				'depth'           => 1,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
				'fallback_cb'     => '',
			)
		);
		?>

	</ul><!-- .footer-social -->

</nav><!-- .footer-social-wrapper -->

<?php } ?>
										
					</div>

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
