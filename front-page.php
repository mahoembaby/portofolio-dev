<?php get_header(); ?>
        <!-- 
        ======= Start Hero section
        -->
        <section class="hero">
            <div class="hero-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/src/images/1.jpg'; ?>" alt="">
            </div>
            <div class="hero-text">
                <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, eveniet!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, molestias magni distinctio
                    magnam fuga possimus sapiente? Aliquid accusamus quaerat, vero harum magnam quo ipsa corrupti
                    modi iusto repudiandae, esse asperiores.
 
            </div>
            <div class="hero-social">
                <a href="#">
                    <div class="icon-linkedin-square"></div>
                </a>
                <a href="#">
                    <div class="icon-github"></div>
                </a>
                <a href="#">
                    <div class="icon-facebook-square"></div>
                </a>
                <a href="#">
                    <div class="icon-youtube-play"></div>
                </a>
            </div>
        </section>

        <!-- 
        ======= Start Gallery section
        -->

        <section class="gallery">
            <div class="filter">
                <button class="btn active" data-filter="all">All</button>
                <?php
                      $terms = get_terms([
                        'taxonomy' => 'category',
                        'hide_empty' => false,
                      ]);
                      foreach ($terms as  $term) { ?>
                        <button class="btn" data-filter="<?php  echo $term->slug; ?>"><?php echo $term->name; ?></button>
                  <?php  }

                    ?>
            </div>

            <div class="items">
            <?php
                      $args = array(
                        'post_type' => 'post',
                        // 'posts_per_page' => 6,
                        // 'paged' => get_query_var('paged', 1), //page number 1 on load
                        'post_status' => 'publish',
                        'category__not_in' => [1]
                      );

                      $wp_query = new WP_Query($args);

                      while ($wp_query->have_posts()) {
                        $wp_query->the_post();

                        $termsArray = get_the_terms($post->ID, 'category');

                        $termsSLug = "";
                        foreach ($termsArray as $term) {
                          $termsSLug .= $term->slug . ' ';
                        }

                        ?>

                        <div class="item <?php echo  $termsSLug; ?>">
                    <div class="item-image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>"
                                alt="<?php the_title_attribute(); ?>">
                        </a>
                    </div>
                    <div class="item-content">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="title">L<?php the_title(); ?></h3>
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
                        </div> -->

                    </div>
                </div>

                  <?php  }
                    wp_reset_postdata();
                    ?>

            </div>

        </section>

        <?php get_footer(); ?>