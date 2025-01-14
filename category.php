<?php 
/**
 * Category Template file
 * 
 * @package portofolio-dev
 */

 get_header();
?>
        <section class="categories">
        <div class="back-link">
        <a href="<?php echo home_url(); ?>">
            <div class="icon-arrow-right"></div>
        </a>
    </div>
            <div class="category-heading">
                <h1>Category Name: <span><?php single_cat_title(); ?></span></h1>
            </div>
            <div class="items">
<?php 


    if(have_posts()){
        while(have_posts()) {
            the_post(); ?>
       
        <!-- ======= Start Categories section ======= -->



                <div class="item">
                    <div class="item-image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title_attribute(); ?>">
                        </a>
                    </div>
                    <div class="item-content">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                        </a>

                        <p class="excerpt"><?php the_excerpt(); ?></p>
                        
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
                        </div>
                         -->
                    </div>
                </div>

       
       
       <?php } 
    }
?>
            </div>

</section>
<?php get_footer();?>