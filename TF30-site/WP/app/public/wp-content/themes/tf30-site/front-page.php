<?php get_header(); ?>

    <!-- front-page -->
    <main id="front-page" class="front-page">
      <div class="main-visual">
        <div class="main-visual__image">
          <?php $mv_img = get_field('mv_img'); 
            if($mv_img && $mv_img['url']): ?>
            <img src="<?= $mv_img['url'];?>" alt="">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
          <?php endif; ?>
        </div>
        <div class="main-visual__inner">
          <p class="main-visual__title"><?php bloginfo('name'); ?></p>
          <p class="main-visual__text">
            <?php bloginfo('description'); ?>
          </p>
        </div>
      </div>

      <?php $page_id = get_page_by_path('about')->ID; ?>
      <section>
        <div class="inner">
          <div class="about">
            <div class="about__body">
              <h2 class="heading-utility"><?echo get_the_title( $page_id ); ?></h2>
              <p class="about__text">
                <?= get_the_excerpt( $page_id ); ?>
              </p>
              <div class="about__button">
                <a href="<?= get_permalink( $page_id ); ?>" class="button-utility">詳しく見る</a>
              </div>
            </div>
            <div class="about__image">
              <?php if(has_post_thumbnail( $page_id )): ?>
                  <img src="<?php echo get_the_post_thumbnail_url( $page_id, 'medium' ); ?>" alt="<?php echo get_the_title( $page_id ); ?>" />
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="<?php echo get_the_title( $page_id ); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <?php $page_id = get_page_by_path('articles')->ID; ?>
      <section class="articles">
        <div class="inner">
          <h2 class="heading-utility"><?php echo get_the_title($page_id); ?></h2>
            <?php 
            $article_query = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => 3
            ));?>
            <?php if($article_query->have_posts()): ?>
            <div class="articles__articles grid-layout">
              <?php while($article_query->have_posts()): $article_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="entry-item">
                <div class="entry-item-img">
                  <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="<?php the_title(); ?>" />
                  <?php endif; ?>
                </div>
                <div class="entry-item-body">
                  <div class="entry-item-meta">
                    <?php $cat = get_the_category();
                    if($cat && $cat[0]) : ?>
                      <div class="entry-item-tag"><?= $cat[0]->name; ?></div>
                    <?php endif; ?>
                    <time class="entry-item-published" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j'); ?></time>
                  </div>
                  <h2 class="entry-item-title"><?php the_title(); ?></h2>
                  <div class="entry-item-excerpt">
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </a>
              <?php endwhile;?>
            </div>
            <div class="articles__button">
              <a href="<?php echo get_permalink($page_id); ?>" class="button-utility">一覧を見る</a>
            </div>
          <?php else: ?>
            <p class="no-posts-text">記事がありません</p>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </section>

      <?php $post_type = 'work';
      $post_type_obj = get_post_type_object($post_type);
      ?>
      <section class="work">
        <div class="inner">
          <h2 class="heading-utility"><?= $post_type_obj->label; ?></h2>
            <?php $work_query = new WP_Query(array(
              'post_type' => $post_type,
              'posts_per_page' => 3
            )); ?>
            <?php if($work_query->have_posts()): ?>
              <div class="work__articles grid-layout">
              <?php while($work_query->have_posts()): $work_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="entry-item entry-item-horizontal">
                <div class="entry-item-img">
                  <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </div>
                <div class="entry-item-body">
                  <div class="entry-item-meta">
                    <?php $cat = get_the_terms($post->ID, 'genre');
                    if($cat && $cat[0]):?>
                      <div class="entry-item-tag"><?= $cat[0]->name; ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="entry-item-title"><?php the_title(); ?></div>
                  <div class="entry-item-excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </a>
              <?php endwhile; ?>
            </div>
            <div class="work__button">
              <a href="<?php echo get_post_type_archive_link($post_type); ?>" class="button-utility">一覧を見る</a>
            </div>
            <?php else: ?>
              <p class="no-posts-text">制作実績がありません</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
      </section>

      <?php $page_id = get_page_by_path('contact')->ID;
      $sp_img = ''; $pc_img = ''; ?>
      <section class="contact">
        <picture class="contact__image">
          <?php $contact_sec_img_group = get_field('contact_sec_img'); 
          if($contact_sec_img_group){
            if($contact_sec_img_group['pc'] && $contact_sec_img_group['pc']['url']){
              $pc_img = $contact_sec_img_group['pc']['url'];
            }else{
              $pc_img = get_template_directory_uri() . "/img/noimg.png";
            }
            if($contact_sec_img_group['sp'] && $contact_sec_img_group['sp']['url']){
              $sp_img = $contact_sec_img_group['sp']['url'];
            }else{
              $sp_img = get_template_directory_uri() . "/img/noimg.png";
            }
          }
          ?>
          <source
            media="(max-width: 767px)"
            srcset="<?= $sp_img; ?>"
          />
          <img src="<?= $pc_img; ?>" alt="" />
        </picture>
        <div class="contact__inner inner">
          <h2 class="contact__heading"><?=get_the_title($page_id); ?></h2>
          <p class="contact__text">
            <?= get_the_excerpt($page_id); ?>
          </p>
          <div class="contact__button">
            <a href="<?=get_permalink($page_id); ?>" class="button-utility">お問い合わせはこちら</a>
          </div>
        </div>
      </section>
    </main>
    <!-- /front-page -->

<?php get_footer(); ?>
