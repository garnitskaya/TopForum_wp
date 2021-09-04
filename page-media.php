<?php
/*
Template Name:  Media
*/ 
?>


<?php
    get_header();
?>

    <section class="articles">
        <div class="container">
            <h1 class="title articles__title"><?php the_field("title"); ?></h1>
            <p class="text articles__text"><?php the_field('content'); ?></p>
            <div class="articles__items">
                <div class="wrap">
                    
                    <?php 
                 // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'articles',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>

                        <div class="articles-item block-item">
                        <div class="articles-item__img block-item__img">
                            <?php
                                $image = get_field('block_img');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                        </div>
                        <a href="#" class="articles-item__subtitle block-item__subtitle"><?php the_field('block_subtitle'); ?></a>
                        <div class="articles-item__descr block-item__descr"><?php the_field('block_descr'); ?></div>
                        </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс

                    ?>

                </div>
                <a class="button__beige button" href="<?php echo get_permalink(); ?>">Learn more</a>
            </div>

        </div>
    </section>

<?php
    get_footer();
?>