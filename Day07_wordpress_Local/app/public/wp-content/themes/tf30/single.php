
  <?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
        <?php if(function_exists('bcn_display')): ?>
          <div class="breadcrumb">
            <?php bcn_display(); ?>
          </div><!-- /breadcrumb -->
        <?php endif; ?>

				<!-- entry -->
        <?php if(have_posts()): ?>
          <?php while(have_posts()): ?>
            <?php the_post(); ?>
              <article class="entry">
              <!-- entry-header -->
              <div class="entry-header">
                <?php
                  $category = get_the_category();
                  if($category && $category[0]): ?>
                    <div class="entry-label"><a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
                  <?php endif; ?>
                <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
    
                <!-- entry-meta -->
                <div class="entry-meta">
                  <time class="entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                  <?php if(get_the_modified_time('c') !== get_the_time('c')): ?>
                    <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                  <?php endif; ?>
                </div><!-- /entry-meta -->
    
                <!-- entry-img -->
                <div class="entry-img">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                  <?php endif; ?>
                </div><!-- /entry-img -->
    
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
    
              <?php $post_tags = get_the_tags(); ?>
              <?php if($post_tags): ?>
                <div class="entry-tag-items">
                  <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
                  <?php foreach($post_tags as $tag): ?>
                    <div class="entry-tag-item"><a href="<?php echo esc_url(get_tag_link($tag->term_id)) ?>"><?php echo $tag->name ?></a></div><!-- /entry-tag-item -->
                  <?php endforeach; ?>
                  </div><!-- /entry-tag-items -->
                <?php endif; ?>

              <?php
                if(has_category()):
                  $category = get_the_category();
                  $arrayCatId = array();
                  foreach($category as $categoryItem){
                    $arrayCatId[] = $categoryItem->term_id;
                  }
                  $current_post_id = get_the_ID();

                  $conditions = array(
                    'category__in' => $arrayCatId,   //表示中の記事と同じカテゴリー
                    'post__not_in' => [$current_post_id],   //現在の記事は除外
                    'posts_per_page' => 8,  //8記事
                    'orderby' => 'rand',
                  );
                  $my_query = new WP_Query( $conditions );  //サブクエリ発行
                ?>
                
                  <?php if($my_query->have_posts()): ?>
                    <div class="entry-related">
                      <div class="related-title">関連記事</div>
                      <div class="related-items">
                        <?php while($my_query->have_posts()):?>
                          <?php $my_query->the_post(); ?>
                          <a class="related-item" href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                              <div class="related-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt=""></div><!-- /related-item-img -->
                            <?php endif; ?>
                            <div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
                          </a><!-- /related-item -->
                        <?php endwhile;?>
                      </div><!-- /related-items -->
                    </div><!-- /entry-related -->
                  <?php endif; ?> <!-- hove_posts() -->
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?> <!-- has_category() -->
            </article> <!-- /entry -->

            <?php endwhile; ?>
        <?php endif; ?>
			</main><!-- /primary -->

      <?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

  <?php get_footer(); ?>
