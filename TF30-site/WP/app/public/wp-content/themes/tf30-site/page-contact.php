<?php get_header(); ?>

    <!-- main-visual -->
    <div class="mainvisual">
      <div class="inner">
        <div class="mainvisual-content">
          <h1 class="mainvisual-title">お問い合わせ</h1>
        </div>
      </div>
      <!-- /inner -->
    </div>
    <!-- /main-visual -->

    <div class="contact-breadcrumb">
      <div class="inner">
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
      <!-- /inner -->
    </div>
    <!-- /work-breadcrumb -->

    <!-- entry-contact -->
    <main class="entry-content-contact inner">
        <?php the_content(); ?>
    </main>
    <!-- /entry-contact -->

<?php get_footer(); ?>
