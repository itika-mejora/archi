<footer id="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3">
			<?php if ( is_active_sidebar( 'footer_logo' )) : ?>
				<div class="footer-menu">
				<?php dynamic_sidebar( 'footer_logo' ); ?>
				<?php if ( is_active_sidebar( 'footer_left' )) : ?>
					<div class="social-links">
					
						
						<?php dynamic_sidebar( 'footer_left' ); ?>
						
					
					</div>
					<?php endif;?>	
				</div>
			<?php endif;?>

			</div>

			<div class="col-md-2">
			<?php if ( is_active_sidebar( 'footer_menu' )) : ?>		
				<div class="footer-menu">
					<h5>Quick links</h5>
					<ul class="menu-list">
					<?php dynamic_sidebar( 'footer_menu' ); ?>
					</ul>
				</div>

				<?php endif;?>

			</div>

			<div class="col-md-4">
			<?php if ( is_active_sidebar( 'footer_contact' )) : ?>
				<div class="footer-menu widget-contact-info">
					
					<?php dynamic_sidebar( 'footer_contact' ); ?>
					
				</div>
				<?php endif;?>

			</div>

			<div class="col-md-3">
			<?php if ( is_active_sidebar( 'footer_gallery' )) : ?>
				<div class="footer-menu">
					<h5>Gallery</h5>
					<div class="widget-gallery">
					<?php dynamic_sidebar( 'footer_gallery' ); ?>
					</div>
				</div>
				<?php endif;?>

			</div>

		</div>
	</div>
</footer>

<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<?php if ( is_active_sidebar( 'footer_left_copyright' )) : ?>
				<div class="copyright">
				<?php dynamic_sidebar( 'footer_left_copyright' ); ?>
				</div>
			<?php endif;?>
			</div>
			<div class="col-md-6">
			<?php if ( is_active_sidebar( 'footer_right_copyright' )) : ?>
				<div class="copyright text-right">
				<?php dynamic_sidebar( 'footer_right_copyright' ); ?>
				</div>
			<?php endif;?>	
			</div>
		</div>
	</div>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>


<?php wp_footer(); ?>

</body>
</html>	