<div class="blog_small_block wow animate__fadeInDown" data-wow-duration="2s">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                    <div class="blog_small_text">
                        <p class="date"><?php the_time('F j, Y'); ?></p>
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