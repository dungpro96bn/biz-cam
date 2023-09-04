<?php
add_theme_support('post-thumbnails');
add_image_size('casethumb', 265, 139, true);
add_image_size('casethumb2', 150, 150);
add_image_size('columnthumb', 280, 160, true);
add_image_size('servicethumb', 380, 200, true);
add_filter('show_admin_bar', '__return_false');
add_filter('widget_text', 'do_shortcode' ); 
function shortcode_url() { return get_bloginfo('url'); }
add_shortcode('url', 'shortcode_url');
function shortcode_title() { return get_the_title(); }
add_shortcode('title', 'shortcode_title');
function shortcode_template_directory() { return get_template_directory_uri(); }
add_shortcode('tmp_dir', 'shortcode_template_directory');
function shortcode_get_template_part($atts) {
	extract(shortcode_atts(array(
	"slug" => 'templates/part',
	"name" => ''
			), $atts));
			ob_start();
			get_template_part($slug,$name);
			return ob_get_clean();
}
add_shortcode('get_tmp', 'shortcode_get_template_part'); 
function clearboth() { return "<br class='clear'>"; }
add_shortcode('clear', 'clearboth');
function subFunc( $atts, $content = null ) { return '<div class="detail-sub">' . $content . '</div>'; }
add_shortcode('sub', 'subFunc');
function pagination($pages = '', $range = 4){
     $showitems = ($range * 2)+1;  
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   
     if(1 != $pages){
         echo "<div class=\"wp-pagenavi\">";		 
         for ($i=1; $i <= $pages; $i++){
			 if($paged == $pages){
				 $range = 2;
			 }
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
		 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<span>…</span><a href='".get_pagenum_link($pages)."'>".$pages."</a>";
         echo "</div>\n";
     }
}
add_editor_style('editor-style.css');
function custom_editor_settings( $initArray ) {
    $initArray['body_class'] = 'editor-area';
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );
add_action('admin_menu', function () { remove_menu_page('edit.php'); });
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type('post', [
        'labels' => [
            'name' => 'ニュース',
            'singular_name' => 'ニュース'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'news',
        ],
    ]);
  register_post_type( 'case', 
    array(
      'labels' => array(
        'name' => __( '導入事例' ),
        'singular_name' => __( '導入事例' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'menu_position' =>5,
      'has_archive' => true,
	  'rewrite' => array('with_front' => false),
    )
  );
  register_taxonomy(
    'case-cat', 
    'case', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
  register_post_type( 'column', /* post-type */
    array(
      'labels' => array(
        'name' => __( 'コラム' ),
        'singular_name' => __( 'コラム' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
      'menu_position' =>5,
      'has_archive' => true,
	  'rewrite' => array('with_front' => false),
    )
  );
  register_taxonomy(
    'column-cat', 
    'column', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
  register_taxonomy(
    'columntag', 
    'column', 
    array(
      'hierarchical' => false, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'タグ',
      'singular_label' => 'タグ',
      'public' => true,
      'show_ui' => true
    )
  );
}
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
	$args['checked_ontop'] = false;
	return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );
function add_my_ajaxurl() {
?>
    <script>
        var ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';
    </script>
<?php
}
add_action( 'wp_footer', 'add_my_ajaxurl', 1 );
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' ||  $typenow == 'mw-wp-form'){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


function dp_deregister_scripts() {
  if ( is_page( 'contact' ) ) {
    wp_deregister_script( 'recaptcha__en.js' );
    wp_dequeue_script( 'recaptcha__en.js' );
  }
}
add_action( 'wp_print_scripts', 'dp_deregister_scripts', 100 );


