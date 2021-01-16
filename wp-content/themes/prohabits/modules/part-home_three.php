<section id="home_three">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s">
                    <?php the_field('header_home_three') ?>
                </h1>
                <p data-wow-duration="2s" class="wow animate__fadeInUp">
                    <?php the_field('text_home_three') ?>

                </p>
            </div>
            <div class="col-lg-6">

                <?php

                // проверяем есть ли данные в гибком содержании
                if( have_rows('brand_block') ):

                    // перебираем данные
                    while ( have_rows('brand_block') ) : the_row();

                        if( get_row_layout() == 'block' ):


                            ?>

                            <div class="sponsors">
                                <img src="<?php the_sub_field('logo_brand_block') ?>" class="sponsor_img wow animate__fadeInDown" data-wow-duration="2s" alt="<?php the_sub_field('image_alt_brand_block') ?>">
                            </div>


                        <?php  endif;

                    endwhile;

                else :

                    // макетов не найдено

                endif;

                ?>



            </div>
        </div>
    </div>
</section>
