<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EVP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-row">
				<div class="flex-col-1">
				<div id="footer-sidebar1">

					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
					?>
					</div>

					</div>
					<div class="flex-col-2">
						<div id="footer-sidebar2">
						<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
						?>
						</div>
					
					</div>
					<div class="flex-col-3">
					<div id="footer-sidebar3">
						<?php
						if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
						}
						?>
			</div>
				</div>
			 </div><!-- footer row  -->
			 <div class="footer-row--2">

					<?php
						if(is_active_sidebar('facebook')){
						dynamic_sidebar('facebook');
						}
						?>
				<?php
						if(is_active_sidebar('linkedin')){
						dynamic_sidebar('linkedin');
						}
						?>
				<?php
						if(is_active_sidebar('youtube')){
						dynamic_sidebar('youtube');
						}
						?>
	



			 </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
