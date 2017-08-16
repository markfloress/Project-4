<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class='footer_info'>
				<div class='footer_contact_info'>
					<h3> contact info </h3>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><a> info@inhabitent.com </a></p>
					<p><i class="fa fa-phone" aria-hidden="true"></i><a> 778-456-7891 </a></p>
					<p><i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i></p>
				</div>

				<div class='footer_hours'>
					<h3> business hours </h3>
					<p><span>Monday-Friday: </span>9am to 5pm</p>
					<p><span>Saturday: </span>10am to 2pm</p>
					<p><span>Sunday: </span>Closed</p>
				</div>		

				<div class='footer_logo_container'>
				<a href='#' class='inhab_logo'><img src="<?php echo get_template_directory_uri();?>/assets/logos/inhabitent-logo-text.svg" alt="inhabitent logo"></a>
				</div>
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
