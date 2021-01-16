<section id="magazine_nine">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1 class="wow animate__slideInDown" data-wow-duration="2s"><?php the_field('header_magazine_nine') ?></h1>
                <p class="wow animate__slideInDown" data-wow-duration="2s">
                    <?php the_field('text_magazine_nine') ?>
                </p>
            </div>
        </div>
        <div class="row">

            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('magazine_nine_block') ):

                // перебираем данные
                while ( have_rows('magazine_nine_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 col-6">
                            <div class="magazine_nine__block wow animate__fadeInUp" data-wow-duration="2s">
                                <div class="img_block">
                                    <img src="<?php the_sub_field('image_magazine_nine_block') ?>" class="magazine_nine__img" alt="<?php the_sub_field('image_alt_magazine_nine_block') ?>">
                                    <p>
                                        <?php the_sub_field('text_magazine_nine_block') ?>
                                    </p>
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
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php the_field('button_link_magazine_nine') ?>" class="magazine_nine_btn wow animate__slideInUp" data-wow-duration="2s"><?php the_field('see_all_magazine_nine') ?></a>
            </div>
        </div>
    </div>
</section>
