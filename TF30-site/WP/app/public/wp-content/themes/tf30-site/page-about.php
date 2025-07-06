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
  <section class="about-introduction">
    <div class="inner">
      <div class="about-introduction__contents">
        <section class="about-item">
          <div class="about-item__body">
            <h2 class="about-item__heading">MISSION</h2>
            <p class="about-item__text">
              私たちは、未来を担う人材を育成し、社会全体の発展に貢献することを使命としています。教育を通じて、人々が持つ可能性を最大限に引き出し、持続可能な社会の実現を目指します。
            </p>
          </div>
          <div class="about-item__image">
            <img
              src="<?= get_template_directory_uri(); ?>/img/site/about1.webp"
              alt="青空の下、ビルが写っている様子。"
              width="1040"
              height="585"
            />
          </div>
        </section>
        <section class="about-item about-item--reverse">
          <div class="about-item__body">
            <h2 class="about-item__heading">VISION</h2>
            <p class="about-item__text">
              私たちは、異なる文化や背景を持つ人々が共に成長し、新しい価値を生み出す社会を目指します。すべての人々がその個性を発揮できる環境を整え、多様な視点から新たなイノベーションを生み出すことが、私たちのビジョンです。
            </p>
          </div>
          <div class="about-item__image">
            <img
              src="<?= get_template_directory_uri(); ?>/img/site/about2.webp"
              alt="オレンジ色のマーカーで透明なガラスボードにカラフルな文字や図を描いている様子。"
              width="1040"
              height="585"
            />
          </div>
        </section>
      </div>
    </div>
  </section>
  <section class="about-overview">
    <div class="about-overview__inner inner">
      <div class="table-overview">
        <h2 class="table-overview__heading">会社情報</h2>
        <dl class="table-overview__definition-list">
          <dt class="table-overview__term">代表</dt>
          <dd class="table-overview__description">山田 太郎</dd>
          <dt class="table-overview__term">設立</dt>
          <dd class="table-overview__description">2024年11月11日</dd>
          <dt class="table-overview__term">所在地</dt>
          <dd class="table-overview__description">
            〒123-4567<br />東京都中央区銀座1丁目2-3
          </dd>
          <dt class="table-overview__term">TEL</dt>
          <dd class="table-overview__description">03-123-4567</dd>
          <dt class="table-overview__term">E-mail</dt>
          <dd class="table-overview__description">example@example.com</dd>
        </dl>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>