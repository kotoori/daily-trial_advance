<?php 
/*
Template Name: 「当社について」用のテンプレート
*/
?>

<?php get_header(); ?>
<!-- main-visual -->
<div class="mainvisual">
  <div class="inner">
    <div class="mainvisual-content">
      <h1 class="mainvisual-title is-page-about"><?php the_title(); ?></h1>
    </div>
  </div>
  <!-- /inner -->
</div>
<!-- /main-visual -->

<div class="work-breadcrumb">
  <div class="inner">
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <?php if(function_exists('bcn_display')): ?>
        <?php bcn_display(); ?>
      <?php else: ?>
        <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" href="<?= home_url('/'); ?>" class="home"
            ><span property="name">ホーム</span></a
          >
          <meta property="position" content="1" />
        </span>
        <i class="fas fa-angle-right"></i>
        <span class="current-item"><?php the_title(); ?></span>
      <?php endif; ?>
    </div>
    <!-- /breadcrumb -->
  </div>
  <!-- /inner -->
</div>
<!-- /work-breadcrumb -->

<main class="page-about" id="page-about">
  <?php if(have_posts()){
    while(have_posts()){
      the_post();
      the_content();
    }
  }
  ?>
</main>

<?php get_footer(); ?>