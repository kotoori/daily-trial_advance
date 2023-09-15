
  <?php get_header(); ?>
	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span>
					<i class="fas fa-angle-right"></i>
					<span class="current-item">カテゴリー名</span>
				</div><!-- /breadcrumb -->


				<div class="archive-head m_description">
					<div class="archive-lead">ARCHIVE</div>
					<h1 class="archive-title m_category">カテゴリー名</h1><!-- /archive-title -->
					<div class="archive-description">
						<p>
							カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明
						</p>
					</div><!-- /archive-description -->
				</div><!-- /archive-head -->


				<!-- entries -->
				<div class="entries m_horizontal">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
              <?php the_post(); ?>
                <!-- entry-item -->
                <a href="<?php the_permalink() ?>" class="entry-item">
                  <!-- entry-item-img -->
                  <div class="entry-item-img">
                    <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                    <?php endif; ?>
                  </div><!-- /entry-item-img -->

                  <!-- entry-item-body -->
                  <div class="entry-item-body">
                    <div class="entry-item-meta">
                      <div class="entry-item-tag"><?php single_cat_title(); ?></div><!-- /entry-item-tag -->
                      <time class="entry-item-published" datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j') ?></time>
                    </div><!-- /entry-item-meta -->
                    <h2 class="entry-item-title"><?php the_title() ?></h2><!-- /entry-item-title -->
                    <div class="entry-item-excerpt">
                      <p><?php the_excerpt() ?></p>
                    </div><!-- /entry-item-excerpt -->
                  </div><!-- /entry-item-body -->
                </a><!-- /entry-item -->

            <?php endwhile; ?>
          <?php endif; ?>
				</div><!-- /entries -->


				<!-- pagination -->
        <?php if(paginate_links()) :?>
          <div class="pagination">
            <?php 
              echo paginate_links(
                array(
                  'end_size' => 0,
                  'mid_size' => 1,
                  'prev_next' => true,
                  'prev_text' => '<i class="fas fa-angle-left"></i>',
                  'next_text' => '<i class="fas fa-angle-right"></i>',
                )
              );
            ?>
          </div><!-- /pagination -->
        <?php endif; ?>

			</main><!-- /primary -->

			<!-- secondary -->
      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

  <?php get_footer(); ?>
