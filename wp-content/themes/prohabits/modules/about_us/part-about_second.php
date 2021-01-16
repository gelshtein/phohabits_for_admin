<section id="about_second" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/who_we_are_bh.webp')"
         data-bg="<?= bloginfo('template_directory'); ?>/img/who_we_are_bh.png"
         data-bg-webp="<?= bloginfo('template_directory'); ?>/img/who_we_are_bh.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="wow animate__slideInLeft" data-wow-duration="2s">
                    <?php the_field('header_about_second') ?>
                </h1>
                <p class="wow animate__slideInLeft" data-wow-duration="2s">
                    <?php the_field('text_about_second') ?>
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="who_we_are wow animate__slideInRight" data-wow-duration="2s">
                    <h3 class="wow animate__slideInRight" data-wow-duration="2s">
                        <?php the_field('block_title_about_second') ?>
                    </h3>
                    <p class="wow animate__slideInRight" data-wow-duration="2s">
                        <?php the_field('block_text_about_second') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
