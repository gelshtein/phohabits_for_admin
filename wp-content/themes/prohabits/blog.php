<?php
/*
 * Template name: Blog
 */
?>
<?php get_header() ?>
<div class="main">
<?php get_template_part('modules/blog/part','blog_first'); ?>

<section id="blog_second">
    <div class="container">

        <div class="row">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'posts_per_page' => 3,
                'paged' => $paged,
                'category_name' =>'blog-posts'
            );

            $custom_query = new WP_Query( $args );

            while($custom_query->have_posts()) :
                $custom_query->the_post();
                ?>

                <div class="blog_second_block wow animate__fadeInDown" data-wow-duration="2s">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="blog_second_text">
                        <p class="date"><?php the_time('F j, Y'); ?></p>
                        <h2 id="big_title"> <?php the_title(); ?></h2>
                        <p>
                            <?php
                            $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 25, '...' );
                            echo $trimmed_content;

                            ?>
                        </p>
                    </div>
                </div>








            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="row">

            <?php

            // проверяем есть ли данные в гибком содержании
            if( have_rows('mini_blog') ):

                // перебираем данные
                while ( have_rows('mini_blog') ) : the_row();

                    if( get_row_layout() == 'big_block' ):


                        ?>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog_second_block wow animate__fadeInDown" data-wow-duration="2s">
                                <a href="<?php the_sub_field('big_link') ?>">
                                    <img src="<?php the_sub_field('big_img') ?>" alt="<?php the_sub_field('img_alt_blog') ?>">

                                </a>
                                <div class="blog_second_text">
                                    <p class="date"><?php the_sub_field('big_date') ?></p>
                                    <h2 id="big_title"> <?php the_sub_field('big_header') ?></h2>
                                    <p>
                                        <?php the_sub_field('big_text') ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <?php

                    elseif( get_row_layout() == 'preview_block' ):
                        ?>

                        <div class="col-lg-4">
                            <div class="blog_small_block wow animate__fadeInUp" data-wow-duration="2s">
                                <a href="<?php the_sub_field('link_blog') ?>">
                                    <img src="<?php the_sub_field('img_blog') ?>" alt="Here alt">
                                </a>

                                <div class="blog_small_text">
                                    <p class="date"><?php the_sub_field('datedate_blog_blog') ?></p>
                                    <h1><?php the_sub_field('header_blog') ?></h1>
                                    <p>
                                        <?php the_sub_field('text_blog') ?>

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
                <div class="blog_btn">
                    <a href="" class="main_btn wow animate__fadeInUp" data-wow-duration="2s">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer() ?>
