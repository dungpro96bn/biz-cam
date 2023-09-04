<?php get_header(); ?>
<?php 
if (is_post_type_archive('case') || is_tax('case-cat')){
	get_template_part('case');
}else{
?>
<main id="news">
<article>
<?php 
if(is_category()){
$category = get_category($cat);
$cat_slug = $category->slug;
}
?>
<section class="title_white">
<h1 class="title">NEWS<span>ニュース</span></h1>
</section>
<div class="container_large">
<ul class="nav_news flex_wrap">
<li <?php if(! is_category()){ echo 'class="select"';} ?>><a href="<?php echo get_bloginfo('url'); ?>/news/">全て</a></li>
<?php
$categories = get_categories();
foreach($categories as $taxonomyss):
$taxonomyssid = get_cat_ID( $taxonomyss->name );
$category_link = get_category_link( $taxonomyssid );
?>
<li<?php if($taxonomyss->slug == $cat_slug){ print(' class="select"');} ?>><a href="<?php echo $category_link; ?>"><?php echo $taxonomyss->name; ?></a></li>
<?php
endforeach;
wp_reset_query();
?>
</ul>
<div class="TAB">
<?php if ( have_posts() ) : ?>
<div class="news_list">
<ul class="news">
<?php while (have_posts()) : the_post(); ?>
<?php
$cats = get_the_category();
$cat = $cats[0];
$cat_slug = $cat->slug;
?>
<li>
<p class="news_date"><?php the_time('Y.m.d'); ?></p>
<p class="news_category<?php if($cat_slug == 'topics'){echo ' black';}else{echo ' blue';} ?>"><b><?php echo $cat->cat_name; ?></b></p>
<h2 class="news_title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
</li>
<?php endwhile; ?>
</ul>
<?php pagination($wp_query->max_num_pages, 1); ?>
<?php else: ?><!--  キーワードが見つからないときの処理 -->
<div class="page_sec">
<p>このカテゴリーの投稿はまだありません。</p>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
</div>
</div>
</div>
</article>
</main>
<?php } ?>
<?php get_footer();?>