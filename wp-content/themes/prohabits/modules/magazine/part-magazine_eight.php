<section id="magazine_eight">
    <div class="container">
        <div class="magazine_eight__block">
            <div class="row">
                <?php

                // проверяем есть ли данные в гибком содержании
                if( have_rows('magazine_eight_block') ):

                    // перебираем данные
                    while ( have_rows('magazine_eight_block') ) : the_row();

                        if( get_row_layout() == 'left_block' ):


                            ?>
                <div class="magazine_eight__block">
                    <div class="row">
                            <div class="col-lg-6">
                                    <img src="<?php the_sub_field('image_left_block')?>" class="magazine_eight__img wow animate__slideInLeft" alt="<?php the_sub_field('image_alt_left_block') ?>"  data-wow-duration="2s">
                            </div>
                            <div class="col-lg-6">
                                <h1 class="wow animate__slideInRight" data-wow-duration="2s">
                                    <?php the_sub_field('header_left_block')?>
                                </h1>
                                <p class="wow animate__slideInRight" data-wow-duration="2s">
                                    <?php the_sub_field('text_left_block')?>
                                </p>
                            </div>
                    </div>
                </div>


                        <?php  endif;
                        if( get_row_layout() == 'right_block' ):


                            ?>
                <div class="magazine_eight__block">
                    <div class="row">
                            <div class="col-lg-6">
                                <h1 class="wow animate__slideInRight" data-wow-duration="2s">
                                    <?php the_sub_field('header_right_block')?>
                                </h1>
                                <p class="wow animate__slideInRight" data-wow-duration="2s">
                                    <?php the_sub_field('text_right_block')?>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php the_sub_field('image_right_block')?>" class="magazine_eight__img wow animate__slideInLeft" alt="<?php the_sub_field('image_alt_right_block')?>"  data-wow-duration="2s">
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


    </div>
</section>
