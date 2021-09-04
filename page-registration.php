<?php
/*
Template Name:  Registration
*/ 
?>


<?php get_header();?>


  <section class="registration">

        <div class="container">
            <h1 class="title registration__title">2 EASY STEPS TO REGISTER</h1>
            <div class="registration__condition ">
                <a class="registration__terms" href="#">FILL IN THE FORM IN ENGLISH</a>
                <img src="<? echo bloginfo('template_url'); ?>/assets/icons/arrow_2.png" alt="arrow">
                <a class="registration__terms" href="#">READ THOROUGHLY TERMS&CONDITIONS</a>
            </div>
            <div class="registration__form">
                <?php echo do_shortcode('[contact-form-7 id="538" title="Форма регистрации"]') ?>
            </div>

        </div>
    </section>

<?php get_footer(); ?>