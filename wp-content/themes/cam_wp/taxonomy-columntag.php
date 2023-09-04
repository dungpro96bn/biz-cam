<?php get_header(); ?>
<main id="column">
<section class="title_white">
<h1 class="title">COLUMN<span><?php echo single_term_title(); ?>のコラム一覧</span></h1>
</section>
<div class="container_large">
<?php if(have_posts()): ?>
<ul class="column">
<?php while(have_posts()): the_post(); ?>
<li class="clearfix">
<figure class="thumbnail">
<a href="<?php the_permalink(); ?>">
<?php
if(has_post_thumbnail()){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'columnthumb');
	$thumb = $image_url[0];
}else{
	$thumb = get_template_directory_uri().'/img/non_pic.jpg';
}
?>
<img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>のイメージ">
</a>
</figure>
<?php
$terms = get_the_terms($post->ID,'column-cat');
$term = $terms[0];
?>
<?php if($term){ ?>
<p class="column_name"><?php echo $term->name; ?></p>
<?php } ?>
<h2 class="column_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(strip_tags(strip_shortcodes($post-> post_content)),0,160,'...'); ?></a></p>
<?php 
$custom_post_tag = 'columntag';
$custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
?>
<?php if ( $custom_post_tag_terms ) { ?>
<ul class="column_tag">
<?php foreach($custom_post_tag_terms as $term){ ?>
<li><a href="<?php echo get_term_link($term->slug, $custom_post_tag); ?>"><?php echo $term->name; ?></a></li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php endwhile; ?>
</ul>
<?php pagination($wp_query->max_num_pages, 1); ?>
<?php endif; wp_reset_postdata(); wp_reset_query(); ?>
</div>
<div class="column_other bg_grey">
<h2 class="title">COLUMN LIST<span>コラム一覧</span></h2>
<?php $terms = get_terms( 'column-cat'); ?>
<div class="container_large">
<ul class="column_list">
<?php foreach ( $terms as $term ){ ?>
<li>
<?php
$image = get_field('thumb_cat', $term);
if($image){
	$thumb_cat = $image['url'];
}else{
	$thumb_cat = get_template_directory_uri().'/img/non_pic.jpg';
}
?>
<figure class="thumbnail"><a href="<?php echo get_term_link($term->slug, 'column-cat'); ?>"><img src="<?php echo $thumb_cat; ?>" alt="<?php echo $term->name; ?>"></a></figure>
<p><a href="<?php echo get_term_link($term->slug, 'column-cat'); ?>"><?php echo $term->name; ?></a></p>
</li>
<?php } ?>
</ul>
</div>
</div>
</main>
<?php get_footer();?>