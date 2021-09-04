    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <nav class="nav">
                
                    <div class="wrap__border">
                        <h2>
                            <a href="<?php echo bloginfo('url'); ?>" class="menu__title">TOP FORUM</a>
                        </h2>
                          <?php
                            wp_nav_menu( [
                            'menu'            => 'Footer', 
                            'container'       => false,
                            'menu_class'      => 'menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="menu">%3$s</ul>',
                            'depth'           => 0,
                        ] );
                            
                        ?>
                    </div>
                    <div class="wrap">
                        <h2>
                            <a href="<?php echo get_permalink(526); ?>" class="menu__title">contact</a>
                        </h2>
                        <ul class="menu">
                            <li><a class="menu__item" href="<?php echo bloginfo('url'); ?>"><?php the_field('name'); ?></a></li>
                            <li><a class="menu__item" href="#"><?php the_field('address', 2); ?></a></li>
                            <li><br><br></li>
                            <li><a class="menu__item" href="<?php the_field('phone',2); ?>"><?php the_field('phone', 2); ?></a></li>
                            <li><a class="menu__item" href="<?php the_field('mail', 2); ?>"><?php the_field('mail', 2); ?></a></li>
                        </ul>
                    </div>
                </nav><a class="follow" href="#">FOLLOW us</a>
            </div>
            <div class="footer-bottom">
                <div class="copyright">© 2014 Top Forum Group. All rights reserved.</div>
                <div class="development">Website development: <span>Alena Garnitskaya</span></div>
            </div>
        </div>
    </footer>
    <div class="modal">
        <div class="modal__content">
            <div class="modal__close">&times;</div>
            <div class="modal__title">SUBSCRIBE</div>
            <div class="modal__descr">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="feed-form">
                <?php echo do_shortcode('[contact-form-7 id="72" title="Контактная форма 1"]') ?>
            </div>
        </div>
    </div>

    <a class="pageup">
        <img src="<?php echo bloginfo('template_url');?>/assets/icons/arrow_up.png" alt="up">
    </a>

    <?php wp_footer() ?>
    
</body>

</html>