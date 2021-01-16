<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <title>Prohabits</title>


   <!-- <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          as="style" onload="this.rel='stylesheet'">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="http://fonts.cdnfonts.com/css/avenir-next-cyr" rel="preload" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="preload" as="font">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />-->
    <link rel="preload" href="<?= bloginfo('template_directory'); ?>/css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="preload" href="<?= bloginfo('template_directory'); ?>/css/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">

    <?php wp_head(); ?>

</head>
<body>

<header >
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <a href="http://f0478686.xsph.ru/">
                <picture>
                    <source type="image/webp" srcset="<?= bloginfo('template_directory'); ?>/img/logo.webp" class="logo" >
                    <source type="image/jpeg" srcset="<?= bloginfo('template_directory'); ?>/img/logo.png" class="logo">
                    <img src="<?= bloginfo('template_directory'); ?>/img/logo.png" class="logo" alt="Here alt">
                </picture>
                </a>
            </div>
            <div class="col-lg-1 col-md-8 col-sm-6 col-5 ml-auto">

                    <div id="toggle">
                        <input type="checkbox">
                        <span></span>
                    </div>


                <div id="menu_small">

                    <?php

                    wp_nav_menu( [
                        'theme_location'  => 'header_menu',
                        'container'       => 'nav',
                        'container_class' => 'header_menu',
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
                        <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-10 col-11">
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
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                                <a href="https://www.linkedin.com/company/prohabitsplatform/"> <img src="<?= bloginfo('template_directory'); ?>/img/linkedin.svg" class="linkedin_burger" alt="Here alt"></a>

                            </div>

                    </div>
                </div>






                <input type="checkbox" id="hmt" class="hidden-menu-ticker">
                <label class="btn-menu act" for="hmt">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </label>
                <div class="hidden-menu">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-8 col-8">
                            <a href="http://f0478686.xsph.ru/">
                                <img src="<?= bloginfo('template_directory'); ?>/img/logo.png" class="logo" alt="Here alt">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php

                            wp_nav_menu( [
                                'theme_location'  => 'header_menu',
                                'container'       => 'nav',
                                'container_class' => 'header_menu',
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

                            <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-10 col-10">
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
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                                <a href="https://www.linkedin.com/company/prohabitsplatform/"><img src="<?= bloginfo('template_directory'); ?>/img/linkedin.svg" class="linkedin_burger" alt="Here alt"></a>

                            </div>
                        </div>

                </div>
                <!--<img src="</*= bloginfo('template_directory'); */?>/img/b_menu.png" class="b_menu">-->
            </div>
        </div>

    </div>

</header>
