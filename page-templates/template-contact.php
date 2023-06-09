<?php
/*
    Template name: Contact page
*/
get_header();
?>
<!-- ---------------------------Banner Section Start----------- -->
<section class="hero-section jarallax">
<div class="jarallax-img">
<?php the_post_thumbnail(); ?>
</div>
<div class="hero-content padding-xlarge">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title"><?php the_title();?></h1>
                <div class="breadcrumbs">
                    <span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
                    <span class="item"><?php the_title();?></span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- -----------------------------Banner End------------------------------- -->
<!-- ---------------------------------------Contact Details Start----------- -->
<section class="contact-information padding-large mt-3">
<div class="container">
    <div class="row">
        <div class="col-md-6 p-0 mb-3">           
              <h2><?php echo the_field('get_section_heading');?></h2>
            <div class="contact-detail d-flex flex-wrap mt-4">
                <div class="detail mr-6 mb-4">
                    <?php echo the_field('get_section_subhedaing');?>
                    <ul class="list-unstyled list-icon">
                     <?php if(get_field('icon_list') ) { 
                        while(has_sub_field('icon_list') ) { ?>
                        <li><i class="<?php echo the_sub_field('icon_class');?>"></i><?php echo the_sub_field('icon_content');?></li>
                        <?php } }?>
                    </ul>
                </div><!--detail-->
                <div class="detail mb-4">
                    <h3>Social Links</h3>
                    <div class="social-links flex-container">
                        <?php if(get_field('social_details') ) { 
                        while(has_sub_field('social_details') ) { ?>
                        <a href="<?php echo the_sub_field('social_link');?>" class="<?php echo the_sub_field('social_icon');?>"></a>
                        <?php } }?>  
                    </div>
                    <!--social-links-->
                </div><!--detail-->
            </div><!--contact-detail-->
        </div><!--col-md-6-->
        <!-- ----------------------------------Contact Form section---------------- -->
        <div class="col-md-6 p-0">            
           <div  class="contact-information" >
                <h2><?php echo the_field('contact_detail_heading');?></h2>
                <div class="contact-form mt-4"  name="contactform">
                <?php echo do_shortcode(get_field('form_shortcode')); ?>
                </div>
            </div><!--contact-information-->
        </div><!--col-md-6-->
        <!-- ----------------------------------Contact Form end section---------------- -->
    </div>
</div>
</section>
<!-- --------------------------------------------Map Section---------------- -->
<section class="google-map">
<div class="mapouter"><div class="gmap_canvas"><?php echo the_field('google_map_iframe');?><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>
<!-- -------------------------------------------------End Of Map----------------------- -->
<?php get_footer();?>