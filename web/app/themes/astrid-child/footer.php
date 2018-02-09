<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Astrid
*/

?>

</div>
</div><!-- #content -->
<link rel='stylesheet' type='text/css' href='./style.css' />

<div class="footer-wrapper">
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $toggle_contact = get_theme_mod('toggle_contact_footer', 1); ?>
	<?php if ( $toggle_contact ) : ?>
		<div class="footer-info">
			<div class="container">
				<p class="email">Email me at <a href="mailto:tychau@calpoly.edu?Subject=Let's Connect" target="_top">tychau@calpoly.edu</a></p>
			</div>
			<div class="container">
				<p class="linkedin">connect with me on <a href="https://www.linkedin.com/in/tychau/">linkedin</a></p>
			</div>
		</div>
	<?php endif; ?>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
