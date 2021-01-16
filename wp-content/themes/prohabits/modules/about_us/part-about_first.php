<section id="about_first" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/about_us_main.webp')"
         data-bg="<?= bloginfo('template_directory'); ?>/img/about_us_main.png"
         data-bg-webp="<?= bloginfo('template_directory'); ?>/img/about_us_main.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="wow animate__slideInUp" data-wow-duration="2s" >
                    <?php the_field('header_about_first') ?>
                </h1>
                <p class="wow animate__slideInUp" data-wow-duration="2s">
                    <?php the_field('text_about_first') ?>
                </p>
            </div>
        </div>
    </div>
</section>
