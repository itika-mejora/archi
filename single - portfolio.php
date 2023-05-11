<?php
/* this is Post detail */

get_header();
?>
<section class="hero-section jarallax">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" class="jarallax-img">
	<div class="hero-content padding-xlarge">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title"><?php the_title();?></h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item">Construction Tips</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="padding-large">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="post-content">
					<?php the_content();?>
					
				</div><!--post-content-->

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				
				<section class="comments-wrap mb-4">
					<h3>Comments</h3>
					<div class="comment-list mt-4">
						

						<article class="flex-container d-flex mb-3">
							
							<div class="author-post">
								<!--meta-tags-->

								<?php comments_template();?>
							</div>

						</article><!--flex-container-->

						
					</div><!--comment-list-->

				</section>

				<!-- <section class="comment-respond  mb-5">			
					<h3>Leave a Comment</h3>
					<form method="post" class="form-group mt-3">
						
						<div class="row">
							<div class="col-md-6">
								<input class="u-full-width" type="text" name="author" id="author" class="form-control mb-4 mr-4"  placeholder="Your full name">
							</div>
							<div class="col-md-6">
								<input class="u-full-width" type="email" name="email" id="email" class="form-control mb-4"  placeholder="E-mail Address">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<textarea class="u-full-width" id="comment" class="form-control mb-4" name="comment" placeholder="Write your comment here" rows="20"></textarea>
							</div>
							<div class="col-md-12">
								<label class="example-send-yourself-copy">
								    <input type="checkbox">
								    <span class="label-body">Save my name, email, and website in this browser for the next time I comment.</span>
								</label>
							</div>
							<div class="col-md-12">
								<input class="btn btn-rounded btn-large btn-full" type="submit" value="Submit">
							</div>
						</div>

					</form>
				</section> -->

			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>