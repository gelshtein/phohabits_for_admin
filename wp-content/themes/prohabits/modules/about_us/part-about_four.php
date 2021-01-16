<section id="about_four" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/women_bg.webp')"
         data-bg="<?= bloginfo('template_directory'); ?>/img/women_bg.png"
         data-bg-webp="<?= bloginfo('template_directory'); ?>/img/women_bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="wow animate__slideInLeft" data-wow-duration="2s">
                    <?php the_field('header_about_four') ?>
                </h1>
                <p class="wow animate__slideInLeft" data-wow-duration="2s">
                    <?php the_field('text_about_four') ?>
                </p>
                <a href="<?php the_field('button_link_about_four') ?>" class="main_btn wow animate__slideInLeft" data-wow-duration="2s"><?php the_field('button_text_about_four') ?></a>
            </div>
        </div>
    </div>
</section>
