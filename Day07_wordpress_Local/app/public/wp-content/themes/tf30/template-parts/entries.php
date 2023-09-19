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
        <?php get_template_part('template-parts/pagination'); ?>