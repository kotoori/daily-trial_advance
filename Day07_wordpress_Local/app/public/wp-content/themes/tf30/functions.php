<?php
  /* wordpress標準機能の拡張 */
  function my_setup(){
    add_theme_support('post-thumbnails'); /* アイキャッチ画像の設定 */
    add_theme_support('automatic-feed-links'); /* RSSフィードのURL生成 */
    add_theme_support('title-tag'); /* titleタグの自動生成 */
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) ); /* マークアップをHTML5にする */
  }

  add_action("after_setup_theme", "my_setup");

  /* wordpress管理画面でメニューを管理する */
  function my_menu_init(){
    register_nav_menus(
      array(
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
        'footer' => 'フッターメニュー'
      )
    );
  }

  add_action("init", "my_menu_init");

  /* CSS/JSの読み込み */
  function my_script_init(){
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_style("my", get_template_directory_uri()."/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri()."/js/script.js", array("jquery"), filemtime(get_theme_file_path('/js/script.js')), true);
    if(is_single()){
      wp_enqueue_script("sns", get_template_directory_uri()."/js/sns.js", array("jquery"), filemtime(get_theme_file_path('/js/sns.js')), true);
    }
  }

  add_action("wp_enqueue_scripts", "my_script_init");

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};

add_filter('get_the_archive_title', 'my_archive_title');

function my_the_post_category($anchor = true){
  $category = get_the_category();
  if($category && $category[0]){
    if($anchor){
      echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . $category[0]->cat_name . '</a>';
    }else{
      echo $category[0]->cat_name;
    }
  }
}

function my_the_post_tag($post_id = 0){
  if($post_id === 0){
    $post_obj = get_queried_object();
    $post_id = $post_obj->ID;
  }

  $post_tags = get_the_tags($post_id);
  if($post_tags){
    foreach($post_tags as $tag){
      echo '<div class="entry-tag-item"><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . $tag->name . '</a></div><!-- /entry-tag-item -->';
    }
  }
}

function my_link_pages(){
  wp_link_pages(
    array(
      'before' => '<nav class="entry-links">',
      'after' => '</nav>',
      'link_before' => '',
      'link_after' => '',
      'next_or_number' => 'number',
      'separator' => '',
    )
  );
}

