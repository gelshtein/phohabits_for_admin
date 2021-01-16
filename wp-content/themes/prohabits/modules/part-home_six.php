<section id="home_six">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h2 class="wow animate__fadeInUp" data-wow-duration="2s" ><?php the_field('header_home_six') ?></h2>
                    <h4 class="wow animate__fadeInUp" data-wow-duration="2s" ><?php the_field('name_agency_home_six') ?></h4>
                    <h5 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('title_home_six') ?></h5>
                    <p class="wow animate__fadeInUp" data-wow-duration="2s">
                        <?php the_field('text_home_six') ?>
                    </p>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="home_six__feedback wow animate__fadeInUp" data-wow-duration="2s">

                            <img src="<?php the_field('image_feedback_home_six') ?>" class="feedback_img" alt="<?php the_field('image_feedback_alt_home_six') ?>">


                        <p class="heading">
                            <?php the_field('title_feedback_home_six') ?>
                        </p>
                        <p class="text" >
                            <?php the_field('text_feedback_home_six') ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testi_block wow animate__fadeInUp" data-wow-duration="2s">
                        <img src="<?php the_field('image_avatar_home_six') ?>" class="testi_icon_img" alt="<?php the_field('image_avatar_alt') ?>">
                        <p class="">
                            <?php the_field('text_review_home_six') ?>
                        </p>
                        <div class="signature">
                            <h3 class=""><?php the_field('author_review_home_six') ?></h3>
                            <p class="" data-wow-duration="2s">
                                <?php the_field('author_title_home_six') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
