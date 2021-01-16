<section id="ey_five">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('title_ey_five') ?></h1>
            </div>
        </div>
        <div class="row">
            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('ey_five_block') ):

                // перебираем данные
                while ( have_rows('ey_five_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-6">
                            <a href="" class="check-appear wow animate__fadeInUp" data-wow-duration="2s">
                                <img src="<?php the_sub_field('image_ey_five') ?>" alt="<?php the_sub_field('image_alt_ey_five') ?>">
                                <div class="ph-pioneers__image">
                                    <img src="<?php the_sub_field('logo_ey_five') ?>" data-src="" alt="<?php the_sub_field('logo_alt_ey_five') ?>">
                                    <p>► <?php the_sub_field('text_ey_five') ?></p>
                                </div>

                            </a>
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
