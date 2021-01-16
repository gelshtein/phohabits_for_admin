<section id="blog_second">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <?php
                $url = $_SERVER['REQUEST_URI'];
                $url = explode('/', $url);
                $url = $url[1];



                if ($url =='magazine'){

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'posts_per_page' => 8,
                    'paged' => $paged,
                    'category_name' =>'blog-posts'
                );

                $custom_query = new WP_Query( $args );

                while($custom_query->have_posts()) :
                    $custom_query->the_post();
                    ?>

                <div class="blog_small_block wow animate__fadeInDown" data-wow-duration="2s">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="blog_small_text">
                        <p class="date"><?php the_time('M d, Y'); ?></p>
                        <h1 > <?php the_title(); ?></h1>
                        <p>
                            <?php
                            $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 15, '...' );
                            echo $trimmed_content;

                            ?>
                        </p>
                    </div>
                </div>








                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>



                    <?php
                }

                if ($url  =='Press'){

                $paged2 = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args2 = array(
                    'posts_per_page' => 8,
                    'paged' => $paged2,
                    'category_name' =>'press'
                );

                $custom_query2 = new WP_Query( $args2 );

                while($custom_query2->have_posts()) :
                $custom_query2->the_post();
                ?>

                <div class="blog_small_block wow animate__fadeInDown" data-wow-duration="2s">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="blog_small_text">
                        <p class="date"><?php the_time('M d, Y'); ?></p>
                        <h1 > <?php the_title(); ?></h1>
                        <p>
                            <?php
                            $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 15, '...' );
                            echo $trimmed_content;

                            ?>
                        </p>
                    </div>
                </div>


                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php
                }

                if ($url  =='Case Studies'){

                $paged3 = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args3 = array(
                    'posts_per_page' => 8,
                    'paged' => $paged3,
                    'category_name' =>'case-studies'
                );

                $custom_query3 = new WP_Query( $args3 );

                while($custom_query3->have_posts()) :
                $custom_query3->the_post();
                ?>

                <div class="blog_small_block wow animate__fadeInDown" data-wow-duration="2s">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="blog_small_text">
                        <p class="date"><?php the_time('M d, Y'); ?></p>
                        <h1 > <?php the_title(); ?></h1>
                        <p>
                            <?php
                            $content = get_the_content();
                            $trimmed_content = wp_trim_words( $content, 15, '...' );
                            echo $trimmed_content;

                            ?>
                        </p>
                    </div>
                </div>

                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php

                }

                    ?>

            </div>
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
