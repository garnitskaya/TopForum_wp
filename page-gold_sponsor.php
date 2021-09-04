<?php
/*
Template Name: Gold Sponsors
*/ 
?>

<?php
    get_header();
?>

  <section class="sponsors">
        <div class="container">
            <h1 class="title sponsors__title"><?php the_field('title'); ?></h1>
            <p class="text sponsors__text"><?php the_field('content'); ?></p>
            <div class="item-select">
                <label for="conferences">please select a conference</label>
                <select class="item-select__box" name="conferences" id="conferences">
                    <option value="conferences_1">Wealth TOP FORUM Israel 2016</option>
                    <option value="conferences_2">Another name of the conference</option>
                    <option value="conferences_3"> Another name of the conference 2016</option>
                </select>
            </div>
            <div class="sponsors__items">

                  <?php 
                 // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'sponsors',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>

                    <div class="sponsors-item block-item">
                        <a href="#" class="sponsors-item__title block-item__title"><?php the_title(); ?></a>
                        <div class="sponsors-item__img block-item__img">
                            <?php
                                $image = get_field('block_img');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                        </div>
                        <div class="sponsors-item__subtitle block-item__subtitle"><?php the_field('block_subtitle'); ?></div>
                        <div class="sponsors-item__descr block-item__descr"><?php the_field('block_descr'); ?></div>
                        <a class="button__beige button" href="<?php echo get_permalink(); ?>">Learn more</a>
                    </div>

                        <?php
                    }

                    wp_reset_postdata(); // сброс

                    ?>

            </div>
        </div>
    </section>


<?php
    get_footer();
?>