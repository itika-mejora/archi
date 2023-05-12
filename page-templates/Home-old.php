<?php
/*
    Template name: Home page
*/
get_header();
?>
<?php if (have_rows('banner_slider')) : ?>
<section id="intro" class="scrollspy-section">
	<div class="main-slider">
   
        <?php while (have_rows('banner_slider')) : the_row();
        $size                 = 'full';
        $banner_image         = get_sub_field('banner_image');
        $banner_heading       = get_sub_field('banner_heading');
        $banner_button_text   = get_sub_field('banner_button_text');
        $banner_button_link   = get_sub_field('banner_button_link');
        $banner_button_target = $banner_button_link['target'] ? $banner_button_link['target'] : '_self';


        ?>
		<div class="slider-item jarallax" data-speed="0.2">
			<img src="<?php echo wp_get_attachment_image_url( $banner_image, $size); ?>" alt="banner" class="jarallax-img">
			<div class="banner-content">
				<h2 class="banner-title txt-fx"><?php echo $banner_heading;?></h2>
				<div class="btn-wrap">
					<a href="<?php echo $banner_button_link['url']; ?>" class="btn-with-line"><?php echo $banner_button_text;?></a>
				</div>
			</div>
		</div>
        <?php endwhile;?>
	</div>

	<div class="button-container">
		<button class="prev slick-arrow">
			<i class="icon icon-chevron-thin-left"></i>
		</button>
		<button class="next slick-arrow">
			<i class="icon icon-chevron-thin-right"></i>
		</button>
	</div>
</section>
<?php endif;?>

<section id="about" class="scrollspy-section padding-xlarge">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">

				<div class="section-header">
                <?php if(get_field('about_title')) :?>
					<div class="title">
						<span><?php  the_field('about_title');?></span>
					</div>
                    <?php endif;?>
                    <?php if(get_field('about_heading')) :?>
					<h2 class="section-title"><?php  the_field('about_heading');?></h2>
                    <?php endif;?>
				</div>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-6">
            <?php if(get_field('about_image')) :
             $size                = 'full';
             $about_image         = get_field('about_image');
             ?>
                <figure>
					<img src="<?php echo wp_get_attachment_image_url( $about_image, $size); ?>" alt="about us" class="single-image">
				</figure>
                <?php endif;?>
			</div>
            <?php if(get_field('about_content')) :?>
			<div class="col-md-6 description text-lead">
            <?php  the_field('about_content');?>
            <?php if(get_field('about_button_link')) :
                $about_button_text   = get_field('about_button_text');
                $about_button_link   = get_field('about_button_link');
                $about_button_target   = $about_button_link['target'] ? $about_button_link['target'] : '_self';

                ?>
				<div class="btn-wrap">
					<a href="<?php echo $about_button_link['url'];?>" class="btn btn-accent btn-xlarge btn-rounded"><?php echo  get_field('about_button_text');;?></a>
				</div>
                <?php endif;?>

			</div>
            <?php endif;?>

		</div>

	</div>
</section>

<section id="portfolio" class="scrollspy-section bg-dark padding-large">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">

				<div class="section-header">
                    <?php if(get_field('portfolio_title')) :?>
					<div class="title">
						<span><?php  the_field('portfolio_title');?></span>
					</div>
                    <?php endif;?>
					<h2 class="section-title light"><?php echo the_field('portfolio_heading');?></h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				
				<div class="portfolio-tabs">
					<ul class="tabs">
					<?php
					 $categories = get_terms('portcategories', array('parent' => 0, 'orderby' => 'id', 'hide_empty' => true));   
					 foreach ($categories as $term) {?>

					

					
					<li  class="tab">
					
						<a href="<?php echo get_term_link( $term );?>">
						<?php echo $term->name;?>
						</a>
					</li> 
					<?php }?>
				
					</ul>
					
					<div class="tab-content">
					
					<div id="all" data-tab-content class="active">
					
					  	<div class="grid">
						  <?php
						$wp_query = new WP_Query( array(
							'post_type' => 'portfolio',
							'posts_per_page' => 6,
						));
						if ($wp_query->have_posts()) :
						?>
					  	<?php
						while ($wp_query->have_posts()) : $wp_query->the_post();
						
						?>
						  
				    	  <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/spacejoy.jpg" data-lightbox-gallery="gallery1" title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><?php the_content();?></a>
				    	 
						  <?php endwhile;endif;wp_reset_query();?>
						</div>
					  </div>
					 </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="services" class="scrollspy-section padding-large">
	<div class="container">
		<div class="row">
			<div class="section-header col-12">
            <?php if(get_field('service_title')) :?>
				<div class="title">
					<span><?php  the_field('service_title');?></span>
				</div>
                <?php endif;?>
                <?php if(get_field('service_heading')) :?>
				<h2 class="section-title"><?php  the_field('service_heading');?></h2>
                <?php endif;?>
			</div>

		</div>
        <?php 
        $i                = 0;
        if (have_rows('service_details')) : ?>
		<div class="row">
       
            <?php  while (have_rows('service_details')) : the_row();
            
            $heading          = get_sub_field('each_service_heading');
            $subheading       = get_sub_field('each_service_subheading');
            ?>
			<div class="col-md-4">
				<div class="services-item">
					<span class="number"><?php echo ++$i;?></span>					
				    <h3><?php echo $heading;?></h3>
				    <p><?php echo $subheading;?></p>
				</div>
               
			</div>
            
            <?php endwhile;?>
             
		</div>
        <?php endif;?>

	</div>
</section>

<section id="subscribe" class="scrollspy-section padding-small">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
            <?php if(get_field('service_title')) :
                $size            = 'full';
                $subscribe_image = get_field('subscribe_image');?>
                
				<figure class="subscribe-image">
					<img src="<?php echo wp_get_attachment_image_url( $subscribe_image, $size); ?>" alt="subscribe">
				</figure>
                <?php endif;?>

			</div>
			<div class="col-md-6">
				<div class="subscribe-content">
                <?php if(get_field('subscribe_title')) :?>
					<h2 class="section-title"><?php  the_field('subscribe_title');?></h2>
                    <?php endif;?>
                    <?php if(get_field('subscribe_content')) :?>
                        <?php  the_field('subscribe_content');?>
                        <?php endif;?>
					<div id="form">	
					<?php echo do_shortcode(get_field('subscribe_short_code')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
				
		<div class="row">
			
			<div class="col">

				<div class="section-header">
                <?php if(get_field('blog_title')) :?>
					<div class="title">
						<span><?php  the_field('blog_title');?></span>
					</div>
                    <?php endif;?>

					<h2 class="section-title"><?php echo the_field('blog_heading');?>
                    </h2>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				
				<div class="post-grid">
					<div class="row">
					<?php
					$wp_query = new WP_Query( array(
						'post_type' => 'post',
						'posts_per_page' => 3,
					));
					if ($wp_query->have_posts()) :
						?>
						<?php
							while ($wp_query->have_posts()) : $wp_query->the_post();
						
						?>
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<?php the_post_thumbnail(); ?>			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date"><?php the_time( 'F j.Y' ); ?></div>			
								    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								    <p><?php echo get_the_excerpt();?></p>
								</div>
							</article>

						</div>
						<?php endwhile;endif;wp_reset_query();?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<?php if(get_field('blog_page_link')) :
                
                $blog_page_link   = get_field('blog_page_link');
                $blog_page_link_target   = $blog_page_link['target'] ? $blog_page_link['target'] : '_self';

                ?>
				<div class="btn-wrap align-center">
					<a href="<?php echo $blog_page_link['url'];?>" class="btn btn-xlarge btn-accent btn-rounded"><?php echo the_field('blog_page_link_text');?></a>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="scrollspy-section bg-dark padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="left-content">
					<div class="section-header">
                    <?php if(get_field('contact_title')) :?>
						<div class="title">
							<span><?php the_field('contact_title');?></span>
						</div>
                    	<?php endif;?>
						<h2 class="section-title light"><?php echo the_field('contact_heading');?></h2>
					</div>
						<?php echo the_field('contact_subheading');?>
						<div id="form-contact" class="form-light">
						<?php echo do_shortcode(get_field('form_shortcode')); ?>
						</div>
				</div>
			</div><!--left-content-->

			<div class="col-md-6">
				<div class="right-content">
                <?php if(get_field('contact_details') ) { 
                        while(has_sub_field('contact_details') ) { ?>
							<div class="iconbox">
								<i class="<?php echo the_sub_field('contact_class');?>"></i>
								<div class="detail">
									<strong><?php echo the_sub_field('address');?></strong> 
									<?php echo the_sub_field('address_details');?>
								</div>
							</div>
                            <?php } }?>
				</div>
			</div><!--right-content-->

		</div>

	</div>
</section>

<section id="testimonial" class="padding-large">
	<div class="container">

		<div class="row">

			<div class="col-md-6">
                <?php if(get_field('testimonial_image')) :
                $size                = 'full';
                $testimonial_image         = get_field('testimonial_image');
                ?>
				
				<figure class="testimonial-image">
					<img src="<?php echo wp_get_attachment_image_url( $testimonial_image, $size); ?>" alt="review">
				</figure>
                <?php endif;?>
				
			</div>

			<div class="col-md-6">
				
				<div class="testimonial-block">
					<div class="section-header">
					<?php if(get_field('testimonial_title')) :?>
						<div class="title">
							<span><?php echo the_field('testimonial_title');?></span>
						</div>
						<?php endif;?>
						<h2 class="section-title"><?php echo get_field('testimonial_heading');?></h2>
					</div>
					<?php if(get_field('testimonial_content')) :?>
					<div class="testimonials-inner">
                    <?php echo the_field('testimonial_content');?>
						<div class="testimonial-author">
							<div class="author-detail">
							<?php if(get_field('author_name')) :?>
								<div class="name"><?php echo get_field('author_name');?></div>
								<?php endif;?>
							
								<div class="author-title"><?php echo get_field('author_title');?></div>
								
							</div>
						</div>
					<?php endif;?>	
					</div>
				</div><!--reviews-content-->

			</div>
		</div><!--grid-->

	</div>
</section>

<?php get_footer(); ?>
