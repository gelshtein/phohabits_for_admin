
<section id="home_first" style="background-image: url('<?= bloginfo('template_directory'); ?>/img/main_bg.webp')"
         data-bg="<?= bloginfo('template_directory'); ?>/img/main_bg.png"
         data-bg-webp="<?= bloginfo('template_directory'); ?>/img/main_bg.webp">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <h1 class="main_h1 wow animate__fadeInUp" data-wow-duration="2s" >

                <?php the_field('header_home__first') ?>
                </h1>
                <p class="wow animate__fadeInUp" data-wow-duration="2s">
                    <?php the_field('text_home__first') ?>
                </p>
                <div class="block_form wow animate__fadeInUp" data-wow-duration="2s">
                    <?php the_field('form_main') ?>
                </div>


            </div>
        </div>

    </div>

</section>

