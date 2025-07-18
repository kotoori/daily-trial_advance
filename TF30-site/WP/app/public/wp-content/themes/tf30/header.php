<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
  <?php if(is_archive()): ?>
    <meta property="og:title" content="<?php the_archive_title(); ?>">
    <meta property="og:site_name" content="<?php the_archive_title(); ?>">
    <?php $category = get_the_category();
      if($category && $category[0]): ?>
        <meta property="og:url" content="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>">
        <meta property="og:image" content="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>img/ogp.png">
      <?php else: ?>
        <meta property="og:url" content="">
        <meta property="og:image" content="">
      <?php endif; ?>
        <?php elseif(is_single()): ?>
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:site_name" content="<?php echo get_the_title(); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_the_permalink()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_the_permalink()); ?>img/ogp.png">
  <?php else : ?>
    <meta property="og:title" content="TF-30">
    <meta property="og:site_name" content="TF-30">
    <meta property="og:url" content="https://example.com/">
	<meta property="og:image" content="https://example.com/img/ogp.png">
  <?php endif; ?>
	<meta property="og:type" content="website">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon-home.png">
	<?php wp_head(); ?>
</head>

<body>
	<!-- header -->
	<header id="header">
		<div class="inner">

      <?php if (is_front_page()) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
        <h1 class="header-logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
      <?php else : ?>
        <div class="header-logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></div><!-- /header-logo -->
      <?php endif; ?>
      <div class="header-sub"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></div><!-- /header-sub -->

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
