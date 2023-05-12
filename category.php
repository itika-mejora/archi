<?php
        /**
    * A Simple Category Template
    */

    get_header(); ?> 

<?php 
$current_term = $wp_query->get_queried_object();
$pageID = get_option('page_on_front');
echo $pageID; 
;?>
<?php if (have_rows('banner_slider',$pageID)) : ?>
<section id="intro" class="scrollspy-section">
	<div class="main-slider">
   
        <?php while (have_rows('banner_slider',$pageID)) : the_row();
        $size                 = 'full';
        $banner_image         = get_sub_field('banner_image',$pageID);
        $banner_heading       = get_sub_field('banner_heading',$pageID);
        $banner_button_text   = get_sub_field('banner_button_text',$pageID);
        $banner_button_link   = get_sub_field('banner_button_link',$pageID);
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
                <?php if(get_field('about_title',$pageID)) :?>
					<div class="title">
						<span><?php  the_field('about_title',$pageID);?></span>
					</div>
                    <?php endif;?>
                    <?php if(get_field('about_heading',$pageID)) :?>
					<h2 class="section-title"><?php  the_field('about_heading',$pageID);?></h2>
                    <?php endif;?>
				</div>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-6">
            <?php if(get_field('about_image',$pageID)) :
             $size                = 'full';
             $about_image         = get_field('about_image',$pageID);
             ?>
                <figure>
					<img src="<?php echo wp_get_attachment_image_url( $about_image, $size); ?>" alt="about us" class="single-image">
				</figure>
                <?php endif;?>
			</div>
            <?php if(get_field('about_content',$pageID)) :?>
			<div class="col-md-6 description text-lead">
            <?php  the_field('about_content',$pageID);?>
            <?php if(get_field('about_button_link',$pageID)) :
                $about_button_text   = get_field('about_button_text',$pageID);
                $about_button_link   = get_field('about_button_link',$pageID);
                $about_button_target   = $about_button_link['target'] ? $about_button_link['target'] : '_self';

                ?>
				<div class="btn-wrap">
					<a href="<?php echo $about_button_link['url'];?>" class="btn btn-accent btn-xlarge btn-rounded"><?php echo  get_field('about_button_text',$pageID);;?></a>
				</div>
                <?php endif;?>

			</div>
            <?php endif;?>

		</div>

	</div>
</section>
<?php 
$args = array(
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'taxonomy' => 'category',
    'posts_per_page' => 3,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :?>
<section id="portfolio" class="scrollspy-section bg-dark padding-large">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">

			<div class="section-header">
                    <?php if(get_field('portfolio_title',$pageID)) :?>
					<div class="title">
						<span><?php  the_field('portfolio_title',$pageID);?></span>
					</div>
                    <?php endif;?>
					<h2 class="section-title light"><?php echo the_field('portfolio_heading',$pageID);?></h2>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="portfolio-tabs">

					<ul class="tabs">
					<?php
					 $categories = get_terms('category', array('parent' => 0, 'orderby' => 'id', 'hide_empty' => true));   
					 foreach ($categories as $term) {?>

					

					
					<li  class="<?php if($current_term->term_id==$term->term_id){?>
          					active <?php }else?>tab">
					
						<a href="<?php echo get_term_link( $term );?>">
						<?php echo $term->name;?>
						</a>
					</li> 
					
					

					<?php }?>
				
					</ul>

					<div class="tab-content">
					
					  <div id="all" data-tab-content class="active">
					 
					  	<div class="grid">
						  <?php while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();?>
				    	  <a href="<?php echo get_stylesheet_directory_uri();?>/images/spacejoy.jpg" data-lightbox-gallery="gallery1" title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><?php the_content();?></a>
				    	 
						  <?php endwhile;?> 
						</div>
						
					  </div>
					

					</div>
					
				</div>

			</div>
		</div>
		
		
	</div>
</section>
<?php endif;wp_reset_query();?>

<section id="services" class="scrollspy-section padding-large">
	<div class="container">
		<div class="row">
			<div class="section-header col-12">
            <?php if(get_field('service_title',$pageID)) :?>
				<div class="title">
					<span><?php  the_field('service_title',$pageID);?></span>
				</div>
                <?php endif;?>
                <?php if(get_field('service_heading',$pageID)) :?>
				<h2 class="section-title"><?php  the_field('service_heading',$pageID);?></h2>
                <?php endif;?>
			</div>

		</div>
        <?php 
        $i                = 0;
        if (have_rows('service_details',$pageID)) : ?>
		<div class="row">
       
            <?php  while (have_rows('service_details',$pageID)) : the_row();
            
            $heading          = get_sub_field('each_service_heading',$pageID);
            $subheading       = get_sub_field('each_service_subheading',$pageID);
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
            <?php if(get_field('service_title',$pageID)) :
                $size            = 'full';
                $subscribe_image = get_field('subscribe_image',$pageID);?>
                
				<figure class="subscribe-image">
					<img src="<?php echo wp_get_attachment_image_url( $subscribe_image, $size); ?>" alt="subscribe">
				</figure>
                <?php endif;?>

			</div>
			<div class="col-md-6">
				<div class="subscribe-content">
                <?php if(get_field('subscribe_title',$pageID)) :?>
					<h2 class="section-title"><?php  the_field('subscribe_title',$pageID);?></h2>
                    <?php endif;?>
                    <?php if(get_field('subscribe_content',$pageID)) :?>
                        <?php  the_field('subscribe_content',$pageID);?>
                        <?php endif;?>
					<div id="form">	
					<?php echo do_shortcode(get_field('subscribe_short_code',$pageID)); ?>
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
                <?php if(get_field('blog_title',$pageID)) :?>
					<div class="title">
						<span><?php  the_field('blog_title',$pageID);?></span>
					</div>
                    <?php endif;?>

					<h2 class="section-title"><?php echo the_field('blog_heading',$pageID);?>
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
			<?php if(get_field('blog_page_link',$pageID)) :
                
                $blog_page_link   = get_field('blog_page_link',$pageID);
                $blog_page_link_target   = $blog_page_link['target'] ? $blog_page_link['target'] : '_self';

                ?>
				<div class="btn-wrap align-center">
					<a href="<?php echo $blog_page_link['url'];?>" class="btn btn-xlarge btn-accent btn-rounded"><?php echo the_field('blog_page_link_text',$pageID);?></a>
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
                    <?php if(get_field('contact_title',$pageID)) :?>
						<div class="title">
							<span><?php the_field('contact_title',$pageID);?></span>
						</div>
                    	<?php endif;?>
						<h2 class="section-title light"><?php echo the_field('contact_heading',$pageID);?></h2>
					</div>
						<?php echo the_field('contact_subheading',$pageID);?>
						<div id="form-contact" class="form-light">
						<?php echo do_shortcode(get_field('form_shortcode',$pageID)); ?>
						</div>
				</div>
			</div><!--left-content-->

			<div class="col-md-6">
				<div class="right-content">
                <?php if(get_field('contact_details',$pageID) ) { 
                        while(has_sub_field('contact_details',$pageID) ) { ?>
							<div class="iconbox">
								<i class="<?php echo the_sub_field('contact_class',$pageID);?>"></i>
								<div class="detail">
									<strong><?php echo the_sub_field('address',$pageID);?></strong> 
									<?php echo the_sub_field('address_details',$pageID);?>
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
                <?php if(get_field('testimonial_image',$pageID)) :
                $size                = 'full';
                $testimonial_image         = get_field('testimonial_image',$pageID);
                ?>
				
				<figure class="testimonial-image">
					<img src="<?php echo wp_get_attachment_image_url( $testimonial_image, $size); ?>" alt="review">
				</figure>
                <?php endif;?>
				
			</div>

			<div class="col-md-6">
				
				<div class="testimonial-block">
					<div class="section-header">
					<?php if(get_field('testimonial_title',$pageID)) :?>
						<div class="title">
							<span><?php echo the_field('testimonial_title',$pageID);?></span>
						</div>
						<?php endif;?>
						<h2 class="section-title"><?php echo get_field('testimonial_heading',$pageID);?></h2>
					</div>
					<?php if(get_field('testimonial_content',$pageID)) :?>
					<div class="testimonials-inner">
                    <?php echo the_field('testimonial_content',$pageID);?>
						<div class="testimonial-author">
							<div class="author-detail">
							<?php if(get_field('author_name',$pageID)) :?>
								<div class="name"><?php echo get_field('author_name',$pageID);?></div>
								<?php endif;?>
							
								<div class="author-title"><?php echo get_field('author_title',$pageID);?></div>
								
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
