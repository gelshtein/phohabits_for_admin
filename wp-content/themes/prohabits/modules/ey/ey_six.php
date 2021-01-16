<section id="ey_six">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s"><?php the_field('header_ey_six') ?></h1>
            </div>
        </div>
        <div class="row">
            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('ey_six_block') ):

                // перебираем данные
                while ( have_rows('ey_six_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-4 text-center">
                            <div class="block_ey_six wow animate__fadeInUp" data-wow-duration="2s">
                                <img src="<?php the_sub_field('icon_ey_six') ?>" alt="<?php the_sub_field('icon_alt_ey_six') ?>">
                                <h3><?php the_sub_field('title_ey_six_block') ?></h3>
                                <p><?php the_sub_field('text_ey_six_block_копия') ?></p>
                            </div>
                        </div>


                    <?php  endif;

                endwhile;

            else :

                // макетов не найдено

            endif;

            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img src="<?php the_field('image_six_block') ?>" alt="<?php the_field('image_alt_six_block') ?>" class="wow animate__fadeInDown" data-wow-duration="2s">
            </div>
        </div>
    </div>
</section>
