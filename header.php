<?php 
/**
 * Header Template file
 * 
 * @package portofolio-dev
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>


<body>
    <main class="container">
        <!-- 
        ======= Start Navigation section
        -->
        <header class="header">
            <nav class="navbar">
                <div id="menu-icon">
                    <div class="icon-th-menu"></div>
                </div>
                <?php 
                    wp_nav_menu( array( 
                        'menu'            => "menu", 
                        'container'       => false, 
                        'theme_location'  => "header")
                    );
                ?>
                <div id="menu-icon-close">
                    <div class="icon-close"></div>
                </div>
            </nav>
            </div>
        </header>
