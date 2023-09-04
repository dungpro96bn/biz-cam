<?php get_header();?>
<?php
if(is_page('contact')) {
	$prev_url =  $_SERVER['REQUEST_URI'];
	if(isset($_SERVER['HTTP_REFERER']) && stripos($_SERVER['HTTP_REFERER'], 'roukan-nencho' ) !== false) {
		echo '<script type="text/javascript">        
			jQuery(function($) { 
				$(function() {
					$("#contact .mwform-checkbox-field input").each(function() {
						if(this.value == "ROUKAN年末調整") {					
							this.setAttribute("checked", "checked");                
						} 

					});                
				});
			});
		</script>';
	}
}

$parents_id = get_post_ancestors( $post );
$parents_id = array_reverse($parents_id);
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer();?>