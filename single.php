<?php 
/**
 * Single Template file
 * 
 * @package portofolio-dev
 */

 get_header();
?>

<!-- ======= Start Categories section ======= -->

<section class="single-page">
    <div class="back-link">
        <a href="<?php echo home_url(); ?>">
            <div class="icon-arrow-right"></div>
        </a>
    </div>

    <div class="single-section">

    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

            <h3 class="title"><?php the_title(); ?></h3>
        <div class="section-image">
            
                <img src="<?php the_post_thumbnail_url(); ?>"
                    alt="<?php the_title_attribute(); ?>">
            
        </div>

        <p class="description"><?php the_content(); ?></p>

        <!-- <div class="social-media">
                <a href="#">
                    <div class="icon-eye"></div>
                </a>
                <a href="#">
                    <div class="icon-link"></div>
                </a>
                <a href="#">
                    <div class="icon-github"></div>
                </a>
            </div> -->





            <?php }
        }
    ?>


        

    </div>



</section>


<?php get_footer();?>