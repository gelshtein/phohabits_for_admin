<section id="ey_seven">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="wow animate__fadeInUp" data-wow-duration="2s"> <?php the_field('title_ey_seven') ?></h1>

            </div>
        </div>
        <div class="row">
            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('ey_seven_block') ):

                // перебираем данные
                while ( have_rows('ey_seven_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-4 text-center">
                            <a href="mailto:<?php the_sub_field('email_ey_seven') ?>" >
                            <div class="block_ey_seven wow animate__fadeInDown" data-wow-duration="2s">
                                    <img src="<?php the_sub_field('photo_ey_seven') ?>" alt="<?php the_sub_field('photo_alt_ey_seven') ?>">
                                   <div class="block_ey_seven_text">
                                        <h3><?php the_sub_field('name_ey_seven') ?></h3>
                                        <p><?php the_sub_field('text_ey_seven') ?></p>
                                   </div>
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
