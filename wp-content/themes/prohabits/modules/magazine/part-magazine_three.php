<section id="magazine_three">
    <div class="container">
        <div class="row">

            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('magazine_block') ):

                // перебираем данные
                while ( have_rows('magazine_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="company wow animate__fadeInUp" data-wow-duration="2s">
                                <img src="<?php the_sub_field('icon_brand') ?>" class="company_img first_icon" alt="Here alt">
                            </div>
                            <div class="magazine_three__block wow animate__fadeInUp" data-wow-duration="2s">
                                <img src="<?php the_sub_field('img_magazine_three') ?>" class="icon_magazine" alt="Here alt">
                                <p class="testi">
                                    <?php the_sub_field('quote_magazine_three') ?>
                                </p>
                                <h3 class="" data-wow-duration="2s"> <?php the_field('name_magazine_three') ?></h3>
                                <p class="" data-wow-duration="2s">
                                    <?php the_sub_field('signature_magazine_three') ?>
                                </p>
                                <div class="play_video__block" >
                                    <?php the_sub_field('link_play_video') ?>
                                </div>
                            </div>
                        </div>


                    <?php  endif;

                endwhile;

            else :

                // макетов не найдено

            endif;

            ?>
        </div>
    </div>

</section>
