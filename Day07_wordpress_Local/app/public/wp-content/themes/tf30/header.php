<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<meta property="og:title" content="TF-30">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com/">
	<meta property="og:image" content="https://example.com/img/ogp.png">
	<meta property="og:site_name" content="TF-30">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon-home.png">
	<?php wp_head(); ?>
</head>

<body>

	<!-- header -->
	<header id="header">
		<div class="inner">

			<h1 class="header-logo"><a href="/">TF-30</a></h1><!-- /header-logo -->
			<div class="header-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /header-sub -->

			<!-- drawer -->
			<div class="drawer">
				<div class="drawer-icon">
					<span class="drawer-open"><i class="fas fa-bars"></i></span><!-- /drawer-open -->
					<span class="drawer-close"><i class="fas fa-times"></i></span><!-- drawer-close -->
				</div><!-- /drawer-icon -->

				<!-- drawer-content -->
				<div class="drawer-content">
					<nav class="drawer-nav">
          <?php 
            wp_nav_menu(
              array(
                'depth' => 1,
                'theme_location' => 'drawer',
                'container' => '',
                'menu_class' => 'drawer-list',
              )
            );
          ?>
					</nav>
				</div><!-- /drawer-content -->
			</div><!-- /drawer -->

		</div><!-- /inner -->
	</header><!-- /header -->

	<!-- header-nav -->
	<nav class="header-nav">
		<div class="inner">
      <?php
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'global',
            'container' => '',
            'menu_class' => 'header-list',
          )
        );
      ?>
		</div><!-- /inner -->
	</nav><!-- header-nav -->
