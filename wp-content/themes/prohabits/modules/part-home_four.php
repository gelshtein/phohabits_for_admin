<section id="home_four">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testi wow animate__fadeIn" data-wow-duration="3s">
                    <img src="<?php the_field('logo_home_fout') ?>" class="icon_testi " alt="<?php the_field('logo_alt_home_four') ?>" >
                    <h1><?php the_field('header_home_four') ?></h1>
                    <h4><?php the_field('author_home_four') ?></h4>
                    <p>
                        <?php the_field('authors_title_home_four') ?>
                    </p>
                    <img src="<?= bloginfo('template_directory'); ?>/img/best-seller.png" class="best-seller" alt="Best Seller" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center see_more wow animate__fadeInUp" data-wow-duration="3s">
                <a href="<?php the_field('button_link_home_four') ?>" class="see_more" style="text-decoration: none"><?php the_field('button_text_home_four') ?></a>
            </div>
        </div>
    </div>
</section>
