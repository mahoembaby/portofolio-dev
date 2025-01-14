<?php 
/**
 * Footer Template file
 * 
 * @package portofolio-dev
 */
?>

        <footer class="footer">
            <div class="foot-links">
            <?php 
                    wp_nav_menu( array( 
                        'menu'            => "menu", 
                        'container'       => false, 
                        'theme_location'  => "footer")
                    );
                ?>
            </div>
 
            <div class="foot-copywrite">
                <p> &#64; <?php echo date("Y"); ?> by <a href="<?php home_url() ?>"><?php bloginfo('name') ?></a>. All rights reserved.</p>
            </div>
        </footer>
    </main>

    <?php wp_footer() ?>
</body>

</html>