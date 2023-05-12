<?php
/*
    Template name: About page
*/
get_header();
?>
<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1><?php the_title();?></h1>
						<div class="breadcum-items">
							<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
							<span class="item colored"><?php the_title();?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->
<section class="chief-detail padding-large">
	<div class="container">
		<div class="row">
		  	<?php if(get_field('ceo_image')) :
		  	$size        = 'full';
			$ceo_image = get_field('ceo_image');
			?>
				<div class="single-image col-md-6">
					<img src="<?php echo wp_get_attachment_image_url($ceo_image, $size); ?>" alt="ceo" class="singleImg">
				</div>
				<div class="col-md-6 p-5 text-center align-self-center">
					<h2 class="section-title text-center mb-3"><?php echo get_field('ceo_name');?></h2>
					<?php echo get_field('about_ceo');?>
				</div>
			<?php endif;?>	
		</div>
	</div>
</section>
<?php if(get_field('team_section_heading')) :?>
<section class="our-team bg-sand padding-large">
	<h2 class="section-title text-center mb-4"><?php  the_field('team_section_heading');?></h2>
    <?php if (have_rows('team_member_details')) : ?>
	<div class="container">
                <div class="row">
                <?php while (have_rows('team_member_details')) : the_row();
                $size                 = 'full';
                $member_image         = get_sub_field('member_image');
                $member_name          = get_sub_field('member_name');
                $member_designation   = get_sub_field('member_designation');
                $member_details       = get_sub_field('about_member');
                ?>
				<div class="col-md-3 ">

					<div class="team-member text-center">
						
						<figure>
							<a href="#"><img src="<?php echo wp_get_attachment_image_url( $member_image , $size); ?>" alt="post" class="member-image"></a>
						</figure>

						<div class="member-details text-center">
							<h4><?php echo $member_name;?></h4>
							<div class="designation colored"><?php echo $member_designation;?></div>
							<?php echo  $member_details ;?>
                            <?php if(get_sub_field('member_social_share') ) { 
                                while(has_sub_field('member_social_share') ) {
                                    $social_class  = get_sub_field('social_class');
                                    $social_link   = get_sub_field('social_link');
                                    $social_link_target = $social_link['target'] ? $social_link['target'] : '_self'; 
                                    ?>
							<div class="social-links color-primary ">
								<a href="<?php echo $social_link_target;?>" class="<?php echo $social_class;?>"></a>
								<!-- <a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a> -->
							</div>
                            <?php } }?>
						</div>

					</div>

				</div><!--col-md-3-->
                <?php endwhile;?>
	</div>
    <?php endif;?>
</section>
<?php endif;?>
<section class="our-targets padding-large">
	<div class="container">
        <?php if(get_field('target_section_heading')) :?>
		<h2 class="section-title text-center mb-5"><?php the_field('target_section_heading'); ?></h2>
        <?php endif;?>
        <?php if(get_field('target_section_heading')) :
            $size                 = 'full';
            $target_image         = get_field('target_image');
            ?>
		<div class="row">
			<img src="<?php echo wp_get_attachment_image_url( $target_image , $size); ?>" alt="flower">

			<div class="accordion accordion-flush mt-3" id="target-accordion">
            <?php if(get_field('target_details') ) { 
                   while(has_sub_field('target_details') ) {   
                    ?>
			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="<?php echo get_sub_field('data_target');?>" class="" aria-expanded="true"><?php echo get_sub_field('target_heading');?></a>
					</h4>
				</div>
				<div id="<?php echo get_sub_field('target_content_id');?>" class="<?php echo get_sub_field('target_content_class');?>" aria-expanded="true" >
					<div class="accordion-body"> 
						<div class="target-detail">
						<?php echo get_sub_field('target_details');?>
						</div>
				</div>
				</div>
			</div>
            <?php } }?><!--panel-->

			

		</div><!--panel-group-->
        <?php endif;?>

		</div>
	</div>
</section>

<section class="our-achivement bg-sand padding-large">
	<div class="container">
            <?php if(get_field('moment_heading')) :?>
			<h2 class="section-title text-center mb-5"><?php the_field('moment_heading'); ?></h2>
            <?php endif;?>

		<div class="row">
        <?php if(get_field('achievement_details') ) { 
                   while(has_sub_field('achievement_details') ) { 
                    $size                 = 'full';
                    $achievement_image         = get_sub_field('achievement_image'); 
                    ?>
			<div class="achivement-block text-center col-md-4">
				<img src="<?php echo wp_get_attachment_image_url( $achievement_image , $size); ?>" alt="badge">
				<div class="mt-3">
					<h3><?php echo get_sub_field('achievement__title');?></h3>
					<span class="date"><?php echo get_sub_field('achievement__date');?></span>
					<?php echo get_sub_field('achievement__content');?>
				</div>
			</div><!--achivement-block-->
			<?php } }?>

		</div>
	</div>
</section>

<?php get_footer(); ?>