<?php get_header(); ?>
<main id="column_detail">
<?php while ( have_posts() ) : the_post(); ?>
<section class="title_white">
<p class="title"><a href="/column/">COLUMN<span>コラム</span></a></p>
</section>
<div class="container_medium">
<?php
$terms = get_the_terms($post->ID,'column-cat');
$term = $terms[0];
if($term){
?>
<p class="column_name"><strong><a href="<?php echo get_term_link($term->slug, 'column-cat'); ?>"><?php echo $term->name; ?></a></strong></p>
<?php } ?>
<div class="column_content">
<div class="column_main">
<p class="column_date"><?php the_time('Y.m.d'); ?></p>
<h1 class="column_title"><?php the_title(); ?></h1>
<?php if(has_post_thumbnail()): ?>
<p><?php the_post_thumbnail('large'); ?></p>
<?php endif; ?>
<?php the_content(); ?>
<div class="sns_share">
<p>SHARE</p>
<a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="株式会社キャムテックのTwitter(ツイッター)への遷移ボタン"></a>
<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="株式会社キャムテックのFacebook(フェイスブック)への遷移ボタン"></a>
<a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt="株式会社キャムテックのline(ライン)への遷移ボタン"></a>
</div>
</div>
<?php get_sidebar();?>
</div>
<a href="/column/" class="btn_white_center">一覧に戻る</a>
</div>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>
<div class="column_other bg_grey">
<h2>こちらの記事もおすすめです</h2>
<?php
$post_id = get_the_ID();
query_posts(
	array(
		'post_type' =>  'column',
		'posts_per_page' => 8,
		'post__not_in' => array($post_id)
	)
);
?>
<div class="container_large">
<?php if ( have_posts() ) : ?>
<ul class="column_list">
<?php while (have_posts()) : the_post(); ?>
<li>
<figure class="thumbnail">
<?php
if(has_post_thumbnail()){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'columnthumb');
	$thumb = $image_url[0];
}else{
	$thumb = get_template_directory_uri().'/img/non_pic.jpg';
}
?>
<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>のイメージ"></a></figure>
<h3><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth($post-> post_title,0,36,'...'); ?></a></p>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
</div>
</div>
</main>
<?php get_footer();?>