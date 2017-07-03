<?php 
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'سایدبار سمت راست',
    'before_widget' => '<div class ="block-area">',
    'after_widget' => '</div>',
    'before_title' => '<div class="block-title"><h4>',
    'after_title' => '</h4></div>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'سایدبار پایین',
    'before_widget' => '<div class ="block-area justify">',
    'after_widget' => '</div>',
    'before_title' => '<div class="block-title"><i class="fa fa-chevron-left widget-icon" aria-hidden="true"></i><h4>',
    'after_title' => '</h4></div>',
  )
);

function get_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

if ( ! function_exists( 'rokesh_pagination' ) ) :
  function rokesh_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'prev_next'    => True,
      'prev_text'    => __('« قبلی'),
      'next_text'    => __('بعدی »'),
      'total' => $wp_query->max_num_pages
    ) );
  }
endif;


?>