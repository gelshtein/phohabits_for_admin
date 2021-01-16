<section id="magazine_first" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/magazine_bg.webp')"
         data-bg="<?= bloginfo('template_directory'); ?>/img/magazine_bg.png"
         data-bg-webp="<?= bloginfo('template_directory'); ?>/img/magazine_bg.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('title_magazine_first') ?></h3>
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s"> <?php the_field('header_magazine_first') ?></h1>
                <p class="wow animate__fadeInUp" data-wow-duration="2s">
                    <?php the_field('text_magazine_first') ?>
                </p>
                <div class="wow animate__fadeInUp" data-wow-duration="2s">
                    <?php the_field('button_magazine_first') ?></div>
            </div>
        </div>
    </div>
</section>
