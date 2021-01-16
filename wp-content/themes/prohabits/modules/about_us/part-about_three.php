<section id="about_three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="wow animate__slideInDown" data-wow-duration="2s"><?php the_field('header_about_three') ?></h1>
            </div>
        </div>
        <div class="row">
            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('about_block') ):

                // перебираем данные
                while ( have_rows('about_block') ) : the_row();

                    if( get_row_layout() == 'block' ):


                        ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="about_three__block wow animate__slideInUp" data-wow-duration="2s">
                                <h2><?php the_sub_field('title_about_block') ?></h2>
                                <p>
                                    <?php the_sub_field('text_about_block') ?>
                                </p>
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
