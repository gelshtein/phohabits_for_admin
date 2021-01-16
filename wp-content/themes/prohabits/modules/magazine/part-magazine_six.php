<section id="magazine_six">
    <div class="container">
        <div class="row">
            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('magazine_six_block') ):

                // перебираем данные
                while ( have_rows('magazine_six_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="magazine_six__block wow animate__fadeInDown" data-wow-duration="2s">
                                    <img src="<?php the_sub_field('image_magazine_six_block') ?>"  alt="<?php the_sub_field('image_alt_magazine_six_block') ?>" class="magazine_six__img">
                                <p class="comment">
                                    <?php the_sub_field('text_magazine_six_block') ?>
                                </p>
                                <p class="comment_author">
                                    <?php the_sub_field('author_magazine_six_block') ?>
                                </p>
                                <p class="text">
                                    <?php the_sub_field('description_magazine_six_block') ?>
                                </p>
                                <p class="p_bottom">
                                    <?php the_sub_field('bottom_text_magazine_six_block') ?>
                                </p>
                                <a href="<?php the_sub_field('button_link_magazine_six_block') ?>" class="i_commit"><?php the_sub_field('button_text_magazine_six_block') ?></a>
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
