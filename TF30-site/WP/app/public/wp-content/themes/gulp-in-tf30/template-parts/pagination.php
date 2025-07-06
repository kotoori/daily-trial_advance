<?php if(paginate_links()) :?>
<!-- pagination -->
<div class="pagination">
  <?php 
    
    $args = array(
        'end_size' => 0,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
    );

    $total_pages = $wp_query->max_num_pages;
    if ($total_pages > 3) {
      $args['first_page_text'] = __('<<');
      $args['last_page_text'] = __('>>');
    }
    echo paginate_links($args);
  ?>
</div><!-- /pagination -->

<div class="pagination pagination2">
  <?php 
    
    $current_page = max(1, get_query_var('paged'));
    $total_pages = $wp_query->max_num_pages;
    
    $args = array(
        'end_size' => 0,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
    );

    echo custom_pagination_with_first_last($args, $current_page, $total_pages);
  ?>
</div><!-- /pagination -->

<div class="pagination pagination3">
  <?php 
    
    $args = array(
        'end_size' => 0,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<span class="c-pager__prev"></span>',
        'next_text' => '<span class="c-pager__next"></span>',
    );

    echo paginate_links($args);
  ?>
<?php endif; ?>
