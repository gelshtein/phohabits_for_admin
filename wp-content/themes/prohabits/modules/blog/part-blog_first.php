<section id="blog_first">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="wow animate__slideInDown" data-wow-duration="2s"><?php the_field('title_blog_first') ?></h1>
            </div>
            <div class="col-lg-6">
                <div class="blo_menu wow animate__fadeInDown" data-wow-duration="2s">
                    <?php

                    wp_nav_menu( [
                        'theme_location'  => 'blog_menu',
                        'container'       => 'nav',
                        'container_class' => 'blog_menu',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="tabs__blog">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );
                    ?>
                </div>



            </div>
        </div>

    </div>
</section>


