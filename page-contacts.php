<?php
/*
Template Name:  Contacts
*/ 
?>


<?php
    get_header();
?>


    <section class="contacts">
        <div class="container">
            <div class="wrap"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13643.888033894249!2d34.78116623757187!3d31.249198203360695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502666c978e4235%3A0xa49be2ab44e2427f!2z2K3ZiiDYo9iMINCR0LXRjdGALdCo0LXQstCwLCDQmNC30YDQsNC40LvRjA!5e0!3m2!1sru!2sua!4v1622579250290!5m2!1sru!2sua"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contacts__blocks">
                    <div class="contacts-block">
                        <h2 class="contacts-block__title"><?php the_field('contacts_title_1'); ?></h2>
                        <div class="contacts-block__name"><?php the_field('contacts_name_1'); ?></div>
                        <a class="contacts-block__email" href="<?php the_field('contacts_mail_1'); ?>">E:
                            <span><?php the_field('contacts_mail_1'); ?></span></a>
                        <a class="contacts-block__tel" href="<?php the_field('contacts_phone_1'); ?>"><?php the_field('contacts_phone_1'); ?></a>
                    </div>
                    <div class="contacts-block">
                        <h2 class="contacts-block__title"><?php the_field('contacts_title_2'); ?></h2>
                        <div class="contacts-block__name"><?php the_field('contacts_name_2'); ?></div>
                        <a class="contacts-block__email" href="<?php the_field('contacts_mail_2'); ?>">E:
                            <span><?php the_field('contacts_mail_2'); ?></span></a>
                        <a class="contacts-block__tel" href="<?php the_field('contacts_phone_2'); ?>">P: <?php the_field('contacts_phone_2'); ?></a>
                    </div>
                    <div class="contacts-block">
                        <h2 class="contacts-block__title"><?php the_field('contacts_title_3'); ?></h2>
                        <div class="contacts-block__name"><?php the_field('contacts_name_3'); ?></div>
                        <a class="contacts-block__email" href="<?php the_field('contacts_mail_3'); ?>">е:
                            <span><?php the_field('contacts_mail_3'); ?></span></a>
                        <a class="contacts-block__tel" href="<?php the_field('contacts_phone_3'); ?>">P: <?php the_field('contacts_phone_3'); ?></a>
                    </div>
                    <div class="contacts-block">
                        <h2 class="contacts-block__title"><?php the_field('contacts_title_4'); ?></h2>
                        <div class="contacts-block__name"><?php the_field('contacts_name_4'); ?></div>
                        <a class="contacts-block__email" href="<?php the_field('contacts_mail_4'); ?>">E:
                            <span><?php the_field('contacts_mail_4'); ?></span></a>
                        <a class="contacts-block__tel" href="<?php the_field('contacts_phone_4'); ?>">P: <?php the_field('contacts_phone_4'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <h2 class="feedback__title title">FEEDBACK</h2>
            <div class="wrap">
                
                <?php echo do_shortcode( '[contact-form-7 id="575" title="Форма обратной связи"]') ?>
                
                <div class="feedback__info info">
                    <div class="info__text-fw500">You can also ask questions by phone of a hot line:</div>
                    <a class="info__tel" href="<?php the_field('info_tel'); ?>"><?php the_field('info_tel'); ?></a>
                    <div class="info__text-fw400">The answers to many questions already in our <a class="info__link"
                            href="<?php the_field('info_link'); ?>">FAQ</a></div>
                    <div class="info__text-fw300">All suggestions and comments are considered mandatory!</div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>