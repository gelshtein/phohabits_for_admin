
<?php
/*
 * Template name: Home
 */
?>
<?php get_header() ?>


<div class="main">

        <?php
        if ( have_posts() ) {

            // Load posts loop.
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content/content' );
            }

            // Previous/next page navigation.


        } else {

            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content/content', 'none' );

        }
        ?>

</div>




<?php get_footer() ?>

