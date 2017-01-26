<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>
        <?php echo $site->title()->html() ?> |
        <?php echo $page->title()->html() ?>
    </title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta property="fb:app_id" content="811632688941917">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://matamala.info">
    <meta property="og:site_name" content="Alejandro Matamala O.">
    <meta property="og:title" content="Alejandro Matamala O. ">
    <meta property="og:image" content="http://matamala.info/content/matamala.jpg">
    <meta property="og:description" content="Based in Santiago de Chile, I work as an interactive strategist, designing and developing digital products and services. Also I do creative direction for printed matter, websites, exhibitions and business.
  My experience includes both commissioned and self-initiated projects in the fields of design, technology and communications. ">
        <meta name="twitter:card" content="Alejandro Matamala" />
        <meta name="twitter:site" content="@matamalaortiz" />
        <meta name="twitter:title" content="Alejandro Matamala" />
        <meta name="twitter:description" content="Portfolio" />
        <meta name="twitter:image" content="http://matamala.info/content/matamala.jpg" />

        <?php echo css('assets/css/style.css') ?>
        <?php echo css('assets/css/simplegrid.css') ?>
        <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon" />

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-62878348-1', 'auto');
            ga('send', 'pageview');
        </script>

</head>

<body>
