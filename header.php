<?php /*?><?php
 session_start();
 error_reporting(E_ALL);
 ini_set('display_errors', '1');
?><?php */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="keywords" content="webcoding, web coding, andrei teodorescu, front-end developer, front end developer, ux developer, web designer, psd-sketch to html services" />
	
	<link rel="canonical" href="http://webcoding.ro/">
	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Temporary start -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_old.css" media="all" />
    <!-- Temporary end -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/dist/css/style.css" media="all" />

	<?php wp_head(); ?>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "email": "mailto:andrei.teodorescu83@gmail.com",
      "jobTitle": "Front-end Developer",
      "name": "Andrei Teodorescu",
      "description": "Andrei Teodorescu - Experienced front-end developer from Bucharest. PSD/Sketch to HTML Expert. Wordpress CMS integration. Producing high quality responsive websites and exceptional user experience.",
      "telephone": "+40.744.570.164",
      "url": "https://www.webcoding.ro"
    }
    </script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-103695124-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<!--<div class="wrapper clear" id="wrapper">
	<header class="header clear">
		<div class="container">
			<a class="title" href="/" title="Webcoding by Andrei Teodorescu">
				<img src="<?php /*bloginfo('template_directory'); */?>/images/webcoding-logo.png" alt="Webcoding logo">
			</a>
			
			<nav class="menu">				
				<button type="button" class="button-menu hidden" id="menu-trigger" data-menu-state="collapsed">
					<span></span>
				</button>
				
				<ul class="menu-inner" id="menu">
					<?php /*wp_nav_menu(array('menu' => 'Header Menu', 'container' => false, 'items_wrap' => '%3$s')); */?>
				</ul>
			</nav>
		</div>
	</header>-->




    <div class="container">
        <nav class="navbar d-flex justify-content-between justify-content-sm-start">

            <a class="navbar-brand" href="/" title="Webcoding by Andrei Teodorescu">
                <img src="<?php bloginfo('template_directory'); ?>/images/webcoding-logo.png" alt="Webcoding logo">
            </a>

            <button id="navbar-toggler" class="navbar-toggler d-block d-sm-none" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="navbar-toggler-icon"></i>
            </button>

            <div class="navbar-collapse d-flex flex-grow-1 justify-content-sm-end" id="navbarNav">
                <ul class="list-unstyled navbar-nav d-flex align-items-center flex-column flex-sm-row">
                    <?php wp_nav_menu(array('menu' => 'Header Menu', 'container' => false, 'items_wrap' => '%3$s')); ?>
                </ul>
            </div>

        </nav>
    </div>