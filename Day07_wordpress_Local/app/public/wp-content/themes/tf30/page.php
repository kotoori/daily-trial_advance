<?php get_header(); ?>


<!-- content -->
<div id="content" class="m_one">
<div class="inner">

<!-- primary -->
<main id="primary">

<?php if(function_exists('bcn_display')): ?>
  <!-- breadcrumb -->
  <div class="breadcrumb">
    <?php bcn_display(); ?>
  </div><!-- /breadcrumb -->
<?php endif; ?>

<!-- entry -->
<?php if(have_posts()): ?>
<?php while(have_posts()): ?>
<?php the_post(); ?>
<article class="entry m_page">

<!-- entry-header -->
<div class="entry-header">
	<h1 class="entry-title"><?php the_title() ?></h1><!-- /entry-title -->
  <?php if(has_post_thumbnail()): ?>
    <div class="entry-img"><?php the_post_thumbnail() ?></div><!-- /entry-img -->
  <?php else: ?>
    <div class="entry-img"><img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt=""></div><!-- /entry-img -->
  <?php endif; ?>
  </div><!-- /entry-header -->

<!-- entry-body -->
<div class="entry-body">
  <?php the_content(); ?>
  <?php
    wp_link_pages(
      array(
        'before' => '<nav class="entry-links">',
        'after' => '</nav>',
        'link_before' => '',
        'link_after' => '',
        'next_or_number' => 'number',
        'separator' => '',
      )
    );?>
</div><!-- /entry-body -->
</article><!-- /entry -->
<?php endwhile; ?><!-- hove_posts() -->
<?php endif; ?><!-- hove_posts() -->
</main><!-- /primary -->

<?php get_sidebar(); ?>

</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>