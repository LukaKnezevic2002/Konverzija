<?php
/**
 * The header for our theme.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <?php
    if ( is_page( 43 ) ) {
    echo '<meta name="robots" content="noindex">'."\n";
    echo '<link rel="stylesheet" href="/wp-content/themes/konverzija/style-dev.css">'."\n";
    } else {
        echo '<link rel="stylesheet" href="/wp-content/themes/konverzija/style.css?ver=2.1.9">'."\n";
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Konverzija - Regionalna digital marketing konferencija</title>
    <meta name="description"
        content="Konverzija je dvodnevna napredna digital marketing konferencija koja se održava svakog aprila u Banjoj Luci." />


    <link rel="icon" href="/wp-content/themes/konverzija/images/favicon.png"
        sizes="16x16 32x32" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="/wp-content/themes/konverzija/images/favicon.png" type="image/png"
        sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="/wp-content/themes/konverzija/images/favicon.png" type="image/png"
        sizes="120x120">



    <meta property="og:title" content="Konverzija - Regionalna digital marketing konferencija" />
    <meta property="og:description" content="20 dokazanih stručnjaka 2 dana nesebično dijele praktično znanje." />
    <meta property="og:url" content="https://www.konverzija.org/" />
    <meta property="og:image" content="/wp-content/themes/konverzija/images/konverzija-regionalna-digital-marketing-konferencija.jpg" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Konverzija - Regionalna digital marketing konferencija" />
    <meta name="twitter:description" content="20 dokazanih stručnjaka 2 dana nesebično dijele praktično znanje." />
    <meta name="twitter:image" content="https://www.konverzija.org/wp-content/themes/konverzija/images/konverzija-regionalna-digital-marketing-konferencija.jpg" />

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TCLQQWC');</script>
<!-- End Google Tag Manager -->

    <!-- Style -->

    <link rel="stylesheet" href="/wp-content/themes/konverzija/swiper/swiper-bundle.min.css">

    <!-- JS -->
    <script src="/wp-content/themes/konverzija/swiper/swiper-bundle.min.js"></script>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"> 
        <script src="//code.jivosite.com/widget.js" data-jv-id="p0PRIBKRa0" async></script>
    </head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCLQQWC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="overlay"></div>
    <header>
        <div class="container">
            <div class="row">
                <div class="column-12">
                    <a href="/" class="logo"><img src="/wp-content/themes/konverzija/images/logo_konverzija.svg"
                            alt="Konverzija Logo"></a>
                    <div class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="text">MENI</span>
                    </div>
                    <nav class="main-menu" id="menu">
                        <ul class="menu-inner">
                            <li class="menu-item"><a href="/#program" class="menu-link"><img
                                        src="/wp-content/themes/konverzija/images/kvacica.svg"> Program</a></li>
                            <li class="menu-item"><a href="/#newsletter" class="menu-link"><img
                                        src="/wp-content/themes/konverzija/images/kvacica.svg"> Newsletter</a></li>
                                       
                            <li class="menu-item"><a href="/akademija/" class="menu-link"><img
                                        src="/wp-content/themes/konverzija/images/kvacica.svg"> Akademija</a></li>
                            <li class="menu-item"><a href="/blog/" class="menu-link"><img
                                        src="/wp-content/themes/konverzija/images/kvacica.svg"> Blog</a></li>
                        </ul>
                    </nav>
                    <a href="#ulaznice" class="button">Kupi ulaznice</a>
                </div>
            </div>
        </div>
    </header>