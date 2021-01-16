<section id="magazine_eleven">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="wow animate__slideInDown" data-wow-duration="2s"><?php the_field('header_magazine_eleven') ?></h1>
            </div>
        </div>
        <div class="row">
            <?php

            $paged4 = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args4 = array(
                'posts_per_page' => 3,
                'paged' => $paged4,

            );

            $custom_query4 = new WP_Query( $args4 );

            while($custom_query4->have_posts()) :
                $custom_query4->the_post();
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="magazine_eleven__block wow animate__fadeInUp"  data-wow-duration="2s">
                        <div>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                        </div>
                        <div class="block_text">
                            <h3><?php the_time('M d, Y'); ?></h3>
                            <h1 class="magazine_eleven__block_h1"><?php the_title(); ?></h1>
                            <p>
                                <?php
                                $content = get_the_content();
                                $trimmed_content = wp_trim_words( $content, 15, '...' );
                                echo $trimmed_content;

                                ?>
                            </p>
                        </div>
                    </div>
                </div>



            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>







        </div>
    </div>
</section>
