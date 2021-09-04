<?php
    get_header();
?> 
    
    <section class="promo" style="background-image:url('<?php the_field('background');?>');">
        <div class="container">
            <div class="wrap">
                <div class="promo__slide">

                    <?php 
                 // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'category_name'    => 'promo__slide',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>

                        <div class="promo__date">
                        <div class="day"><?php the_field('promo_day'); ?></div>
                        <div class="mounth"><?php the_field('promo_mounth'); ?></div>
                        <div class="year"><?php the_field('promo_year'); ?></div>
                    </div>
                    <div class="promo__block">
                        <div class="promo__descr">
                            <h1 class="promo__title"><?php the_field('promo_title'); ?></h1>
                            <p class="promo__text"><?php the_field('promo_text'); ?></p>
                            <div class="promo__addr"><?php the_field('promo_addr'); ?></div>
                        </div>
                    </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс

                    ?>

                </div>
                <div class="btn-prev">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/left.png" alt="prev">
                </div>
                <div class="btn-next">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/right.png" alt="next">
                </div>
                <div class="dots-wrapper"></div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="content__text">
                <?php the_field('content'); ?> 
            </div>
            <div class="content__items">
                <?php 
                 // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'content',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>

                        <div class="item-content">
                            <div class="item-content__img">
                                <img src="<?php the_field('content_img'); ?>" alt="TOP FORUM">
                            </div>
                            <h2 class="item-content__title"><?php the_title(); ?> </h2>
                            <div class="item-content__text">
                                <?php the_field('content_descr'); ?>
                            </div>
                            <a href="<?php the_field('content_link'); ?>" class="button__beige button">Learn more</a>
                            <div class="item-content__sign"><?php the_field('content_sign'); ?></div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс

                    ?>
            </div>
            <div class="buttons">
                <a class="button button__brown" href="<?php echo get_permalink(534); ?>">REGISTER NOW</a> 
                <a class="button button__black" href="#">SUBSCRIBE</a>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviews__wrap">
                <h2 class="title reviews__title">CUSTOMER reviews</h2>
                <div class="reviews__items">
                    <div class="reviews__items-wrap">

                        <?php 
                     // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'reviews',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                    
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                    
                            
                        <div class="reviews-item">
                            <div class="reviews-item__img" style="background-image:url(<?php 
                            if(has_post_thumbnail()) { 
                                the_post_thumbnail_url(); //устанавливаем привьюшку
                            } else{
                                echo get_template_directory_uri() . '/assets/icons/foto.png'; //если она не установлена будем подставлять эту
                            }
                        ?>)">
                            </div>
                            <div class="reviews-item__block">
                                <div class="reviews-item__title"><?php the_title(); ?></div>
                                <div class="reviews-item__date"><?php the_field('reviews_date'); ?></div>
                                <div class="reviews-item__text"><?php the_field('reviews_text'); ?></div>
                            </div>
                        </div>
                    
                        <?php
                        }
                    
                        wp_reset_postdata(); // сброс
                    
                        ?>
                    </div>
                </div>
                <div class="reviews__btn">
                    <div class="reviews__btn-prev btn-prev">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/left_1.png" alt="prev">
                    </div>
                    <div class="reviews__btn-next btn-next">
                        <img src="<?php echo bloginfo('template_url');?>/assets/icons/right_1.png" alt="next">
                    </div>
                </div>
                <div id="reviews-dots" class="dots-wrapper"></div>
            </div>
        </div>
    </section>
    <section class="promo-vlog">
        <div class="container">
            <h2 class="title promo-vlog__title">Promo video</h2>
            <div class="promo-vlog__item">
                <?php echo do_shortcode( '[evp_embed_video]' ); ?>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <h2 class="title clients__title">OUR CLIENTS</h2>
            <div class="clients__wrap">
                <div class="clients__slides">
                    <div class="clients__slide">
                    
                    <?php 
                     // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'our_clients',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                    
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                    
                            <div class="slide__item">
                                <div class="slide__item-wrap">
                                <?php
                                        $image = get_field('clients_img');
                                
                                        if(!empty($image)): ?>
                                            <img 
                                            src="<?php echo $image['url']; ?>" 
                                            alt="<?php echo $image['alt']; ?>">
                                        <?php endif;
                                    ?>
                                </div>
                            </div>
                    
                            <?php
                        }
                    
                        wp_reset_postdata(); // сброс
                    
                        ?>
                    </div>
                </div>
                <div  id="btn-prev" class="btn-prev">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/left_1.png" alt="prev">
                </div>
                <div id="btn-next" class="btn-next">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/right_1.png" alt="next">
                </div>
                <div class="dots-wrapper-clients"></div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?> 