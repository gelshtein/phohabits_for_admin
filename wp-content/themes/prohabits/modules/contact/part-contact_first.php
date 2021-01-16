<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('header_h3_contact') ?></h3>
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('header_h1_contact') ?></h1>
                <div class="contact_block wow animate__fadeInUp" data-wow-duration="2s">
                    <img src="<?php the_field('img_contact') ?>"  alt="<?php the_field('image_alt_contact') ?>">
                    <div class="contact_block__text">
                        <h4><?php the_field('image_name_contact') ?></h4>
                        <p><?php the_field('image_text_contact') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="form_block wow animate__fadeInRight" data-wow-duration="2s">
                    <?php the_field('contact_form') ?>
                </div>
            </div>
        </div>
    </div>
</section>
