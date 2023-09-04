<div class="column_side">
<?php
$post_id = get_the_ID();
$terms = get_the_terms($post_id,'column-cat');
$term = $terms[0];
$term = $term->slug;
query_posts(
	array(
		'post_type' =>  'column',
		'posts_per_page' => -1,
		'tax_query' => array(
            array(
                'taxonomy' => 'column-cat',
                'field' => 'slug',
                'terms' => $term,
             ),
         ),
		'post__not_in' => array($post_id)
	)
);
?>
<?php if ( have_posts() ) : ?>
<h2>バックナンバー</h2>
<ul class="column_backnumber">
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php 
$custom_post_tag = 'columntag';
$custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
?>
<h2>タグ</h2>
<?php if ( $custom_post_tag_terms ) { ?>
<ul class="column_tag">
<?php foreach($custom_post_tag_terms as $term){ ?>
<li><a href="<?php echo get_term_link($term->slug, $custom_post_tag); ?>"><?php echo $term->name; ?></a></li>
<?php } ?>
</ul>
<?php } ?>
</div>