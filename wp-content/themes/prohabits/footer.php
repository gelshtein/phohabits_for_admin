<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-12">
                <a href="http://f0478686.xsph.ru/">
                <img src="<?= bloginfo('template_directory'); ?>/img/logo_footer.png" class="footer_logo" alt="Here alt" >
                </a>
            </div>
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <?php

                wp_nav_menu( [
                    'theme_location'  => 'footer_menu',
                    'container'       => 'nav',
                    'container_class' => 'footer_menu',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>

            </div>
        </div>
        <div class="footer_block">
        <div class="row">

                <div class="col-lg-7 col-md-11 col-sm-11 col-10">
                    <?php

                    wp_nav_menu( [
                        'theme_location'  => 'footer_menu_linkedin',
                        'container'       => 'nav',
                        'container_class' => 'footer_menu_linkedin',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );
                    ?>

                </div>
                <div class="col-lg-1 offset-lg-4 col-md-1 col-sm-1 col-1">
                    <a href="https://www.linkedin.com/company/prohabitsplatform/"> <img src="<?= bloginfo('template_directory'); ?>/img/linkedin.svg" class="linkedin" alt="Here alt"></a>

                </div>
            </div>

        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" ></script>
<script src="<?= bloginfo('template_directory'); ?>/js/main.js" ></script>

<?php wp_footer(); ?>
</body>
</html>
