<?php
/*
Template Name: page_detail
Template Post Type: post, page
*/ 
?>

<?php get_header(); ?>

<section class="detail">
        <div class="container">
            <h1 class="title detail__title"><?php the_field('detail_title'); ?></h1>
            <p class="text detail__text"><?php the_field('detail_text_1'); ?></p>
            <div class="detail__img">
                <?php
                                $image = get_field('detail_img');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
            </div>
            <p class="text detail__text">
                <?php the_field('detail_text_2'); ?>
            </p>
            <div class="detail__wrap">
                <div class="detail__image block-item__img">
                    <?php
                                $image = get_field('detail_img_2');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                </div>
                <div class="detail__image block-item__img">
                    <?php
                                $image = get_field('detail_img_3');

                                if(!empty($image)): ?>
                                    <img 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                </div>
            </div>
            <p class="text detail__text"><?php the_field('detail_text_3'); ?></p>
        </div>
    </section>

<?php get_footer(); ?>