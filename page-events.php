<?php
/*
Template Name:  Events


*/ 
?>

<?php get_header(); ?>

 <section class="events">
        <div class="container">
            <h1 class="title events__title"><?php the_field('title'); ?></h1>
            <p class="text events__text"><?php the_field('content'); ?></p>
            <div class="events__items">

            
                  <?php 
                 // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'events',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>

                        <div class="events-item block-item">
                            <div class="events-item__img block-item__img">
                                <?php
                                $image = get_field('block_img');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>

                            <div class="sold-out" style="background-image:url(<?php 
                                    if(has_post_thumbnail()) { 
                                        the_post_thumbnail_url(); //устанавливаем привьюшку
                                    }
                                ?>)"></div>
                            </div>
                            <div class="events-item__wrap">
                                <h2 class="events-item__subtitle block-item__subtitle"><?php the_field('block_subtitle'); ?></h2>
                                <div class="events-item__date"><?php the_field('block_date'); ?></div>
                                <div class="events-item__descr block-item__descr"><?php the_field('block_descr'); ?></div>
                                <a class="button__beige button" href="<?php echo get_permalink(); ?>">Learn more</a>
                            </div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс

                    ?>

            </div>

        </div>
    </section>

<?php get_footer(); ?>