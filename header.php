<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php wp_head() ?>
</head>

<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <nav class="nav">

                    <?php
                        wp_nav_menu( [
                        'menu'            => 'Main', 
                        'container'       => false,
                        'menu_class'      => 'menu  menu__show',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu menu__show">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );
                        
                    ?>
                    <a class="button" href="<?php echo bloginfo('url'); ?>">TOP FORUM CLUB</a>
                </nav>
            </div>
                
            <div class="hamburger">
                <span></span> 
                <span></span> 
                <span></span>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="wrapper">
                <div class="header__logo">
                    <?php the_custom_logo(); ?>
                </div>
                    <div class="header__contacts">
                        <div class="header__contacts-item">
                            <a href="<?php echo get_permalink(431); ?>" class="header__contacts-img">
                                <img src="<?php echo bloginfo('template_url');?>/assets/icons/events.png" alt="events"> 
                            </a>
                            <a href="<?php echo get_permalink(431); ?>">UPCOMING EVENTS</a>
                        </div>
                        <div class="header__contacts-item">
                            <a href="<?php echo get_permalink(526); ?>" class="header__contacts-img">
                                <img src="<?php echo bloginfo('template_url');?>/assets/icons/contacts.png" alt="contacts"> 
                            </a>
                            <a href="<?php echo get_permalink(526); ?>">contacts</a>
                        </div>
                    </div><a class="button button__brown" href="<?php echo get_permalink(534); ?>">REGISTER NOW</a>
                </div>
            </div>
        </div>
    </header>