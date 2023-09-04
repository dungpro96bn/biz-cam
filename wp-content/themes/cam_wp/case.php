<main id="case">
<?php 
if(is_tax()){
$term_object = get_queried_object();
$cat_slug = $term_object->slug; 
}
?>
<section class="title_white">
<h1 class="title"><a href="/case/">CASE<span>導入事例</span></a></h2>
</section>
<div class="container_large">
<ul class="nav_news flex_wrap">
<?php
$categories = get_terms( 'case-cat');
foreach($categories as $taxonomyss):
$taxonomyssid = get_cat_ID( $taxonomyss->name );
$category_link = get_term_link($taxonomyss->slug, 'case-cat');
?>
<li<?php if($taxonomyss->slug == $cat_slug){ print(' class="select"');} ?>><a href="<?php echo $category_link; ?>"><?php echo $taxonomyss->name; ?></a></li>
<?php
endforeach;
wp_reset_query();
?>
</ul>
<div class="TAB">
<?php if ( have_posts() ) : ?>
<div class="case_list">
<ul class="case">
<?php while (have_posts()) : the_post(); ?>
<li>
<div class="thumbnail">
<a href="<?php the_permalink(); ?>">
<?php
if(has_post_thumbnail()){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'casethumb');
	$thumb = $image_url[0];
}else{
	$thumb = get_template_directory_uri().'/img/non_pic.jpg';
}
?>
<img src="<?php echo $thumb; ?>" alt="<?php echo the_field( 'company_name' ); ?>の導入事例のイメージ <?php echo the_field( 'industry' ); ?>業">
</a>
</div>
<p class="case_company"><?php echo the_field( 'company_name' ); ?></p>
<h2 class="case_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<dl class="case_date">
<?php if(get_field('industry')){ ?>
<dt>業種</dt>
<dd><?php echo the_field( 'industry' ); ?></dd>
<?php } ?>
<?php if(get_field('employees')){ ?>
<dt>従業員数</dt>
<dd><?php echo the_field( 'employees' ); ?></dd>
<?php } ?>
<?php if(get_field('task')){ ?>
<dt>課題</dt>
<dd><?php echo the_field( 'task' ); ?></dd>
<?php } ?>
<?php if(get_field('service_disc')){ ?>
<dt>導入サービス</dt>
<dd><?php echo the_field( 'service_disc' ); ?></dd>
<?php } ?>
</dl>
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
</main>